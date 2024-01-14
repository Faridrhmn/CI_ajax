<?php
require APPPATH.'/libraries/REST_Controller.php';

class Awal extends REST_Controller {
	public function __construct()
    {
        parent:: __construct();
        $this->load->model('Model_awal');
    }

	public function index_get()
	{
		$buku['buku'] = $this->Model_awal->semuaBuku();
		$penerbit['penerbit'] = $this->Model_awal->semuaPenerbit();
		$lengkap['semua'] = $buku+$penerbit;
		$this->response($lengkap, 200);
	}

	public function tambah_buku_post()
	{
        $buku = [
            "IDBuku" => $this->input->post('IDBuku'),
            "Kategori" => $this->input->post('Kategori'),
            "NamaBuku" => $this->input->post('NamaBuku'),
            "Harga" => $this->input->post('Harga'),
			"Stok" => $this->input->post('Stok'),
			"Penerbit" => $this->input->post('Penerbit')
        ];
        $result['buku'] = $this->Model_awal->tambahDataBuku($buku);
		$this->response($result, 200);
	}

	public function hapus_buku_delete($id)
	{
		$result['buku'] = $this->Model_awal->hapusBuku($id);
		$this->response($result, 200);
	}

    public function buku_spesifik_get($id){
        $result['buku'] = $this->Model_awal->bukuSpesifik($id);
        $this->response($result, 200);
    }

    public function update_buku_post($id){
        $buku = [
            "IDBuku" => $this->input->post('IDBuku'),
            "Kategori" => $this->input->post('Kategori'),
            "NamaBuku" => $this->input->post('NamaBuku'),
            "Harga" => $this->input->post('Harga'),
			"Stok" => $this->input->post('Stok'),
			"Penerbit" => $this->input->post('Penerbit')
        ];
        
        $result['buku'] = $this->Model_awal->updateBuku($id, $buku);
        $this->response($result, 200);
    }

    public function tambah_penerbit_post()
	{
        $penerbit = [
            "IDPenerbit" => $this->input->post('IDPenerbit'),
            "NamaPenerbit" => $this->input->post('NamaPenerbit'),
            "Alamat" => $this->input->post('Alamat'),
            "Kota" => $this->input->post('Kota'),
			"Telepon" => $this->input->post('Telepon')
        ];
        $result['penerbit'] = $this->Model_awal->tambahDataPenerbit($penerbit);
		$this->response($result, 200);
	}

    public function hapus_penerbit_delete($id)
	{
		$result['penerbit'] = $this->Model_awal->hapusPenerbit($id);
		$this->response($result, 200);
	}

    public function penerbit_spesifik_get($id){
        $result['penerbit'] = $this->Model_awal->penerbitSpesifik($id);
        $this->response($result, 200);
    }

    public function update_penerbit_post($id){
        $penerbit = [
            "IDPenerbit" => $this->input->post('IDPenerbit'),
            "NamaPenerbit" => $this->input->post('NamaPenerbit'),
            "Alamat" => $this->input->post('Alamat'),
            "Kota" => $this->input->post('Kota'),
			"Telepon" => $this->input->post('Telepon')
        ];
        
        $result['penerbit'] = $this->Model_awal->updatePenerbit($id, $penerbit);
        $this->response($result, 200);
    }
}
