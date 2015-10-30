<?php
namespace Controllers;
use Resources, Models;

class Operator extends Resources\Controller
{    
    public function index()
    {    
        $data['title'] = 'Hello world!';
        
        $this->output('operator/index', $data); 
    }

    public function view($id)
    {
        # code...

        $this->output('operator/view');
    }

    public function create()
    {
        # code...

        $this->output('operator/create');
    }

    public function update()
    {
        # code...

        $this->output('operator/update');
    }

    public function delete()
    {
        # code...
    }

}