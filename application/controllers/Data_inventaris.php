<?php

class Data_inventaris extends CI_Controller{
    public function __construct(){

        parent ::__construct();
    
        //load model
        $this->load->model('model_inventaris'); 
        
    }
    
    public function index(){
        $data['judul'] = 'daftar inventaris';
        $data['contents']='data_inventaris/index';
        $data['inventaris'] = $this->model_inventaris->getAll();
		$this->load->view('templates/index', $data);
    }
    public function tambah_inventaris(){
    
        $data['judul'] = 'daftar inventaris';
        $data['contents'] = 'data_inventaris/tambah_inventaris';
        $data['inventaris2'] = $this->model_inventaris->get();
        $this->load->view('templates/index', $data);
    }
    public function simpan(){
    $data = array(
        'tanggal' => $this->input->post("tanggal"),
        'kode_inventaris' => $this->input->post("kode_inventaris"),
        'id_ruang' => $this->option->post("id_ruang"),
        'id_sumber' => $this->input->post("id_sumber"),
        'id_tahun' => $this->input->post("id_tahun"),
        'nama_barang' => $this->input->post("nama_barang"),
        'merek' => $this->input->post("merek"),
        'seri' => $this->input->post("seri"),
        'id_jenis' => $this->input->post("id_jenis"),
        'nilai_wajar' => $this->input->post("nilai_wajar"),
        'gambar' => $this->input->post("gambar"),
        'id_kondisi' => $this->input->post("id_kondisi"),
        'id_satuan' => $this->input->post("id_satuan")
    );
    $this->model_inventaris->simpan($data);
       redirect('Data_inventaris/');
    }
}