<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller{
	function __construct(){
		parent:: __construct();
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('subheader');
		$this->load->view('artikel');
		$this->load->view('footer');
	}

	public function profil(){
		$this->load->view('header');
		$this->load->view('subheader');
		$this->load->view('profil');
		$this->load->view('footer');
	}

	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if($this->form_validation->run() != false){
			$where = array('username' => $username, 'password' => md5($password) );

			$data = $this->m_panti->edit_data($where, 'admin');
			$d = $this->m_panti->edit_data($where, 'admin')->row();
			$cek = $data->num_rows();

			if($cek > 0){
				$session = array('id' => $d->id_admin, 'nama' => $d->nm_admin, 'status' => 'login');
				$this->session->set_userdata($session);
				redirect(base_url().'admin');
			}else{
				$dt = $this->m_panti->edit_data($where,'donatur');
				$hasil =  $this->m_panti->edit_data($where,'donatur')->row();
				$proses = $dt->num_rows();

					if($proses > 0){
						$session = array('id_donatur' => $hasil->id_donatur, 'nm_donatur'=> $hasil->nm_donatur, 'status'=> 'login');
						$this->session->set_userdata($session);
						redirect(base_url().'donatur');
						}else{
							$this->session->set_flashdata('alert','Login gagal! username atau Password Salah.');
							redirect(base_url());
						}
					}
			}else{
				$this->session->set_flashdata('alert','Anda belum mengisi username atau password');
					$this->load->view('login');
			}
		}
}