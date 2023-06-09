<?php 


class Karyawan_model {
    private $dtKaryawan = 'karyawan';
    private $tbProduksi = 'produksi';
    private $tbGajian = 'gajian';
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllKaryawan() {
        $this->db->query('SELECT * FROM ' . $this->dtKaryawan);
        return $this->db->resultSet();
    }

    public function getKaryawanById($id) {
        $this->db->query('SELECT * FROM ' . $this->dtKaryawan . ' WHERE id=:id');
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function tambahDataKaryawan($data) {
        $query = "INSERT INTO karyawan VALUES
                    ('',  :nama, :jabatan, :alamat, :email, :telepon, :gambar)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('telepon', $data['telepon']);
    
        $nama_file = $_FILES['gambar']['name'];
        $nama_tmp = $_FILES['gambar']['tmp_name'];
        $lokasi_gambar = '../public/images/' . $nama_file;
    
        // Pindahkan file gambar ke lokasi yang ditentukan
        move_uploaded_file($nama_tmp, $lokasi_gambar);
    
        $this->db->bind('gambar', $nama_file);
    
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    public function getAllProduksi() {
        $this->db->query("SELECT * FROM $this->tbProduksi ORDER BY ID DESC LIMIT 20");
        return $this->db->resultSet();
    }

    public function getAllGajian() {
        $this->db->query("SELECT * FROM $this->tbGajian");
        return $this->db->resultSet();
    }
}
