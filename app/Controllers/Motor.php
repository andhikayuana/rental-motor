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
        $this->upload = new Resources\Upload;
    }

    public function index()
    {    
        $data['model'] = $this->model->get();
        
        $this->output('motor/index', $data); 
    }

    public function create()
    {        
        if ($this->request->POST('submit')==1 && isset($_FILES['gambar'])) {

            $this->model->nama_motor = $this->request->POST('nama',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->th_keluar = $this->request->POST('tahun',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->by_sewa = $this->request->POST('by_sewa',FILTER_SANITIZE_MAGIC_QUOTES);

            $this->upload->setOption([
                'folderLocation'=>'uploads',
                'autoCreateFolder' => true,
                'permittedFileType' => 'gif|png|jpg',
            ]);

            $file = $this->upload->now($_FILES['gambar']);

            if ($file) {
                $file_info = $this->upload->getFileInfo();
                $this->model->gambar = $file_info['name'];
                $this->model->save();
                
            }
            
            $this->redirect('motor');

        }
        else{
            $this->output('motor/create');
        }
    }

    public function update($id)
    {
        if (!empty($id) && is_numeric($id)) {

            if ($this->request->POST('submit')==1) {
                
                $this->model->nama_motor = $this->request->POST('nama',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->th_keluar = $this->request->POST('tahun',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->by_sewa = $this->request->POST('by_sewa',FILTER_SANITIZE_MAGIC_QUOTES);

                $this->upload->setOption([
                    'folderLocation'=>'uploads',
                    'autoCreateFolder' => true,
                    'permittedFileType' => 'gif|png|jpg',
                ]);

                $file = $this->upload->now($_FILES['gambar']);

                if ($file) {
                    $file_info = $this->upload->getFileInfo();
                    $this->model->gambar = $file_info['name'];
                    $this->model->update(['id_motor'=>$id]);
                    
                }
                
                $this->redirect('motor');

            }
            else{

                $data['model'] = $this->model->condition('id_motor','=',$id)->get();

                foreach ($data['model'] as $row) {
                    $data['model'] = $row;
                }

                $this->output('motor/update',$data);    
            }

        }
        else{
            $this->redirect('motor');
        }

    }

    public function delete($id)
    {
        if (!empty($id) && is_numeric($id)) {
            
            $this->model->delete(['id_motor'=>$id]);

            $this->redirect('motor');
        }
        else{
            $this->redirect('motor');
        }
    }

}