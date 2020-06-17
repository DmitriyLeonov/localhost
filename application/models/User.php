<?php

namespace application\models;

use application\core\Model;

class User extends Model{
    
    public function loginValidate($post) {
        $config = require 'application/config/admin.php';
        if($config['login'] != $post['login'] or $config['password'] != $post['password']){
            return false;
        }
        return true;
    }
}