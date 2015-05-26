<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 2015-05-25
 * Time: 22:07
 */

namespace ScayTrase\StoredFormsBundle\Form\Type;

use ScayTrase\StoredFormsBundle\Form\AbstractFieldType;
use Symfony\Component\Form\FormBuilderInterface;

class ChoiceFieldType extends AbstractFieldType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('choices', 'key_value_collection');
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'field_choice_settings';
    }
}