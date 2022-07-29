<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('structure/head');
		$this->load->view('pages/main');
		$this->load->view('structure/foot');
	}

	function profil_1() {
		$this->load->view('structure/head');
		$this->load->view('pages/profil_lldikti4');
		$this->load->view('structure/foot');
	}

	function profil_2() {
		$this->load->view('structure/head');
		$this->load->view('pages/profil_kepala_lldikti4');
		$this->load->view('structure/foot');
	}

	function berita() {
		$this->load->view('structure/head');
		$this->load->view('pages/berita');
		$this->load->view('structure/foot');
	}
}
