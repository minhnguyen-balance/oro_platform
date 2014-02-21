<?php

namespace Oro\Bundle\ReportBundle\Form\Type;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Oro\Bundle\QueryDesignerBundle\Form\Type\AbstractQueryDesignerType;
use Oro\Bundle\ReportBundle\Entity\Report;

class ReportType extends AbstractQueryDesignerType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('required' => true))
            ->add('entity', 'oro_report_entity_choice', array('required' => true))
            ->add(
                'type',
                'entity',
                array(
                    'class'       => 'OroReportBundle:ReportType',
                    'property'    => 'label',
                    'required'    => true,
                    'empty_value' => 'oro.report.form.choose_report_type'
                )
            )
            ->add('description', 'textarea', array('required' => false));

        parent::buildForm($builder, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $options = array_merge(
            $this->getDefaultOptions(),
            array(
                'data_class'                  => 'Oro\Bundle\ReportBundle\Entity\Report',
                'intention'                   => 'report',
                'cascade_validation'          => true,
                'grouping_column_choice_type' => 'oro_report_entity_field_choice',
                'column_column_choice_type'   => 'oro_report_entity_field_choice',
                'filter_column_choice_type'   => 'oro_report_entity_field_choice'
            )
        );

        $resolver->setDefaults($options);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'oro_report';
    }
}
