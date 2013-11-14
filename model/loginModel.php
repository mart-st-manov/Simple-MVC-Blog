<?php

class LoginModel {
    private $connectionHandler = null;
    private $username = null;
    private $password = null;
    private $isAdmin = null;
    
    function __construct($username, $password) {
        $this->username = $username;
        $this->password = $password;
        
        $this->connectionHandler = new dbHelper();
    }
    
    function login() {
        $query = 'SELECT * FROM users WHERE user_name = "' . $this->username . '" AND user_pass = "' . $this->password . '"';
        return $this->connectionHandler->login($query);
    } 
    
}

?>