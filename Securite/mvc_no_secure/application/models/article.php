<?php
	namespace app\md;
	//use app\md\Article as Article;
	use \PDO;

	class Article extends \core\Model {
        
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

	}