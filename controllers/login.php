<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        echo Hash::create('md5', 'Joe', HASH_PASSWORD_KEY);
        $this->view->render('login/index');
    }

    function run() {

        $this->model->run();
    }

}
