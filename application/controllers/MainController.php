<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;
use application\lib\Pagination;


  
class MainController extends Controller{
    
    public function IndexAction() {
        $pagination = new Pagination($this->route, $this->model->taskCount(), 3);
        $result = $this->model->getList();
        $vars = [
            'task' => $result,
            'pagination' => $pagination->get(),
            'list' => $this->model->taskList($this->route),
        ];
        $this->view->render('Main page', $vars);
    }
    
}

