<?php

namespace Oro\Bundle\UserBundle\Controller\Api\Rest;

use Symfony\Component\Form\FormInterface;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;

use FOS\Rest\Util\Codes;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\Annotations\NamePrefix;
use FOS\RestBundle\Controller\Annotations\QueryParam;

use Oro\Bundle\SecurityBundle\Annotation\Acl;
use Oro\Bundle\SecurityBundle\Annotation\AclAncestor;

use Oro\Bundle\SoapBundle\Controller\Api\Rest\RestController;
use Oro\Bundle\SoapBundle\Entity\Manager\ApiEntityManager;
use Oro\Bundle\SoapBundle\Form\Handler\ApiFormHandler;

use Oro\Bundle\UserBundle\Entity\Role;
use Oro\Bundle\UserBundle\Entity\Group;
use Oro\Bundle\UserBundle\Entity\Email;
use Oro\Bundle\OrganizationBundle\Entity\BusinessUnit;

/**
 * @NamePrefix("oro_api_")
 */
class UserController extends RestController implements ClassResourceInterface
{
    /**
     * Get the list of users
     *
     * @QueryParam(
     *      name="page",
     *      requirements="\d+",
     *      nullable=true,
     *      description="Page number, starting from 1. Defaults to 1."
     * )
     * @QueryParam(
     *      name="limit",
     *      requirements="\d+",
     *      nullable=true,
     *      description="Number of items per page. defaults to 10."
     * )
     * @return \Symfony\Component\HttpFoundation\Response
     * @ApiDoc(
     *      description="Get the list of users",
     *      resource=true,
     *      filters={
     *          {"name"="page", "dataType"="integer"},
     *          {"name"="limit", "dataType"="integer"}
     *      }
     * )
     * @AclAncestor("oro_user_user_view")
     */
    public function cgetAction()
    {
        $page = (int) $this->getRequest()->get('page', 1);
        $limit = (int) $this->getRequest()->get('limit', self::ITEMS_PER_PAGE);

        return $this->handleGetListRequest($page, $limit);
    }

    /**
     * Get user data
     *
     * @param int $id User id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @ApiDoc(
     *      description="Get user data",
     *      resource=true,
     *      requirements={
     *          {"name"="id", "dataType"="integer"},
     *      }
     * )
     * @AclAncestor("oro_user_user_view")
     */
    public function getAction($id)
    {
        return $this->handleGetRequest($id);
    }

    /**
     * Create new user
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @ApiDoc(
     *      description="Create new user",
     *      resource=true
     * )
     * @AclAncestor("oro_user_user_create")
     */
    public function postAction()
    {
        return $this->handleCreateRequest();
    }

    /**
     * Update existing user
     *
     * @param int $id User id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @ApiDoc(
     *      description="Update existing user",
     *      resource=true,
     *      requirements={
     *          {"name"="id", "dataType"="integer"},
     *      }
     * )
     * @AclAncestor("oro_user_user_update")
     */
    public function putAction($id)
    {
        return $this->handleUpdateRequest($id);
    }

    /**
     * Delete user
     *
     * @param int $id User id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @ApiDoc(
     *      description="Delete user",
     *      resource=true,
     *      requirements={
     *          {"name"="id", "dataType"="integer"},
     *      }
     * )
     * @Acl(
     *      id="oro_user_user_delete",
     *      type="entity",
     *      class="OroUserBundle:User",
     *      permission="DELETE"
     * )
     */
    public function deleteAction($id)
    {
        $securityToken = $this->get('security.context')->getToken();
        $user = $securityToken ? $securityToken->getUser() : null;
        if (is_object($user) && $user->getId() != $id) {
            return $this->handleDeleteRequest($id);
        } else {
            return $this->handleView($this->view(null, Codes::HTTP_FORBIDDEN));
        }
    }

    /**
     * Get user roles
     *
     * @param int $id User id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @ApiDoc(
     *      description="Get user roles",
     *      resource=true,
     *      requirements={
     *          {"name"="id", "dataType"="integer"},
     *      }
     * )
     * @AclAncestor("oro_user_role_view")
     */
    public function getRolesAction($id)
    {
        $entity = $this->getManager()->getRepository()->findOneBy(array('id' => (int) $id));

        if (!$entity) {
            return $this->handleView($this->view('', Codes::HTTP_NOT_FOUND));
        }

        return $this->handleView($this->view($entity->getRoles(), Codes::HTTP_OK));
    }

