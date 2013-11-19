<?php

class newUserModel
{

    private $connectionHandler = null;
    
    public function __construct($new_user_name, $new_user_pass, $new_user_admin)
    {
    
        $this->connectionHandler = new dbHelper();
        
        $query = 'INSERT INTO users (`user_name`, `user_pass`, `user_admin`) VALUES ("' . $new_user_name . '", "' . $new_user_pass . '", "' . $new_user_admin . '")';
        
        $this->connectionHandler->register($query);
        
    }
}
?>
