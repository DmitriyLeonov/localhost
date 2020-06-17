<?php

namespace application\core;

class View {

    public $path;
    public $route;
    public $layout = 'default';


    public function __construct($route){
        $this->route = $route;
        $this->path = $route['controller'].'/'.$route['action'];
    }
    
    public function redirect($url) {
		header('location: /'.$url);
		exit;
	}
    
    public function render($title, $vars = []) {
        extract($vars);
        ob_start();
        require 'application/views/'.$this->path.'.php';
        $content = ob_get_clean();
        require_once 'application/views/layouts/'.$this->layout.'.php';
    }
    
    public function location($url) {
		exit(json_encode(['url' => $url]));
	}
}