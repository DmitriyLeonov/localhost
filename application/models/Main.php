<?php

namespace application\models;

use application\core\Model;

class Main extends Model{
    
    public function getList() {
        $result = $this->db->row('SELECT UserName,Text FROM task');
        return $result;
    }
}


