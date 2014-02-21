<?php

namespace Oro\Bundle\NotificationBundle\Form\Type;

use Doctrine\ORM\EntityManager;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class RecipientListType extends AbstractType
{
    /**
     * @var EntityManager
     */
    protected $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add(
            'users',
            'oro_user_multiselect',
            [
                'required' => false,
                'label'    => 'oro.user.entity_plural_label'
            ]
        );

        // groups
        $builder->add(
            'groups',
            'entity',
            [
                'label'       => 'oro.user.group.entity_plural_label',
                'class'       => 'OroUserBundle:Group',
                'property'      => 'name',
                'multiple'      => true,
                'expanded'      => true,
                'empty_value'   => '',
                'empty_data'    => null,
                'required'      => false,
            ]
        );

        // custom email
        $builder->add('email', 'email', ['required' => false]);

        // owner
        $builder->add('owner', 'checkbox', ['required' => false]);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class'           => 'Oro\Bundle\NotificationBundle\Entity\RecipientList',
                'intention'            => 'recipientlist',
                'extra_fields_message' => 'This form should not contain extra fields: "{{ extra_fields }}"',
                'cascade_validation'   => true,
            )
        );
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'oro_notification_recipient_list';
    }
}
