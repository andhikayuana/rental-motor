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
        $data['title'] = 'Hello world!';
        
        $this->output('pengembalian/index', $data); 
    }

    public function create()
    {
        $data['listPeminjaman'] = $this->modelPeminjaman->get();

        $this->output('pengembalian/create',$data);
    }

    public function update($id)
    {
        # code...

        $this->output('pengembalian/update');
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

            echo json_encode($data);
        }
        else{
            $data['msg'] = 'failed';

            echo json_encode($data);
        }
    }

}