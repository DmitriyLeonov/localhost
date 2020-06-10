<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;



class MainController extends Controller{
    
    public function IndexAction() {
        $result = $this->model->getList();
        $vars = [
            'task' => $result,
        ];
        $this->view->render('Main page', $vars);
    }
}

