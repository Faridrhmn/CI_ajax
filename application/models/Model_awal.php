<?php

class Model_awal extends CI_model{

    public function semuaBuku()
    {
        return $this->db->get('buku')->result_array();
    }

    public function semuaPenerbit()
    {
        return $this->db->get('penerbit')->result_array();
    }

    public function tambahDataBuku($buku)
    {
        $this->db->insert('buku', $buku);
    }

    public function hapusBuku($id)
    {
        $this->db->where('IDBuku', $id);
        $this->db->delete('buku');
    }

    public function bukuSpesifik($id){
        return $this->db->get_where('buku', ['IDBuku' => $id])->result_array();
    }

    public function updateBuku($id, $buku){
        $this->db->where('IDBuku', $id);
        $this->db->update('buku', $buku);
    }

    public function tambahDataPenerbit($penerbit)
    {
        $this->db->insert('penerbit', $penerbit);
    }

    public function hapusPenerbit($id)
    {
        $this->db->where('IDPenerbit', $id);
        $this->db->delete('penerbit');
    }

    public function penerbitSpesifik($id){
        return $this->db->get_where('penerbit', ['IDPenerbit' => $id])->result_array();
    }

    public function updatePenerbit($id, $penerbit){
        $this->db->where('IDPenerbit', $id);
        $this->db->update('penerbit', $penerbit);
    }
}