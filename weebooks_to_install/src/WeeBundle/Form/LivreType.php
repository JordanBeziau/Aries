<?php

namespace WeeBundle\Form;

use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LivreType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
          ->add('imageFile', FileType::class, array(
            'data_class' => null,
            'label' => 'Sélectionner une couverture de livre.'
          ))
          ->add('titre', TextType::class)
          ->add('presentation', TextareaType::class)
          ->add('parution', DateTimeType::class)
          ->add('prix', TextType::class)
          ->add('editeur', EntityType::class, array(
            'class' => 'WeeBundle\Entity\Editeur',
            'choice_label' => 'nom'
          ))
          ->add('Submit', SubmitType::class);
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'WeeBundle\Entity\Livre'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'weebundle_livre';
    }


}