    /**
     * Get user groups
     *
     * @param int $id User id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     * @ApiDoc(
     *      description="Get user groups",
     *      resource=true,
     *      requirements={
     *          {"name"="id", "dataType"="integer"},
     *      }
     * )
     * @AclAncestor("oro_user_group_view")
     */
    public function getGroupsAction($id)
    {
        $entity = $this->getManager()->find($id);

        if (!$entity) {
            return $this->handleView($this->view('', Codes::HTTP_NOT_FOUND));
        }

        return $this->handleView($this->view($entity->getGroups(), Codes::HTTP_OK));
    }

    /**
     * Filter user by username or email
     *
     * @QueryParam(name="email", requirements="[a-zA-Z0-9\-_\.@]+", nullable=true, description="Email to filter")
     * @QueryParam(name="username", requirements="[a-zA-Z0-9\-_\.]+", nullable=true, description="Username to filter")
     * @return \Symfony\Component\HttpFoundation\Response
     * @ApiDoc(
     *      description="Get user by username or email",
     *      resource=true,
     *      filters={
     *          {"name"="email", "dataType"="string"},
     *          {"name"="username", "dataType"="string"}
     *      }
     * )
     * @AclAncestor("oro_user_user_view")
     */
    public function getFilterAction()
    {
        $params = $this->getRequest()->query->all();

        if (empty($params)) {
            return $this->handleView($this->view('', Codes::HTTP_BAD_REQUEST));
        }

        $entity = $this->getManager()->getRepository()->findOneBy($params);

        return $this->handleView(
            $this->view(
                $entity ? $this->getPreparedItem($entity) : null,
                $entity ? Codes::HTTP_OK : Codes::HTTP_NOT_FOUND
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    protected function transformEntityField($field, &$value)
    {
        switch ($field) {
            case 'roles':
                $result = array();
                /** @var Role $role */
                foreach ($value as $index => $role) {
                    $result[$index] = array(
                        'id' => $role->getId(),
                        'role' => $role->getRole(),
                        'label' => $role->getLabel(),
                    );
                }
                $value = $result;
                break;
            case 'groups':
                $result = array();
                /** @var Group $group */
                foreach ($value as $index => $group) {
                    $result[$index] = array(
                        'id' => $group->getId(),
                        'name' => $group->getName()
                    );
                }
                $value = $result;
                break;
            case 'emails':
                $result = array();
                /** @var Email $email */
                foreach ($value as $email) {
                    $result[] = $email->getEmail();
                }
                $value = $result;
                break;
            case 'businessUnits':
                $result = array();
                /** @var BusinessUnit $businessUnit */
                foreach ($value as $index => $businessUnit) {
                    $result[$index] = array(
                        'id' => $businessUnit->getId(),
                        'name' => $businessUnit->getName()
                    );
                }
                $value = $result;
                break;
            case 'owner':
                if ($value) {
                    $value = array(
                        'id' => $value->getId(),
                        'name' => $value->getName()
                    );
                }
                break;
            default:
                parent::transformEntityField($field, $value);
        }
    }

    /**
     * {@inheritdoc}
     */
    protected function getPreparedItem($entity)
    {
        $result = parent::getPreparedItem($entity);

        unset($result['salt']);
        unset($result['password']);
        unset($result['confirmationToken']);
        unset($result['passwordRequestedAt']);
        unset($result['imapConfiguration']);
        unset($result['currentStatus']);
        unset($result['statuses']);
        unset($result['api']);

        $result['imagePath'] = null;
        if (isset($result['image'])) {
            $result['imagePath'] = $this->getRequest()->getBasePath() . '/' . $entity->getImagePath();
        }
        unset($result['image']);

        return $result;
    }

    /**
     * Get entity Manager
     *
     * @return ApiEntityManager
     */
    public function getManager()
    {
        return $this->get('oro_user.manager.api');
    }

    /**
     * @return FormInterface
     */
    public function getForm()
    {
        return $this->get('oro_user.form.user.api');
    }

    /**
     * @return ApiFormHandler
     */
    public function getFormHandler()
    {
        return $this->get('oro_user.form.handler.user.api');
    }
}
