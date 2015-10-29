<?php
namespace Controllers;
use Resources, Models;

class Motor extends Resources\Controller
{    
    public function __construct()
    {    
        parent::__construct();
    
        $this->session = new Resources\Session();
        $this->model = new Models\Motor;
        $this->request = new Resources\Request;
    }

    public function index()
    {    
        $data['model'] = $this->model->get();
        
        $this->output('motor/index', $data); 
    }

    public function view($id)
    {
        # code...

        $this->output('motor/view');
    }

    public function create()
    {
        # code...

        $this->output('motor/create');
    }

    public function update()
    {
        # code...

        $this->output('motor/update');
    }

    public function delete()
    {
        # code...
    }

}