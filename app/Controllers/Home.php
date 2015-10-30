<?php
namespace Controllers;
use Resources, Models;

class Home extends Resources\Controller
{
    public function __construct()
    {    
        parent::__construct();
    
        $this->session = new Resources\Session();
    }

    public function index()
    {    
        $modelPelanggan = new Models\Pelanggan;
        $modelInventaris = new Models\Inventaris;
        $modelSewa =  new Models\Sewa;
        $modelKembali = new Models\Kembali;

        $pelanggan = $modelPelanggan->get();
        $inventaris = $modelInventaris->get();
        $peminjaman = $modelSewa->get();
        $pengembalian = $modelKembali->get();

        $jmlPelanggan = ($pelanggan!='')?count($pelanggan):0;
        $jmlInventaris = ($inventaris!='')?count($inventaris):0;
        $jmlPeminjaman = ($peminjaman!='')?count($peminjaman):0;
        $jmlPengembalian = ($pengembalian!='')?count($pengembalian):0;

        $data = [
            'jmlPelanggan' => $jmlPelanggan,
            'jmlInventaris' => $jmlInventaris,
            'jmlPeminjaman' => $jmlPeminjaman,
            'jmlPengembalian' => $jmlPengembalian,
        ];

        $this->output('home/index', $data); 
    }

    public function login()
    {
    	$this->outputPartial('home/login');
    }

    public function logout()
    {
    	$this->session->destroy();
    }

}