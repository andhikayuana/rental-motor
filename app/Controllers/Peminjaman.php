<?php
namespace Controllers;
use Resources, Models;

class Peminjaman extends Resources\Controller
{    
    public function index()
    {    
        $data['title'] = 'Hello world!';
        
        $this->output('peminjaman/index', $data); 
    }

    public function view($id)
    {
        # code...

        $this->output('peminjaman/view');
    }

    public function create()
    {
        # code...

        $this->output('peminjaman/create');
    }

    public function update()
    {
        # code...

        $this->output('peminjaman/update');
    }

    public function delete()
    {
        # code...
    }

}