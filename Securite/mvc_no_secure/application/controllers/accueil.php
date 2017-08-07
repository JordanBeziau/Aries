<?php
	namespace app;
	//use app\Accueil as Accueil;
	use \core\Controller;

	class Accueil extends Controller {

	  private $modelArticle;

		/**
		* méthode par défaut
		*/

		public function __construct() {
      require BASE_APP . "/models/Article.php";
      $this->modelArticle = new md\Article();
		}

    public function index(){
		  $this->data = [
		    "titre" => "Accueil",
        "articles" => $this->modelArticle->all()
      ];
		  $this -> view("public", "accueil_view", $this->data);
		}



	}# end class