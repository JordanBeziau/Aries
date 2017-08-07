<?php
	namespace app\md;
	//use app\md\Article as Article;
	use \PDO;
	use \core\Model;

	class Article extends Model {
        
    public function all() {
      $sql =
      "
        SELECT
          A.id,
          A.titre,
          A.contenu,
          A.createdAt,
          U.pseudo
        FROM article AS A
        JOIN user AS U ON A.user_id = U.id
        ORDER BY A.createdAt DESC
      ";
      $req = $this->pdo->query($sql);
      return $req->fetchAll(PDO::FETCH_OBJ);
    }

    public function allby($id) {
      $sql =
        "
        SELECT
          A.id,
          A.titre
        FROM article AS A
        JOIN user AS U ON A.user_id = U.id
        AND U.id = $id
      ";
      $req = $this->pdo->query($sql);
      return $req->fetchAll(PDO::FETCH_OBJ);
    }

	}