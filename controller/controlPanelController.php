<?php
    class ControlPanelController {
        public function __construct() {
            $this->model = new ControlPanelModel();
            include 'view/controlPanel.php';
        }
    }
?>
