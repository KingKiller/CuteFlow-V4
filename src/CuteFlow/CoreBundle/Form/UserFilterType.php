<?php

namespace CuteFlow\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UserFilterType extends AbstractType
{
    public function getName()
    {
        return 'userFilter';
    }

    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('lastName', 'text', array(
                                    'label'=>'Lastname',
                                    'required'=>false
                                          ));
        $builder->add('firstName', 'text', array(
                                    'label'=>'Firstname',
                                    'required'=>false
                                          ));
        $builder->add('username', 'text', array(
                                    'label'=>'Username',
                                    'required'=>false
                                          ));
    }
}
