<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masini extends Admin_Controller {

	// Frontend User CRUD
	public function index() {
		$crud = $this->generate_crud('masini');

		$crud->set_rules('marca','Marca','required');
		$crud->set_rules('model','Model','required');
		$crud->set_rules('an','An','required');

		$crud->set_field_upload('poza','uploads/masini/');

		$crud->columns('marca', 'model', 'an', 'numar', 'status', 'carburant', 'anvelope', 'categorie', 'poza');
		$this->unset_crud_fields('iesire_service');

		$this->mPageTitle = 'Masini';
		$this->render_crud();
	}

	public function create() {
	redirect('admin/masini/index/add');
	}

}
