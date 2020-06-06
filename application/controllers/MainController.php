<?php

namespace application\controllers;

use application\core\Controller;



class MainController extends Controller{
    
    public function IndexAction() {
        $vars = [
            'name' => 'Dima',
            'age' => 88,
        ];
        $this->view->render('Main page', $vars);
    }
}

