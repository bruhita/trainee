<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class schools extends CI_Controller{ 
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
        $this->load->model('School_model'); 
        $schools = $this->School_model->get_items();
//       pr($schools);
        $data['schools'] = $schools;
		$this->load->view('school_list',$data);
	}
}
