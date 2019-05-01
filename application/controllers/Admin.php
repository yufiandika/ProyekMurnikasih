<?php
defined('BASEPATH') or exit ('No Direct Script Access Allowed');

class Admin extends CI_Controller{
	function __construct(){
		parent:: __construct();
		//cek login
		if($this->session->userdata('status') != "login"){
			$alert=$this->session->set_flashdata('alert','Anda Belum Login');
			redirect(base_url());
		}
	}

	function index(){
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/mainbar');
		//$this->load->view('footer');
	}
		function mainbar(){
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/mainbar');
		}

			function anak_asuh(){
				$this->load->view('admin/header');
				$this->load->view('admin/sidebar');
				$this->load->view('admin/anak_asuh');
			}

				function pengasuh(){
					$data['pengasuh'] =$this->m_panti->get_data('pengasuh')->result();

					$this->load->view('admin/header');
					$this->load->view('admin/sidebar');
					$this->load->view('admin/pengasuh', $data);
				}

				function tambah_pengasuh(){
					$nm_pengasuh = $this->input->post('nm_pengasuh');
					$jenis_kelamin = $this->input->post('jenis_kelamin');
					$no_hp = $this->input->post('no_hp');
					$alamat = $this->input->post('alamat');

					$this->form_validation->set_rules('nm_pengasuh','Nama Pengasuh','required');
					if($this->form_validation->run() != false){
						$data = array(
							'nm_pengasuh' => $nm_pengasuh,
							'jenis_kelamin' => $jenis_kelamin,
							'no_hp' => $no_hp,
							'alamat' => $alamat
						);

						$this->m_panti->insert_data($data,'pengasuh');
						redirect(base_url().'admin/pengasuh');

					}else{
						$this->load->view('admin/header');
						$this->load->view('admin/sidebar');
						$this->load->view('admin/tambah_pengasuh');
					}
				}

				function edit_pengasuh($id){
					$where = array('id_pengasuh' => $id);
					$data['pengasuh'] = $this->m_panti->edit_data($where,'pengasuh')->result();

					$this->load->view('admin/header');
					$this->load->view('admin/sidebar');
					$this->load->view('admin/editpengasuh', $data);
				}

				function update_pengasuh(){
					$id = $this->input->post('id');
					$nm_pengasuh = $this->input->post('nm_pengasuh');
					$jenis_kelamin = $this->input->post('jenis_kelamin');
					$no_hp = $this->input->post('no_hp');
					$alamat = $this->input->post('alamat');
					$this->form_validation->set_rules('nm_pengasuh','Nama Pengasuh','required');
					$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required');
					$this->form_validation->set_rules('no_hp','no_hp','required');
					$this->form_validation->set_rules('alamat','Alamat','required');
					if($this->form_validation->run() != false){
						$where = array('id_pengasuh' => $id);
						$data = array(
							'nm_pengasuh' => $nm_pengasuh,
							'jenis_kelamin' => $jenis_kelamin,
							'no_hp' => $no_hp,
							'alamat' => $alamat
						);

						$this->m_panti->update_data($where,$data,'pengasuh');
						redirect(base_url().'admin/pengasuh');
					}else{
						$where = array('id_pengasuh' => $id);
						$data['pengasuh'] = $this->m_panti->edit_data($where,'pengasuh')->result();
						$this->load->view('admin/header');
						$this->load->view('admin/sidebar');
						$this->load->view('admin/editpengasuh', $data);
					}
				}

				function hapus_pengasuh($id){
					$where = array('id_pengasuh' => $id);
					$this->m_panti->delete_data($where,'pengasuh');
					redirect(base_url().'admin/pengasuh');
				}

					function donatur(){
						$this->load->view('admin/header');
						$this->load->view('admin/sidebar');
						$this->load->view('admin/donatur');
					}

						function donasi(){
							$this->load->view('admin/header');
							$this->load->view('admin/sidebar');
							$this->load->view('admin/donasi');
						}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'welcome?pesan=logout');
	}

}