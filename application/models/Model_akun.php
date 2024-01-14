<?php

class Model_akun extends CI_model{

    public function tambahDataAkun($akun)
    {
        $this->db->insert('akun', $akun);
    }

    public function dataAkun()
    {
        return $this->db->get('akun')->result_array();
    }
}