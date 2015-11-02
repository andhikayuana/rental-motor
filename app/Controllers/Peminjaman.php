<?php
namespace Controllers;
use Resources, Models;

class Peminjaman extends Resources\Controller
{   
    public function __construct()
    {    
        parent::__construct();
    
        $this->session = new Resources\Session();
        $this->model = new Models\Sewa;
        $this->modelPelanggan = new Models\Pelanggan;
        $this->modelInventaris = new Models\Inventaris;
        $this->request = new Resources\Request;
    }

    public function index()
    {    
        $data['model'] = $this->model->get();
        
        $this->output('peminjaman/index', $data); 
    }

    public function create()
    {
        if ($this->request->POST('submit')==1) {

            $this->model->tgl_sewa = $this->request->POST('tgl_sewa',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->id_pelanggan = $this->request->POST('pelanggan',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->jaminan = $this->request->POST('jaminan',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->tgl_mulai = $this->request->POST('tgl_mulai',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->tgl_akhir = $this->request->POST('tgl_akhir',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->id_inventaris = $this->request->POST('inventaris',FILTER_SANITIZE_MAGIC_QUOTES);

            $this->model->save();

            $this->redirect('peminjaman');

        }
        else{

            $data['listPelanggan'] = $this->modelPelanggan->get();
            $data['listInventaris'] = $this->modelInventaris->get();

            $this->output('peminjaman/create',$data);
        }
    }

    public function update($id)
    {
        if (!empty($id) && is_numeric($id)) {
            
            if ($this->request->POST('submit')==1) {
                
                $this->model->tgl_sewa = $this->request->POST('tgl_sewa',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->id_pelanggan = $this->request->POST('pelanggan',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->jaminan = $this->request->POST('jaminan',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->tgl_mulai = $this->request->POST('tgl_mulai',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->tgl_akhir = $this->request->POST('tgl_akhir',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->id_inventaris = $this->request->POST('inventaris',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->update(['id_sewa'=>$id]);

                $this->redirect('peminjaman');

            }
            else{

                $data['listPelanggan'] = $this->modelPelanggan->get();
                $data['listInventaris'] = $this->modelInventaris->get();

                $data['model'] = $this->model->condition('id_sewa','=',$id)->get();

                foreach ($data['model'] as $row) {
                    $data['model'] = $row;
                }

                $this->output('peminjaman/update',$data);
            }
        }
        else{
            $this->redirect('peminjaman');
        }
    }

    public function delete($id)
    {
        if (!empty($id) && is_numeric($id)) {
            
            $this->model->delete(['id_sewa'=>$id]);

            $this->redirect('peminjaman');
        }
        else{
            $this->redirect('peminjaman');
        }
    }

    public function getPelanggan($id)
    {
        if (!empty($id) && is_numeric($id)) {

            $data['msg'] = 'success';
            $data['pelanggan'] = $this->modelPelanggan->condition('id_pelanggan','=',$id)->get();

            echo json_encode($data);
        }
        else{
            $data['msg'] = 'failed';

            echo json_encode($data);
        }
    }

    public function getInventaris($id)
    {
        if (!empty($id) && is_numeric($id)) {

            $modelPelanggan = new Models\Inventaris;
            $data['msg'] = 'success';

            $inventaris = $this->modelInventaris->get($id);


            $data['inventaris'] = [
                'hrg_sewa' => $inventaris->motor->by_sewa,
                'no_polisi' => $inventaris->no_polisi,
                'no_mesin' => $inventaris->no_mesin,
            ];

            echo json_encode($data);
        }
        else{
            $data['msg'] = 'failed';

            echo json_encode($data);
        }
    }

}