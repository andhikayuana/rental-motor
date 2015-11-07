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

        if (empty($this->session->getValue('id_operator'))) {
            $this->redirect('home');
        }
    }

    public function index()
    {    
        $data['model'] = $this->model->get();
        
        $this->output('pelanggan/index', $data); 
    }

    public function create()
    {
        if ($this->request->POST('submit')==1) {

            $this->model->nama = $this->request->POST('nama',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->alamat = $this->request->POST('alamat',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->telp = $this->request->POST('telp',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->identitas = $this->request->POST('identitas',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->save();

            $this->redirect('pelanggan');

        }
        else{
            $this->output('pelanggan/create');
        }
    }

    public function update($id)
    {
        if (!empty($id) && is_numeric($id)) {

            if ($this->request->POST('submit')==1) {
                
                $this->model->nama = $this->request->POST('nama',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->alamat = $this->request->POST('alamat',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->telp = $this->request->POST('telp',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->identitas = $this->request->POST('identitas',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->update(['id_pelanggan'=>$id]);

                $this->redirect('pelanggan');

            }
            else{

                $data['model'] = $this->model->condition('id_pelanggan','=',$id)->get();

                foreach ($data['model'] as $row) {
                    $data['model'] = $row;
                }

                $this->output('pelanggan/update',$data);    
            }

        }
        else{
            $this->redirect('pelanggan');
        }
        
    }

    public function delete($id)
    {
        if (!empty($id) && is_numeric($id)) {
            
            $this->model->delete(['id_pelanggan'=>$id]);

            $this->redirect('pelanggan');
        }
        else{
            $this->redirect('pelanggan');
        }
    }

}