<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_master');
  }

  public function index()
  {
    $data['gol_A'] = $this->m_master->hitungJumlahGolA();
    $data['gol_B'] = $this->m_master->hitungJumlahGolB();
    $data['gol_AB'] = $this->m_master->hitungJumlahGolAB();
    $data['gol_O'] = $this->m_master->hitungJumlahGolO();
    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['user'] = $this->m_master->tampil_data()->result_array();
    $data['title'] = 'Dashboard';
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('master/dashboard', $data);
    $this->load->view('template/footer', $data);
  }


  public function tambah_data_pendonor()
  {
    $data['pendonor'] = $this->m_master->tampil_data()->result_array();
    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['title'] = 'Tambah Data Pendonor';
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('master/tambah_donor', $data);
    $this->load->view('template/footer', $data);
  }

  public function aksi_tambahdata()
  {
    $this->m_master->inputDataPendonor();
    redirect('dashboard/tambah_data_pendonor');
  }

  // function Hapus
  public function hapus($id)
  {
    $id_hapus = [
      'id' => $id
    ];
    $this->m_master->hapus($id_hapus);
    redirect('dashboard/tambah_data_pendonor');
  }


  public function cariData()
  {

    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['user'] = $this->m_master->tampil_data()->result_array();
    $data['title'] = 'Dashboard';
    if ($this->input->post('kyword')) {
      $data['user'] = $this->m_master->cariData();
    }
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('master/dashboard', $data);
    $this->load->view('template/footer', $data);
  }
}
