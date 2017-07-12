<?php

/**
 * Created by PhpStorm.
 * User: jordanbeziau
 * Date: 12/07/2017
 * Time: 10:22
 */
class Controller {

  public $data = [];

  public function view( $_niveau, $_page, $_data ) {
    extract($_data);
    $page = BASE_APP."views/$_niveau/$_page.php";
    require BASE_APP."views/public/template.php";
  }

}