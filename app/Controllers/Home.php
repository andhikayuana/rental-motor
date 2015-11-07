<?php
namespace Controllers;
use Resources, Models;

class Home extends Resources\Controller
{
    public function __construct()
    {    
        parent::__construct();
    
        $this->session = new Resources\Session();
        $this->request = new Resources\Request();
        
    }

    public function index()
    {   
        if (empty($this->session->getValue('id_operator'))) {
            $this->redirect('home/login');
        }
        else{
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
    }

    public function login()
    {
        if (!empty($this->session->getValue('id_operator'))) {
            $this->redirect('home');
        }
        if ($this->request->POST('login')==1) {
            
            $username = $this->request->POST('username');
            $password = $this->request->POST('password');

            $modelOperator = new Models\Operator;

            $modelOperator->condition('username','=',$username,'AND');
            $modelOperator->condition('password','=',$password);
            $operator = $modelOperator->get();

            if (!empty($operator)) {
                foreach ($operator as $row) {
                    $this->session->setValue('id_operator',$row->id_operator);
                    $this->session->setValue('username',$row->username);
                    $this->session->setValue('nama',$row->nama);
                }

                $this->redirect('home');
            }

            $this->outputPartial('home/login',['url'=>$this->location('home/login'),'error'=>'Username atau Password Anda salah !']);
        }
        else{

            $this->outputPartial('home/login',['url'=>$this->location('home/login')]);    
        }
    }

    public function logout()
    {
    	$this->session->destroy();
        $this->redirect('home');
    }

}