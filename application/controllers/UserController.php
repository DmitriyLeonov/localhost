<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class UserController extends Controller{
    
    public function loginAction() {
        if(isset($_SESSION['admin'])){
            $this->view->redirect('');
        }
        if(!empty($_POST)){
            if(!$this->model->loginValidate($_POST)){
                $this->view->message('error', $this->model->error);
            }
            $_SESSION['admin'] = true;
            $this->view->location('/');
        }
        $this->view->render('Вход');
    }
    
    public function logoutAction() {
        unset($_SESSION['admin']);
        $this->view->redirect('');
    }
    
    
    public function addAction() {
        if(!empty($_POST)){
            if(!$this->model->taskValidate($_POST)){
                $this->view->message('error', $this->model->error);
            }
            $this->model->taskAdd($_POST);
            $this->view->message('success', 'Задание добавлено');
        }
        $this->view->render('Добавить');
    }
    
    public function editAction() {
        debug($this->route['id']);
        $this->view->render('edit');
    }
}

