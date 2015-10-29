<?php
namespace Controllers;
use Resources, Models;

class Home extends Resources\Controller
{
    public function __construct()
    {    
        parent::__construct();
    
        $this->session = new Resources\Session();
    }

    public function index()
    {    
        $data['title'] = 'Hello world!';
        
        $this->output('home/index', $data); 
    }

    public function login()
    {
    	$this->outputPartial('home/login');
    }

    public function logout()
    {
    	$this->session->destroy();
    }

}