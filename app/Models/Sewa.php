<?php
namespace Models;
use Resources;

class Sewa extends Resources\ActiveRecord {
    
    public function __construct(){
        
        call_user_func_array( 'parent::__construct', func_get_args() );
	
		$this->table = 'tb_sewa';
		$this->primaryKey = 'id_sewa';
        
    }

    public function relations(){
        
        return array(
            'pelanggan' => array(self::BELONGS_TO, 'Pelanggan', 'id_pelanggan'),
            'inventaris' => array(self::BELONGS_TO, 'Inventaris', 'id_inventaris'),
            'kembali'=>array(self::BELONGS_TO,'kembali','id_sewa'),
        );
    }

}