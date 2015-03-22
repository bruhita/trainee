<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class companies extends CI_Controller{ 
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	public function index()
	{
        $this->load->model('Company_model'); 
        $companies = $this->Company_model->get_items();
        $data['companies'] = $companies;
		$this->load->view('company_list',$data);
	}
}
