<?php
	namespace app;
	//use app\Accueil as Accueil;
	use \core\Controller;
	use core\Session;

	class Accueil extends Controller {

	  private $modelArticle;

		/**
		* méthode par défaut
		*/

		public function __construct() {
      if (Session::exist("auth")) {
        Session::destroy("auth");
      }

      require BASE_APP . "/models/Article.php";
      $this->modelArticle = new md\Article();
		}

    public function index($index = 0){
		  $max = $this->modelArticle->count();
		  $show = 4;
		  $links = ceil($max / $show);
		  $selectedPosts = $this->modelArticle->limit($index, $show);

		  $this->data = [
		    "titre"     => "Accueil",
        "articles"  => $selectedPosts,
        "links"     => $links,
        "show"      => $show,
      ];
		  $this -> view("public", "accueil_view", $this->data);
		}



	}# end class