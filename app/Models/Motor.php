<?php
namespace Models;
use Resources;

class Motor extends Resources\ActiveRecord {
    
    public function __construct(){
        
        call_user_func_array( 'parent::__construct', func_get_args() );
	
		$this->table = 'tb_motor';
		$this->primaryKey = 'id_motor';
        
    }

    public function relations(){
        
        return array(
            'inventaris' => array(self::HAS_MANY, 'Inventaris', 'id_motor')
        );
    }
}