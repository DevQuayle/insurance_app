<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	
	function __construct() {
		parent::__construct();
		$this->lang->load('auth');
	}
	public function index()
	{

		if(!$this->ion_auth->logged_in())
		{
			// GUEST - gość nie zalogowany
			$this->load->view('template/header');
			$this->load->view('guest/navigation');
			$this->load->view('guest/index');
			$this->load->view('template/footer');
		}
		elseif (!$this->ion_auth->is_admin() && $this->ion_auth->in_group('members')) 
		{
			// members - Użytkownicy którzy moga widzieć tylko swoich klientów 
			$this->load->view('template/header');
			$this->load->view('members/navigation');
			$this->load->view('members/index');
			$this->load->view('template/footer');
		}
		elseif (!$this->ion_auth->is_admin() && $this->ion_auth->in_group('main_members')) 
		{
			// main_members -  Użytkownicy którzy moga widziec wszystkich klientow
			$this->load->view('template/header');
			$this->load->view('main_members/navigation');
			$this->load->view('main_members/index');
			$this->load->view('template/footer');
		}
		else 
		{
			// ADMIN - osoba zarzdzajca użytkownikami 
			$this->load->view('template/header');
			$this->load->view('admin/navigation');

			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			$this->data['users'] = $this->ion_auth->users()->result();
			foreach ($this->data['users'] as $k => $user)
			{
				$this->data['users'][$k]->groups = $this->ion_auth->get_users_groups($user->id)->result();
			}

			$this->load->view('admin/index', $this->data);
			$this->load->view('template/footer');
		}
		
	}
}
