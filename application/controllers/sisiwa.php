<?php
class Siswa extends CI_Controller
{
    public function index(){
        $this->load->view('v_sisiwa');
    }
    public function cetak(){
        $data = [
            'kode' => $this->input->post('kode'),
            'nama' => $this->input->post('nama'),
            'sks' => $this->input->post('sks')
        ];
    }
}
?>