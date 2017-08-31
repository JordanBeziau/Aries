<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 11/08/2017
 * Time: 13:56
 */
namespace ContactBundle\Form\Type;

use \Symfony\Component\Form\AbstractType;
use \Symfony\Component\Form\FormBuilderInterface;
use \Symfony\Component\Form\Extension\Core\Type\EmailType;
use \Symfony\Component\Form\Extension\Core\Type\TextareaType;
use \Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ContactFormType extends AbstractType {
  public function buildForm(FormBuilderInterface $builder, array $options) {
    $builder
      ->add("from", EmailType::class, array(
        "label" => "Votre adresse email"
      ))
      ->add("message", TextareaType::class, array(
        "label" => "Votre message",
        "attr" => array(
          "row" => 10
        )
      ))
      ->add("send", SubmitType::class, array(
        "attr" => array(
          "class" => "btn btn-lg btn-info btn-block"
        )
      ));
  }
}