<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class UserController extends Controller{
    
    public function loginAction() {
        if(!empty($_POST)){
            if(!$this->model->loginValidate($_POST)){
                
            }
            $_SESSION['admin'] = true;
            $this->view->location('/');
        }
        $this->view->render('Вход');
    }
    
    public function logoutAction() {
        
    }
    
    
    public function addAction() {
        $this->view->render('add');
    }
    
    public function editAction() {
        $this->view->render('edit');
    }
}

