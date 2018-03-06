<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sedii extends Admin_Controller {

	public function index() {
		$crud = $this->generate_crud('sedii');

		$crud->set_rules('nume','Nume','required');
		$crud->set_rules('email','Email','required');
		$crud->set_rules('telefon','Telefon','required');

		//$crud->set_relation('blacklist','sedii','id');

		$crud->columns('nume', 'adresa', 'email', 'telefon', 'ore_de_lucru');

		$this->mPageTitle = 'Puncte de lucru';
		$this->render_crud();
	}

	public function create() {
		redirect('admin/sedii/index/add');
	}

}
