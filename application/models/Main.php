<?php

namespace application\models;

use application\core\Model;

class Main extends Model{
    
    public function getList() {
        $result = $this->db->row('SELECT * FROM task ORDER BY time DESC');
        return $result;
    }
    
    public function taskCount(){
        return $this->db->column('SELECT COUNT(id) FROM task');
    }
    
    public function taskList($route) {
        $params = [
            'max' => 3,
            'start' => (($route['page'] ? 1) - 1)*3,
        ];
        return $this->db->row('SELECT * FROM task ORDER BY time DESC LIMIT :start, :max',$params);
    }
}


