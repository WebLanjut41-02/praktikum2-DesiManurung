<?php 

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Paketbarang extends CI_Controller {
	
			public function __construct(){
				parent::__construct();
				
				$this->load->model('pakModel');
			}
			
			public function index(){
				$data['paket_pos'] = $this->pakModel->view();
				$this->load->view('paketya/index', $data);
			}
			
			public function tambah(){
				if($this->input->post('submit')){
					if($this->pakModel->validation("save")){
						$this->pakModel->save();
						redirect('paket_pos');
					}
				}
				
				$this->load->view('paketya/form_tambah');
			}
			
			public function ubah($id){
				if($this->input->post('submit')){ 
					if($this->pakModel->validation("update")){
						$this->pakModel->edit($id);
						redirect('paket_pos');
					}
				}
				
				$data['paket_pos'] = $this->pakModel->view_by($id);
				$this->load->view('paketya/form_ubah', $data);
			}
			
			public function hapus($id){
				$this->pakModel->delete($id);
				redirect('paket_pos');
			}
		}
?>