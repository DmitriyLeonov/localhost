<?php

return [
    //MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],
	'main/index/{page:\d+}' => [
		'controller' => 'main',
		'action' => 'index',
	],
    //UserController
        'user/login' => [
		'controller' => 'user',
		'action' => 'login',
	],
    
        'user/register' => [
		'controller' => 'user',
		'action' => 'register',
	],
    
        'user/logout' => [
		'controller' => 'user',
		'action' => 'logout',
	],
    
        'user/add' => [
		'controller' => 'user',
		'action' => 'add',
	],
    
        'user/edit/{id:\d+}' => [
		'controller' => 'user',
		'action' => 'edit',
	],
];