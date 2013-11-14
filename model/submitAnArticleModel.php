<?php

class SubmitAnArticleModel {
    private $connectionHandler = null;
    
    public function __construct($title, $text, $exclusive) {
        $this->connectionHandler = new dbHelper();
        
        $query = 'INSERT INTO articles (`article_title`, `article_text`, `article_exclusive`) VALUES ("' . $title . '", "' . $text . '", "' . $exclusive . '")';
        
        $this->connectionHandler->submitAnArticle($query);
    }
}
?>
