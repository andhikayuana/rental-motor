<?php
namespace Controllers;
use Resources, Models;

class Pengembalian extends Resources\Controller
{    
    public function index()
    {    
        $data['title'] = 'Hello world!';
        
        $this->output('pengembalian/index', $data); 
    }

    public function view($id)
    {
        # code...

        $this->output('pengembalian/view');
    }

    public function create()
    {
        # code...

        $this->output('pengembalian/create');
    }

    public function update()
    {
        # code...

        $this->output('pengembalian/update');
    }

    public function delete()
    {
        # code...
    }

}