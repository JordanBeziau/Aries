<?php
	namespace app;
	//use app\Admin as Admin;
	use \core\Controller;

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
      $this->data = [
        "titre" => "Accueil Admin",
        "articles" => $this->modelArticle->allBy($id)
      ];
      $this -> view("admin", "index_view", $this->data);
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
        header("location:".BASE_URL."/admin");
      }
    }
        
        /**
        * @param int $id de l'article
        */
        
        public function edit($id){
          if (empty($_POST)) {
            $this->data = [
              "titre" => "Admin | edit",
              "article" => $this->modelArticle->single($id)
            ];
            $this->view("admin", "edit_view", $this->data);
          } else {
            $this->modelArticle->update();
            header("location:".BASE_URL."/admin/edit/$id");
          }
        }

        /**
        * @param [[Type]] [[Description]]
        */
        
        
        public function delete($id){
         
        }

        

	}# end class