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

        }
        
        /**
        * @param [[Type]] [[Description]]
        */
        
        public function edit($id){


        }
  
        /**
        * @param [[Type]] [[Description]]
        */
        
        
        public function delete($id){
         
        }

        

	}# end class