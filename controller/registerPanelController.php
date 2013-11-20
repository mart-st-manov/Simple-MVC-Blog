<?php
    class RegisterPanelController {
        public function __construct() {
            $this->model = new RegisterPanelModel();
            include 'view/register.php';
        }
    }
?>
