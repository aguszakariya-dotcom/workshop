<?php 

class Karyawan extends Controller {
    public function index() {
        $data['title'] = 'Daftar Karyawan';
        $data['nama'] = ' Nama Kamu';
        $data['kry'] = $this->model('Karyawan_model')->getAllKaryawan();
        $data['produksi'] = $this->model('Karyawan_model')->getAllProduksi();
        $data['gajian'] = $this->model('Karyawan_model')->getAllGajian();
        $this->view('templates/header',$data);
        $this->view('karyawan/index', $data);
        $this->view('templates/footer');
    }

    public function detail($id) {
        $data['title'] = 'Detail Karyawan';
        // $data['nama'] = ' Nama Kamu';
        $data['kry'] = $this->model('Karyawan_model')->getKaryawanById($id);
        // $data['produksi'] = $this->model('Karyawan_model')->getAllProduksi();
        // $data['gajian'] = $this->model('Karyawan_model')->getAllGajian();
        $this->view('templates/header',$data);
        $this->view('karyawan/detail', $data);
        $this->view('templates/footer');
    }

    public function tambah() {
        if( $this->model('Karyawan_model')->tambahDataKaryawan($_POST) > 0 ) {
            header('location:' . BASEURL . '/karyawan');
            exit;
        }

    }
}