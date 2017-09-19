<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Choose extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('data')) redirect('');
    }

    public function index()
    {
        redirect('');
    }

	public function university()
	{
		$rs = $this->session->userdata('data');

		$data = array(
			'id' => $rs['id'],
			'name' => $rs['name'],
			'profile' => $rs['profile'],
			'email' => $rs['email'],
            'universities' => $this->member->getUnivercities(),
		);
		$this->load->view('choose/university', $data);
	}

}
