<?php

namespace application\models;

use application\core\Model;

class User extends Model{
    
    public $error;


    public function loginValidate($post) {
        $config = require 'application/config/admin.php';
        if(strlen($post['login']) < 1 or strlen($post['password']) < 1){
            $this->error = 'Заполните все поля';
            return false;
        } elseif($config['login'] != $post['login'] or $config['password'] != $post['password']){
            $this->error = 'Неверный логин или пароль';
            return false;
        }
        return true;
    }
    
    public function taskValidate($post) {
        $nameLen = iconv_strlen($post['name']);
        $email = $post['e-mail'];
        $textLen = iconv_strlen($post['text']);
        if($nameLen < 2 or $nameLen >30){
            $this->error = 'Имя должно содержать от 2 до 30 символов';
            return false;
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $this->error = 'E-mail указан неверно';
            return false;
        }elseif($textLen < 2 or $textLen >1000){
            $this->error = 'Текст должен содержать от 2 до 1000 символов';
            return false;
        }
        return true;
    }
    
    public function taskAdd($post) {
        $params = [
            'Id' => '',
            'UserName' => post['name'],
            'E-mail' => post['e-mail'],
            'Text' => post['text'],
        ];
        $this->db->query("INSERT INTO task (Id, UserName, E-mail, Text) VALUES (:Id, :UserName, :E-mail, :Text)", $params);
    }
}