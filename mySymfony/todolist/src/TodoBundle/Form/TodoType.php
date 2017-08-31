<?php

namespace TodoBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TodoType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('title', TextType::class, array("required" => false))
          ->add('content', TextareaType::class, array("required" => false))
          ->add('category', EntityType::class, array(
            "class" => "TodoBundle\Entity\Category",
            "choice_label" => "name"
          ))
          ->add("dueDate", DateTimeType::class,
            array(
              "widget" => "single_text",
              "format" => "yyyy-MM-dd HH:mm:ss",
              "years" => array("2017, 2018"),
              "data" => new \DateTime("now"),
            ))
          ->add("update", SubmitType::class,
            array(
              "attr" => array(
                "class" => "btn btn-success"
              )
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'TodoBundle\Entity\Todo'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'todobundle_todo';
    }


}
