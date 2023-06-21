<?php

class data_kamera extends CI_Controller
{
    public function index()
    {
        $data['kamera'] = $this->rental_model->get_data('kamera')->result();
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_kamera', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_kamera()
    {
        $data['type'] = $this->rental_model->get_data('type')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_tambah_kamera', $data);
        $this->load->view('templates_admin/footer');
    }

    public function tambah_kamera_aksi()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_kamera();
        } else {
            $kode_type = $this->input->post('kode_type');
            $merk = $this->input->post('merk');
            $warna = $this->input->post('warna');
            $status = $this->input->post('status');
            $harga = $this->input->post('harga');
            $denda = $this->input->post('denda');
            $input = $this->input->post('input');
            $output = $this->input->post('output');

            $gambar = $_FILES['gambar']['name'];
            if ($gambar = '') {
            } else {
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('gambar')) {
                    echo "Gambar Kamera Gagal DiUpload!";
                } else {
                    $gambar = $this->upload->data('file_name');
                }
            }

            $data = array(
                'kode_type' => $kode_type,
                'merk' => $merk,
                'warna' => $warna,
                'status' => $status,
                'harga' => $harga,
                'denda' => $denda,
                'input' => $input,
                'output' => $output,
                'gambar' => $gambar
            );

            $this->rental_model->insert_data($data, 'kamera');
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Kamera Berhasil Ditambahkan!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_kamera');
        }
    }

    public function update_kamera($id)
    {
        $where = array('id_kamera' => $id);
        $data['kamera'] = $this->db->query("SELECT * FROM kamera mb, type tp WHERE mb.kode_type=tp.kode_type AND mb.id_kamera='$id'")->result();
        $data['type'] = $this->rental_model->get_data('type')->result();

        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/form_update_kamera', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update_kamera_aksi()
    {
        $this->_rules();

        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->tambah_kamera();
        } else {
            $id = $this->input->post('id_kamera');
            $kode_type = $this->input->post('kode_type');
            $merk = $this->input->post('merk');
            $warna = $this->input->post('warna');
            $status = $this->input->post('status');
            $harga = $this->input->post('harga');
            $denda = $this->input->post('denda');
            $resolusi = $this->input->post('resolusi');
            $fitur = $this->input->post('fitur');
            $range_aperture = $this->input->post('range_aperture');
            $iso = $this->input->post('iso');
            $tipe_memo = $this->input->post('tipe_memo');
            $input = $this->input->post('input');
            $output = $this->input->post('output');
            $gambar = $_FILES['gambar']['name'];
            if ($gambar) {
                $config['upload_path'] = './assets/upload';
                $config['allowed_types'] = 'jpg|jpeg|png|tiff';

                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $gambar = $this->upload->data('file_name');
                    $this->db->set('gambar', $gambar);
                } else {
                    echo $this->upload->display_errors();
                }
            }

            $data = array(
                'kode_type' => $kode_type,
                'merk' => $merk,
                'warna' => $warna,
                'status' => $status,
                'harga' => $harga,
                'denda' => $denda,
                'resolusi' => $resolusi,
                'fitur' => $fitur,
                'range_aperture' => $range_aperture,
                'iso' => $iso,
                'tipe_memo' => $tipe_memo,
                'input' => $input,
                'output' => $output

            );

            $where = array(
                'id_kamera' => $id
            );
            $this->rental_model->update_data('kamera', $data, $where);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Kamera Berhasil Diupdate!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('admin/data_kamera');
        }
    }
    public function _rules()
    {
        $this->form_validation->set_rules('kode_type', 'Kode Type', 'required');
        $this->form_validation->set_rules('merk', 'Merk', 'required');
        $this->form_validation->set_rules('warna', 'Warna', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('denda', 'Denda', 'required');
        $this->form_validation->set_rules('resolusi', 'Resolusi', 'required');
        $this->form_validation->set_rules('fitur', 'Fitur', 'required');
        $this->form_validation->set_rules('range_aperture', 'Range Aperture', 'required');
        $this->form_validation->set_rules('iso', 'Iso', 'required');
        $this->form_validation->set_rules('tipe_memo', 'Tipe Memo', 'required');
        $this->form_validation->set_rules('input', 'Input', 'required');
        $this->form_validation->set_rules('output', 'Output', 'required');
    }

    public function detail_kamera($id)
    {
        $data['detail'] = $this->rental_model->ambil_id_kamera($id);
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detail_kamera', $data);
        $this->load->view('templates_admin/footer');
    }

    public function delete_kamera($id)
    {
        $where = array('id_kamera' => $id);
        $this->rental_model->delete_data($where, 'kamera');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Kamera Berhasil Dihapus!.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
      </div>');
        redirect('admin/data_kamera');
    }
}
