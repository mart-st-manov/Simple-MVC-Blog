<?php

class SubmitAnArticleController {
    private $model = null;
    
    private $title = null;
    private $text = null;
    private $exclusive = null;
    
    public function __construct() {
        $this->title = $_POST['title'];
        $this->text = $_POST['text'];
        if(isset($_POST['exclusive'])){
            $this->exclusive = $_POST['exclusive'];
        }
        
        $this->model = new SubmitAnArticleModel($this->title, $this->text, $this->exclusive);
        
        $loc = $_SERVER['HTTP_HOST'] . '/' . $_SERVER['PHP_SELF'] . '';
        header("Location: http://$loc");
        exit();
        
    }
}
?>
