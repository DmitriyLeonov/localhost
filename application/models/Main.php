<?php

namespace application\models;

use application\core\Model;

class Main extends Model{
    
    public function getList() {
        $result = $this->db->row('SELECT * FROM task ORDER BY time DESC');
        return $result;
    }
}


