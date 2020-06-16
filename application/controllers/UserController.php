<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class UserController extends Controller{
    
    public function loginAction() {
        $this->view->render('login');
    }
    
    public function logoutAction() {
        
    }
    
    public function registerAction() {
        $this->view->render('register');
    }
    
    public function addAction() {
        $this->view->render('add');
    }
    
    public function editAction() {
        $this->view->render('edit');
    }
}

