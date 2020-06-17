<?php

return [
    //MainController
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],

	'task' => [
		'controller' => 'main',
		'action' => 'task',
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