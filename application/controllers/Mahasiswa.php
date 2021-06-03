<?php

class Mahasiswa extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Mahasiswa';
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index');
        $this->load->view('templates/footer');
    }
}
