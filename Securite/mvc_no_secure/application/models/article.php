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
      $query = $this->pdo->query($sql);
      return $query->fetchAll(PDO::FETCH_OBJ);
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
      $query = $this->pdo->query($sql);
      return $query->fetchAll(PDO::FETCH_OBJ);
    }

    /**
     * return single post with ID
     * @param int $id
     * @return array of object
     */
    public function single($id) {
      $sql =
        "
        SELECT
          A.id,
          A.titre,
          A.contenu
        FROM article AS A
        WHERE id = '$id'
      ";
      $query = $this->pdo->query($sql);
      return $query->fetch(PDO::FETCH_OBJ);
    }

    /**
     * Insérer les données postées depuis admin/create
     */
    public function insert() {
      $titre = htmlspecialchars($_POST["titre"]);
      $contenu = htmlspecialchars($_POST["contenu"]);
      $id = $_SESSION["auth"]["id"];
      $sql =
        "
          INSERT INTO article(titre, contenu, createdAt, user_id)
          VALUES(:titre, :contenu, NOW(), :id)
        ";
      $query = $this->pdo->prepare($sql);
      $query->execute([
        ":titre"    => $titre,
        ":contenu"  => $contenu,
        ":id"       => $id
      ]);
    }

    public function update() {
      $titre = filter_var($_POST["titre"], FILE_SANITIZE_STRING);
      $contenu = filter_var($_POST["contenu"], FILE_SANITIZE_STRING);
      $id = $_POST["id"];
      $sql =
        "
          UPDATE article
          SET titre = :titre, contenu = :contenu
          WHERE id = :id
        ";
      $query = $this->pdo->prepare($sql);
      $query->execute([
        ":titre"    => $titre,
        ":contenu"  => $contenu,
        ":id"       => $id
      ]);
    }

    public function delete($id) {
      $sql =
        "
          DELETE FROM article
          WHERE id = :id
        ";
      $query = $this->pdo->prepare($sql);
      $query->execute([":id" => $id]);
    }
	}