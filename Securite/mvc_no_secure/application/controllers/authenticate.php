<?php
	namespace app;
	//use app\Authenticate as Authenticate;
	use \core\Controller;

	class Authenticate extends Controller {
        
        
    function __construct(){
      require BASE_APP . "models/User.php";
		}

    /**
     * Charge la vue du formulaire
     */
		public function index(){
      $this->data = [
        "titre" => "page login",
      ];
      $this->view("public", "login_view", $this->data);
		}

    /**
     * demande au modèle user de vérifier la saisie
     * redirige vers admin si OK sinon vers le formulaire
     */
    public function login(){
      $user = new md\User();
      if ($user->getLogin() != false) {
        $_SESSION["auth"] = [
          "pseudo"  => $user->getLogin()[0]->pseudo,
          "profil"  => $user->getLogin()[0]->profil,
          "id"      => $user->getLogin()[0]->id
        ];
        header("location:".BASE_URL."/admin");
      } else {
        header("location:".BASE_URL."/authenticate");
      }
    }

    /**
     * déconnexion espace admin
     */
    public function logout() {
      unset($_SESSION["auth"]);
      header("location:".BASE_URL."/authenticate");
    }

	}# end class