<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pakModel extends CI_Model {
    // Fungsi untuk menampilkan semua data
    public function view(){
        return $this->db->get('paket_pos')->result();
    }

    // Fungsi untuk menampilkan data berdasarkan ID
    public function view_by($id){
        $this->db->where('id', $id);
        return $this->db->get('paket_pos')->row();
    }

    // Fungsi untuk validasi form tambah dan ubah
    public function validation($mode){
        $this->load->library('form_validation'); // Load library form_validation untuk proses validasinya


        if($mode == "save")
            $this->form_validation->set_rules('input_id', 'id', 'required|numeric|max_length[11]');

        $this->form_validation->set_rules('input_tanggal_datang', 'Tanggal Datang', 'required|max_length[50]');
        $this->form_validation->set_rules('input_sasaran', 'Sasaran', 'required');
        $this->form_validation->set_rules('input_penerima', 'Penerima', 'required|max_length[50]');
        $this->form_validation->set_rules('input_isi_paket', 'Isi Paket', 'required');
        $this->form_validation->set_rules('input_tanggal_ambil', 'Tanggal Ambil', 'required');

        if($this->form_validation->run()) // Jika validasi benar
            return TRUE; // Maka kembalikan hasilnya dengan TRUE
        else // Jika ada data yang tidak sesuai validasi
            return FALSE; // Maka kembalikan hasilnya dengan FALSE
    }


    public function save(){
        $data = array(
            "id" => $this->input->post('input_id'),
            "tanggal_datang" => $this->input->post('input_tanggal_datang'),
            "sasaran" => $this->input->post('input_sasaran'),
            "penerima" => $this->input->post('input_penerima'),
            "isi_paket" => $this->input->post('input_isi_paket'),
            "tanggal_ambil" => $this->input->post('input_tanggal_ambil')
        );

        $this->db->insert('paket_pos', $data); // Untuk mengeksekusi perintah insert data
    }

    // Fungsi untuk melakukan ubah data berdasarkan id
    public function edit($id){
        $data = array(
            "tanggal_datang" => $this->input->post('input_tanggal_datang'),
            "sasaran" => $this->input->post('input_sasaran'),
            "penerima" => $this->input->post('input_penerima'),
            "isi_paket" => $this->input->post('input_isi_paket'),
            "tanggal_ambil" => $this->input->post('input_tanggal_ambil')
        );

        $this->db->where('id', $id);
        $this->db->update('paket_pos', $data); // Untuk mengeksekusi perintah update data
    }

    // Fungsi untuk melakukan menghapus data
    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('paket_pos'); // Untuk mengeksekusi perintah delete data
    }
}
