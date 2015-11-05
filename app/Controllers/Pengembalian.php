<?php
namespace Controllers;
use Resources, Models;

class Pengembalian extends Resources\Controller
{    
    public function __construct()
    {    
        parent::__construct();
    
        $this->session = new Resources\Session();
        $this->model = new Models\Kembali;
        $this->modelPeminjaman = new Models\Sewa;
        $this->request = new Resources\Request;
    }

    public function index()
    {    
        $data['model'] = $this->model->get();
        
        $this->output('pengembalian/index', $data); 
    }

    public function create()
    {
        if ($this->request->POST('submit')==1) {
            
            $this->model->id_sewa = $this->request->POST('peminjaman',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->tgl_kembali = $this->request->POST('tgl_kembali',FILTER_SANITIZE_MAGIC_QUOTES);
            $this->model->denda = $this->request->POST('denda',FILTER_SANITIZE_MAGIC_QUOTES);

            $this->model->save();

            $this->redirect('pengembalian');
        }
        else{

            $data['listPeminjaman'] = $this->modelPeminjaman->get();
            
            $this->output('pengembalian/create',$data);
        }
    }

    public function update($id)
    {
        if (!empty($id) && is_numeric($id)) {

            if ($this->request->POST('submit')==1) {
                
                $this->model->id_sewa = $this->request->POST('peminjaman',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->tgl_kembali = $this->request->POST('tgl_kembali',FILTER_SANITIZE_MAGIC_QUOTES);
                $this->model->denda = $this->request->POST('denda',FILTER_SANITIZE_MAGIC_QUOTES);

                $this->model->update(['id_kembali'=>$id]);

                $this->redirect('pengembalian');
            }
            else{

                $data['listPeminjaman'] = $this->modelPeminjaman->get();

                $data['model'] = $this->model->get($id);

                $this->output('pengembalian/update',$data);
            }
        }
        else{
            $this->redirect('pengembalian');
        }
    }

    public function delete($id)
    {
        # code...
    }

    public function getPeminjaman($id)
    {
        if (!empty($id) && is_numeric($id)) {

            $data['msg'] = 'success';

            $peminjaman = $this->modelPeminjaman->get($id);

            $data['peminjaman'] = [
                'pelanggan' => $peminjaman->pelanggan->nama,
                'alamat' => $peminjaman->pelanggan->alamat,
                'jaminan' => $peminjaman->jaminan,
                'tgl_mulai' => date('Y-m-d',strtotime($peminjaman->tgl_mulai)),
                'tgl_akhir' => date('Y-m-d',strtotime($peminjaman->tgl_akhir)),
                'inventaris'=> $peminjaman->inventaris->motor->nama_motor,
                'hrg_sewa' => $peminjaman->inventaris->motor->by_sewa,
                'no_polisi' => $peminjaman->inventaris->no_polisi,
                'no_mesin' => $peminjaman->inventaris->no_mesin,
            ];

        }
        else{
            $data['msg'] = 'failed';

        }

        echo json_encode($data);
    }

}