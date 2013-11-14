<?php

class LoginController {
    private $username = null;
    private $password = null;
    private $isAdmin = null;
    
    private $model = null;
    
    function __construct() {
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
        
        $this->model = new LoginModel($this->username, $this->password);
        
        if($this->model->login()) {
            $_SESSION['user'] = $this->username;
            $_SESSION['isAdmin'] = $this->isAdmin;
            $loc = $_SERVER['HTTP_HOST'] . '/' . $_SERVER['PHP_SELF'] . '';
            header("Location: http://$loc");
            exit();
        } else {
            echo 'Wrong username or password';
        }
    }
}

?>
