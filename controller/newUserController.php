<?php

class NewUserController
{

    private $model = null;
    private $new_user_name = null;
    private $new_user_pass = null;
    private $new_user_admin = null;
    
    public function __construct()
    {
    
        $this->new_user_name = $_POST['new_user_name'];
        $this->new_user_pass = $_POST['new_user_pass'];
        $this->new_user_admin = 0;
        $this->model = new newUserModel($this->new_user_name, $this->new_user_pass, $this->new_user_admin);
        
        $loc = $_SERVER['HTTP_HOST'] . '/' . $_SERVER['PHP_SELF'] . '';
        header("Location: http://$loc");
        exit();
        
    }
}
?>
