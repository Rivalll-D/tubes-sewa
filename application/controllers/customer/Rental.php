<?php

class Rental extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        if (empty($this->session->userdata('username'))) {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Anda belum login!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth/login');
        } elseif ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Anda tidak punya akses ke halaman ini!</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/dashboard');
        }
    }



    public function tambah_rental($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_kamera($id);
        $this->load->view('templates_customer/header');
        $this->load->view('customer/tambah_rental', $data);
        $this->load->view('templates_customer/footer');
    }

    public function tambah_rental_aksi()
    {
        $id_customer = $this->session->userdata('id_customer');
        $id_kamera = $this->input->post('id_kamera');
        $tanggal_rental = $this->input->post('tanggal_rental');
        $tanggal_kembali = $this->input->post('tanggal_kembali');
        $denda = $this->input->post('denda');
        $harga = $this->input->post('harga');

        $data = array(
            'id_customer' => $id_customer,
            'id_kamera' => $id_kamera,
            'tanggal_rental' => $tanggal_rental,
            'tanggal_kembali' => $tanggal_kembali,
            'denda' => $denda,
            'harga' => $harga,
            'tanggal_pengembalian' => '-',
            'status_rental' => 'Belum Selesai',
            'status_pengembalian' => 'Belum Kembali',
            'total_denda' => '0'
        );

        $this->rental_model->insert_data($data, 'transaksi');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
        Barang Telah Ditambahkan, Silahkan Checkout!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('customer/data_kamera');
    }
}
