<?php
namespace Controllers;
use Resources, Models;

class Pelanggan extends Resources\Controller
{    
    public function __construct()
    {    
        parent::__construct();
    
        $this->session = new Resources\Session();
        $this->model = new Models\Pelanggan;
        $this->request = new Resources\Request;
    }

    public function index()
    {    
        $data['model'] = $this->model->get();
        
        $this->output('pelanggan/index', $data); 
    }

    public function view($id)
    {
        # code...

        $this->output('pelanggan/view');
    }

    public function create()
    {
        if ($this->request->POST('submit')==1) {

            $this->model->nama = $this->request->POST('nama',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->alamat = $this->request->POST('alamat',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->telp = $this->request->POST('telp',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->identitas = $this->request->POST('identitas',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->save();

            $this->redirect('pelanggan/index');

        }
        else{
            $this->output('pelanggan/create');
        }
    }

    public function update($id)
    {
        $data['model'] = $this->model->get($id);

        $this->output('pelanggan/update',$data);
    }

    public function delete()
    {
        # code...
    }

}