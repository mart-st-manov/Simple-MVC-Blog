<?php

class Controller {
    private $model;
    
    public function __construct() {
        $this->model = new Model();
    }
    
    public function invoke($action) {
        switch ($action) {
            case '':
                $articles = $this->model->fetchAllArticles();
                include 'view/articles.php';
                break;
            
            case 'login':
                $login = new LoginController();
                break;
            
            case 'logout':
                session_unset(); 
                session_write_close(); 
                
                $loc = $_SERVER['HTTP_HOST'] . '/' . $_SERVER['PHP_SELF'] . '';
                header("Location: http://$loc");
                exit();
                break;
            
            case 'register_user':
                $register_user = new NewUserController();
                break;

            case 'controlPanel':
                $submitAnArticle = new controlPanelController();
                break;

            case 'submitAnArticle':
                $submitAnArticle = new submitAnArticleController();
                break;

            default:
                break;
        }
    }
}

?>
