<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');

class Fungsi extends CI_Controller {

	public function index()
	{
		if ($this->session->userdata('login') == true) {
			$data['title'] = 'Dashboard';
			$data['main_view'] = 'v_dashboard';
			//$data['tema'] = $this->db->where('NPM', $this->session->userdata('npm'))->get('data')->row()->tema;
			$this->load->view('template', $data);
		} else {
			redirect('auth');
		}
	}
	public function downloadds()
	{
		force_download('digisign/'.$this->session->userdata('nama').'.p12',NULL);
	}
}
