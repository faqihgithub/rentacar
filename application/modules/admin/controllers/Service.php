<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends Admin_Controller {

	public function index() {

	$crud = $this->generate_crud('service');

	$crud->set_rules('masina','Masina','required');
	$crud->set_rules('intrat_in_service','Intrat in service','required');

	$crud->set_field_upload('documente','uploads/service/');

	$crud->set_relation('masina','masini','numar');
	$today = date('Y-m-d');
	$expires = date('Y-m-d', strtotime($today. ' + 20 days'));

	$crud->columns('masina', 'intrat_in_service', 'iesire', 'motiv');

	$crud->callback_after_insert(array($this, 'mark_car_as_inservice'));
	$crud->callback_after_update(array($this, 'mark_car_as_inservice'));

	if (!$this->ion_auth->in_group(array('webmaster'))):
		$crud->unset_delete();
		$crud->unset_edit();
	endif;

		$this->mPageTitle = 'Intrari service';
		$this->render_crud();
	}

	function mark_car_as_inservice($post_array,$primary_key) {
		$mark_car = array(
		"id" => $post_array['masina'],
		"status" => 'In service',
		'iesire_service' => $post_array['iesire']
		);
	$this->db->where('id', $post_array['masina']);
	$this->db->update('masini',$mark_car);
	return true;
	}

	public function create() {
		redirect('admin/service/index/add');
	}

}
