<?php
class Gudang_model extends CI_Model
{
    public function getAllGudang()
    {
        return $this->db->get('gudang')->result_array();
    }
    public function tambahDataGudang()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "kode" => $this->input->post('kode', true),
            "alamat" => $this->input->post('alamat', true),
            "jenis" => $this->input->post('jenis', true),
            "stock" => $this->input->post('stock', true),
            "merek" => $this->input->post('merek', true),
            "lokasi" => $this->input->post('lokasi')

        ];

        $this->db->insert('gudang', $data);
    }
    public function hapusDataGudang($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('gudang');
    }
    public function getGudangById($id)
    {
        return $this->db->get_where('gudang', ['id' => $id])->row_array();
    }
    public function ubahDataGudang()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "kode" => $this->input->post('kode', true),
            "alamat" => $this->input->post('alamat', true),
            "jenis" => $this->input->post('jenis', true),
            "stock" => $this->input->post('stock', true),
            "merek" => $this->input->post('merek', true),
            "lokasi" => $this->input->post('lokasi')

        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('gudang', $data);
    }
    public function cariDataGudang()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('kode', $keyword);
        return $this->db->get('gudang')->result_array();
    }
}
