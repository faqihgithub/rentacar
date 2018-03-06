<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_builder');
    $this->load->helper(array('form', 'url'));
	}

	public function index() {
		$crud = $this->generate_crud('users');

		$crud->set_rules('nume','Nume','required');
		$crud->set_rules('prenume','Prenume','required');
		$crud->set_rules('email','Email','required');
		$crud->set_rules('telefon','Telefon','required');

		$crud->set_field_upload('poza_buletin','uploads/clienti/');
		$crud->set_field_upload('poza_permis','uploads/clienti/');
		$crud->set_field_upload('contract','uploads/clienti/');
		$crud->set_relation('ultima_rezervare','masini','numar');
		$crud->set_relation('blacklist_cine','admin_users','username');
		$crud->set_relation('blacklist_sediu','sedii','nume');

		$crud->columns('nume', 'prenume', 'email', 'telefon', 'blacklist', 'data_nasterii');

		// only webmaster and admin can reset user password
		if ($this->ion_auth->in_group(array('webmaster', 'admin')))
		{
			$crud->add_action('Reset Password', '', 'admin/user/reset_password', 'fa fa-repeat');
		}

		// disable direct create / delete Frontend User
		if (!$this->ion_auth->in_group(array('webmaster', 'admin'))):
			$crud->unset_delete();
			$crud->unset_edit();
		endif;

		$this->mPageTitle = 'Clienti';
		$this->render_crud();
	}

	public function create() {
		redirect('admin/user/index/add');
	}

	// Frontend User Reset Password
	public function reset_password($user_id) {
		// only top-level users can reset user passwords
		$this->verify_auth(array('webmaster', 'admin'));

		$form = $this->form_builder->create_form();
		if ($form->validate())
		{
			// pass validation
			$data = array('password' => $this->input->post('new_password'));

			// [IMPORTANT] override database tables to update Frontend Users instead of Admin Users
			$this->ion_auth_model->tables = array(
				'users'				=> 'users',
				'groups'			=> 'groups',
				'users_groups'		=> 'users_groups',
				'login_attempts'	=> 'login_attempts',
			);

			// proceed to change user password
			if ($this->ion_auth->update($user_id, $data))
			{
				$messages = $this->ion_auth->messages();
				$this->system_message->set_success($messages);
			}
			else
			{
				$errors = $this->ion_auth->errors();
				$this->system_message->set_error($errors);
			}
			refresh();
		}

		$this->load->model('user_model', 'users');
		$target = $this->users->get($user_id);
		$this->mViewData['target'] = $target;

		$this->mViewData['form'] = $form;
		$this->mPageTitle = 'Reset User Password';
		$this->render('user/reset_password');
	}
}
