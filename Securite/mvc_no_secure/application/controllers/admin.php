<?php
	namespace app;
	//use app\Admin as Admin;
	use \core\Controller;
	use core\Session;

	class Admin extends Controller {
        
        
    private $modelArticle;

		public function __construct(){
      require BASE_APP . "/models/Article.php";
      $this->modelArticle = new md\Article();
		}

		/**
		 * Charger la vue admin avec les articles des membres connectés
		 */
    public function index(){
      $id = $_SESSION["auth"]["id"];
      $profil = $_SESSION["auth"]["profil"];

      if ($profil == 1) {
        $articles = $this->modelArticle->all();
      } else {
        $articles = $this->modelArticle->allby($id);
      }
      $this->data = [
        "titre"     => "Accueil Admin",
        "articles"  => $articles,
        "profil"    => $profil,
      ];
      if (Session::exist("success")) {
        $this->data["script"] = true;
      }
      $this -> view("admin", "index_view", $this->data);
    }

    public function show($id) {
      $article = $this->modelArticle->single($id);
      $this->data = [
        "titre" => $article->titre,
        "article" => $article
      ];
      $this->view("admin", "post_view", $this->data);
    }
        
    /**
    * [[Description]]
    */

    public function create(){
      if (empty($_POST)) {
        $this->data = [
          "titre" => "Admin | create"
        ];
        $this->view("admin", "create_view", $this->data);
      } else {
        $this->modelArticle->insert();
        Session::set("success", "Article inséré avec succès !");
        //setFlash("success", "Article inséré avec succès !");
        header("location:".BASE_URL."/admin");
      }
    }
        
        /**
        * @param int $id de l'article
        */
        
        public function edit($id){
          $this->data = [
            "titre" => "Admin | edit",
            "article" => $this->modelArticle->single($id)
          ];
          $this->view("admin", "edit_view", $this->data);
        }

        /**
         *
         */
        public function update() {
          $id = $_POST["id"];
          $this->modelArticle->update();
          header("location:".BASE_URL."/admin/edit/$id");
        }

        /**
        * delete single post with id
        * @param int $id de l'article
        */
        public function delete($id, $token) {
         $this->modelArticle->delete($id, $token);
         header("location:".BASE_URL."/admin");
        }

        

	}# end class