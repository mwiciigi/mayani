<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
	parent::__construct();
	$this->load->model('mayani');
}

	public function index(){
		$data['main_content'] = 'fe/home';
		$this->load->view('fe/includes/template',$data);
	}

	public function chicks(){
		$data['main_content'] = 'fe/chicks';
		$this->load->view('fe/includes/template',$data);
	}

	public function services(){
		$data['main_content'] = 'fe/services';
		$this->load->view('fe/includes/template',$data);
	}

	public function equipment(){
		$data['main_content'] = 'fe/equipment';
		$this->load->view('fe/includes/template',$data);
	}

	public function blog(){
		$data['main_content'] = 'fe/blog';
		$this->load->view('fe/includes/template',$data);
	}

	public function my_blog(){
		$data['main_content'] = 'fe/my_blog';
		$this->load->view('fe/includes/template',$data);
	}

	public function about(){
		$data['main_content'] = 'fe/about';
		$this->load->view('fe/includes/template',$data);
	}
	
	public function contact(){
		$data['main_content'] = 'fe/contact';
		$this->load->view('fe/includes/template',$data);
	}
 } 
