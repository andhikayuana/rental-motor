<?php
namespace Controllers;
use Resources, Models;

class Operator extends Resources\Controller
{   
    public function __construct()
    {    
        parent::__construct();
    
        $this->session = new Resources\Session();
        $this->model = new Models\Operator;
        $this->request = new Resources\Request;

        if (empty($this->session->getValue('id_operator'))) {
            $this->redirect('home');
        }
    }

    public function index()
    {    
        $data['model'] = $this->model->get();
        
        $this->output('operator/index', $data); 
    }

    public function create()
    {
        if ($this->request->POST('submit')==1) {

            $this->model->nama = $this->request->POST('nama',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->jk = $this->request->POST('jk',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->alamat = $this->request->POST('alamat',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->username = $this->request->POST('username',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->password = $this->request->POST('password',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->save();

            $this->redirect('operator');

        }
        else{
            $this->output('operator/create');
        }
    }

    public function update($id)
    {
        if (!empty($id) && is_numeric($id)) {

            if ($this->request->POST('submit')==1) {
                
                $this->model->nama = $this->request->POST('nama',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->jk = $this->request->POST('jk',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->alamat = $this->request->POST('alamat',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->username = $this->request->POST('username',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->password = $this->request->POST('password',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->update(['id_operator'=>$id]);

                $this->redirect('operator');

            }
            else{

                $data['model'] = $this->model->condition('id_operator','=',$id)->get();

                foreach ($data['model'] as $row) {
                    $data['model'] = $row;
                }

                $this->output('operator/update',$data);
            }

        }
        else{
            $this->redirect('operator');
        }

    }

    public function delete($id)
    {
        if (!empty($id) && is_numeric($id)) {
            
            $this->model->delete(['id_operator'=>$id]);

            $this->redirect('operator');
        }
        else{
            $this->redirect('operator');
        }
    }

}