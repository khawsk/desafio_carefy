<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function index()
	{
        $variaveis['cadastros'] = $this->m_cadastros->get();
		$this->load->view('v_home', $variaveis);
	}
}