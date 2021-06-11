<?php
class Gudang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Gudang_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['gudang'] = $this->Gudang_model->getAllGudang();
        if ($this->input->post('keyword')) {
            $data['gudang'] = $this->Gudang_model->cariDataGudang();
        }
        $this->load->database();
        $this->load->view('templates/header');
        $this->load->view('gudang/index', $data);
        $this->load->view('templates/footer');
    }
    public function tambah()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required');
        $this->form_validation->set_rules('merek', 'Merek', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');
        $data['judul'] = 'Form tambah data';
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('gudang/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Gudang_model->tambahDataGudang();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('gudang');
        }
    }
    public function hapus($id)
    {
        $this->Gudang_model->hapusDataGudang($id);
        $this->session->set_flashdata('flash', ' DiHapus');
        redirect('gudang');
    }
    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data';
        $data['gudang'] = $this->Gudang_model->getGudangById($id);
        $data['lokasi'] = ['Gudang A', 'Gudang B', 'Gudang C'];

        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kode', 'Kode', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('stock', 'Stock', 'required');
        $this->form_validation->set_rules('merek', 'Merek', 'required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('gudang/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Gudang_model->ubahDataGudang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('gudang');
        }
    }
}
