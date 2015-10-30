<?php
namespace Models;
use Resources;

class Inventaris extends Resources\ActiveRecord {
    
    public function __construct(){
        
        call_user_func_array( 'parent::__construct', func_get_args() );
	
		$this->table = 'tb_inventaris';
		$this->primaryKey = 'id_inventaris';
        
    }

    public function relations(){
        
        return array(
            'motor' => array(self::BELONGS_TO, 'Motor', 'id_motor')
        );
    }
}