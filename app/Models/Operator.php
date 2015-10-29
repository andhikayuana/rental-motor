<?php
namespace Models;
use Resources;

class Operator extends Resources\ActiveRecord {
    
    public function __construct(){
        
        call_user_func_array( 'parent::__construct', func_get_args() );
	
		$this->table = 'tb_operator';
        
    }
}