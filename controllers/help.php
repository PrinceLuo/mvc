<?php

class Help extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->render('help/index');
    }

    public function other($arg = false) {

        require_once 'models/help_model.php';
        
        echo $this->model->blah();
    }

}
