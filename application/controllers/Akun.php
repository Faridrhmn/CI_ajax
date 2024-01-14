<?php
require APPPATH.'/libraries/REST_Controller.php';

class Akun extends REST_Controller {
	public function __construct()
    {
        parent:: __construct();
        $this->load->model('Model_akun');
    }

	public function tambah_akun_post()
	{
        $akun = [
            "Username" => $this->input->post('Username'),
            "Password" => $this->input->post('Password')
        ];
        $result['akun'] = $this->Model_akun->tambahDataAkun($akun);
		$this->response($result, 200);
	}

    public function masuk_akun_get()
	{
		$akun['akun'] = $this->Model_akun->dataAkun();
		$this->response($akun, 200);
	}
}
