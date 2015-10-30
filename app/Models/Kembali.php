<?php
namespace Models;
use Resources;

class Kembali extends Resources\ActiveRecord {
    
    public function __construct(){
        
        call_user_func_array( 'parent::__construct', func_get_args() );
	
		$this->table = 'tb_kembali';
        
    }
}