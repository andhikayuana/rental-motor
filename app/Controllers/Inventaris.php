<?php
namespace Controllers;
use Resources, Models;

class Inventaris extends Resources\Controller
{    
    public function index()
    {    
        $data['title'] = 'Hello world!';
        
        $this->output('inventaris/index', $data); 
    }

    public function view($id)
    {
        # code...

        $this->output('inventaris/view');
    }

    public function create()
    {
        # code...

        $this->output('inventaris/create');
    }

    public function update()
    {
        # code...

        $this->output('inventaris/update');
    }

    public function delete()
    {
        # code...
    }

}