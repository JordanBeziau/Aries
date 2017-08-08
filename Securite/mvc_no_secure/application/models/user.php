<?php
	namespace app\md;
	//use app\md\User as User;
	use \PDO;
	use \core\Model;

	class User extends Model {

		public function getLogin(){

		  $login = $_POST["inputlogin"];
		  $password = $_POST["inputpwd"];
		  $sql =
      "
        SELECT pseudo, profil, id
        FROM user
        WHERE pseudo = :pseudo AND password = :password
        LIMIT 1;
      ";
		  $query = $this->pdo->prepare($sql);
		  $query->bindParam(":pseudo", $login, PDO::PARAM_STR);
		  $query->bindParam(":password", $password, PDO::PARAM_STR);
		  $query->execute();

		  return $query->rowCount() > 0 ?
        $query->fetchAll(PDO::FETCH_OBJ) :
        false;

		}

	}


