<?php

class Model {
    private $connectionHandler;
    private $query;
    
    public function __construct() {
        $this->connectionHandler = new dbHelper();
    }
    
    public function fetchAllArticles() {
    	if($_SESSION == true) {
        	$this->query = "SELECT * FROM articles";
        }
        else{
        	$this->query = "SELECT * FROM articles WHERE article_exclusive = 0";
        }
        
        return $this->connectionHandler->returnAllArticles($this->query);
    }
}

?>