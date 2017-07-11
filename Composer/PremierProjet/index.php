<?php
/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 11/07/2017
 * Time: 10:54
 */

require "vendor/autoload.php";

$faker = Faker\Factory::create("fr_FR");

$person = $faker->address;

$u = new Utile();
$u->save($person, "saveperson.txt");

/*
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>'.$person.'</h1>');
$mpdf->Output();