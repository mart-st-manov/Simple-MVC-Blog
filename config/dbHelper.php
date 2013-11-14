<?php

class dbHelper {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "simpleblogdb";
    
    private $connection;
    
    public function __construct() {
        $this->connection = mysql_connect($this->host, $this->user, $this->password) or die(mysql_error());
        $this->connection = mysql_select_db($this->db);
    }
    
    public function connect() {
        return $this->connection;
    }
    
    public function returnAllArticles($query) {
        $q = mysql_query($query) or die(mysql_error());
        
        $articles[mysql_num_rows($q)] = null;
        
        $i = 0;
        
        while($row = mysql_fetch_array($q)) {
            $articles[$i] = $row;
            $i++;
        }
        return $articles;
    }
    
    public function register($query) {
        $q = mysql_query($query) or die(mysql_error());
    }

    public function login($query) {
        $query = mysql_query($query) or die(mysql_error());
        if(mysql_num_rows($query) == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    public function returnNumRows($query) {
        $q = mysql_query($query) or die(mysql_error());
        return mysql_num_rows($q);
    }
    
    public function submitAnArticle($query) {
        $q = mysql_query($query) or die(mysql_error());
    }

    public function disconnect() {
        $this->connection = mysql_close();
        unset($this->connection);
    }
}

?>
