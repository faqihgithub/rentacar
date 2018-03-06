<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contracte extends Admin_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('form_builder');
    $this->load->helper(array('form', 'url'));
	}

	public function index() {
		$crud = $this->generate_crud('contracte');

		$crud->set_rules('client','Client','required');
		$crud->set_rules('masina','Masina','required');
		$crud->set_rules('numar_contract','Numar contract','required');

		$crud->set_relation('client','users','nume');
		$crud->set_relation('masina','masini','numar');
		$crud->set_relation('inchiriat_de','admin_users','username');
		$crud->set_relation('sediu','sedii','nume');

		$crud->columns('numar_contract', 'client', 'masina', 'inchiriat_de', 'sediu', 'de_la', 'pana_la');
		//$crud->unset_delete();
		$crud->unset_read();

		$crud->callback_column('numar_contract',array($this,'link_to_numar'));

		$this->mPageTitle = 'Contracte';
		$this->render_crud();

		//$this->render('contracte');
	}

	public function link_to_numar($value, $row){
		return '<a href="'.base_url("admin/listare/?contract=".$row->id).'">'.$row->numar_contract.'</a>';
	}

public function listare() {
	$this->load->database();

	$this->db->select();
		$query = $this->db->get('contracte');
	 foreach ($query->result() as $row) {
		 $data[] = $row->numar;
	 }

	 $this->db->select();
		 $query = $this->db->get('contracte');
	 foreach ($query->result() as $row) {
		 $data2[] = $row->client;
	 }

	 $this->db->select();
		 $query = $this->db->get('contracte');
	 foreach ($query->result() as $row) {
		 $data3[] = $row->masina;
	 }

	 $data3 = array('Numar' => $data, 'Client' => $data2, 'Masina' => $data3);
	 $this->mPageTitle = "listare contract";
	 $this->mViewData['content'] = $data;
	 $this->mViewData['content2'] = $data2;
	 $this->mViewData['content3'] = $data3;
	 $this->render('contracte');
}

public function printa() {
	$this->load->library('form_builder');
	$form = $this->form_builder->create_form();

	// display form when no POST data, or validation failed
	$this->mViewData['form'] = $form;
	$this->mBodyClass = 'login-page';
	$this->render('contracte2', 'empty');
}

	public function create() {
		redirect('admin/contracte/index/add');
	}

	}
