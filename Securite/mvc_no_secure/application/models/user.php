<?php
	namespace app\md;
	use app\md\User as User;
	use \PDO;

	class User extends \core\Model {

		public function getLogin(){

		  $login = $_POST["inputlogin"];
		  $password = $_POST["inputpwd"];
		  $sql =
      '
        SELECT pseudo, profil, id
        FROM user
        WHERE pseudo = "$pseudo" AND pwd = "$password"
        LIMIT 1
      ';
		  $req = $this->pdo->query($sql);

		  return $req->rowCount() > 0 ?
        $req->fetchAll(PDO::FETCH_OBJ) :
        false;

		}

	}


