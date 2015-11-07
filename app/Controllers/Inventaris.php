<?php
namespace Controllers;
use Resources, Models;

class Inventaris extends Resources\Controller
{    
    public function __construct()
    {    
        parent::__construct();
    
        $this->session = new Resources\Session();
        $this->model = new Models\Inventaris;
        $this->request = new Resources\Request;

        if (empty($this->session->getValue('id_operator'))) {
            $this->redirect('home');
        }
    }

    public function index()
    {    

        $data['model'] = $this->model->get();
        
        $this->output('inventaris/index', $data); 
    }

    public function create()
    {
        if ($this->request->POST('submit')==1) {

            $this->model->id_motor = $this->request->POST('id_motor',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->no_polisi = $this->request->POST('no_pol',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->no_mesin = $this->request->POST('no_mesin',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->save();

            $this->redirect('inventaris');

        }
        else{

            $modelMotor = new Models\Motor;

            $data['listMotor'] = $modelMotor->get();

            $this->output('inventaris/create',$data);
        }
    }

    public function update($id)
    {

        if (!empty($id) && is_numeric($id)) {

            if ($this->request->POST('submit')==1) {
                
                $this->model->id_motor = $this->request->POST('id_motor',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->no_polisi = $this->request->POST('no_pol',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->no_mesin = $this->request->POST('no_mesin',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->update(['id_inventaris'=>$id]);

                $this->redirect('inventaris');

            }
            else{

                $modelMotor = new Models\Motor;

                $data['listMotor'] = $modelMotor->get();

                $data['model'] = $this->model->condition('id_inventaris','=',$id)->get();

                foreach ($data['model'] as $row) {
                    $data['model'] = $row;
                }

                $this->output('inventaris/update',$data);
            }

        }
        else{
            $this->redirect('inventaris');
        }
    }

    public function delete($id)
    {
        if (!empty($id) && is_numeric($id)) {
            
            $this->model->delete(['id_inventaris'=>$id]);

            $this->redirect('inventaris');
        }
        else{
            $this->redirect('inventaris');
        }
        
    }

}