<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Admin_Controller {

	public function index() {
		$this->load->model('user_model', 'users');
		$this->mViewData['count'] = array(
			'users' => $this->users->count_all(),
		);
		$data = array();
		$data2 = array();
		$data3 = array();
		$data4 = array();
		$data5 = array();
		global $data;
	 $today = date('Y-m-d');
	 $expires = date('Y-m-d', strtotime($today. ' + 20 days'));
	 $this->load->database();
		$this->db->select();
		 $this->db->where('itp <', $expires);
			$query = $this->db->get('masini');
		 foreach ($query->result() as $row) {
			 $data[] = $row->numar;
		 }

		 $this->db->where('casco <', $expires);
			$query = $this->db->get('masini');
		 foreach ($query->result() as $row) {
			 $data2[] = $row->numar;
		 }

		 $this->db->where('rca <', $expires);
			$query = $this->db->get('masini');
		 foreach ($query->result() as $row) {
			 $data3[] = $row->numar;
		 }

		 $this->db->where('rovinieta <', $expires);
			$query = $this->db->get('masini');
		 foreach ($query->result() as $row) {
			 $data4[] = $row->numar;
		 }

		 $this->db->where('revizie <', $expires);
			$query = $this->db->get('masini');
		 foreach ($query->result() as $row) {
			 $data5[] = $row->numar;
		 }
		 $alldata = array('itp' => $data, 'casco' => $data2, 'rca' => $data3, 'rovinieta' => $data4, 'revizie' => $data5);
		 $this->mViewData['alldata'] = $alldata;
		//$this->render('home', $alldata);
		$this->notificari_home();
	}

	public function notificari_home() {

	$crud = $this->generate_crud('masini');
	$today = date('Y-m-d');
	$expires = date('Y-m-d', strtotime($today. ' + 20 days'));
	$crud->where('itp <', $expires);
	$crud->or_where('rca <', $expires);
	$crud->or_where('rovinieta <', $expires);
	$crud->or_where('revizie <', $expires);
	$crud->or_where('casco <', $expires);

	$cols = array('itp', 'rca', 'rovinieta', 'revizie', 'casco');

			if($crud->where('itp <', $expires) && $crud->or_where('casco <', $expires)):
				$crud->callback_column('itp',array($this,'make_it_red'));
				$crud->callback_column('casco',array($this,'make_it_red'));
			elseif($crud->or_where('rca <', $expires)):
				$crud->callback_column('rca',array($this,'make_it_red'));
			elseif($crud->or_where('rovinieta <', $expires)):
				$crud->callback_column('rovinieta',array($this,'make_it_red'));
			elseif($crud->or_where('revizie <', $expires)):
				$crud->callback_column('revizie',array($this,'make_it_red'));
			elseif($crud->or_where('casco <', $expires)):
				$crud->callback_column('casco',array($this,'make_it_red'));
			endif;

	$crud->columns('marca', 'model', 'an', 'numar', 'status', 'itp', 'rca', 'rovinieta', 'revizie', 'casco');

		$crud->unset_add();
		$crud->unset_delete();

		$this->mPageTitle = 'Masini la care le expira in mai putin de 20 de zile...';
			$data = array();
			$data2 = array();
			$data3 = array();
			$data4 = array();
			$data5 = array();
			global $data;
		 $today = date('Y-m-d');
		 $expires = date('Y-m-d', strtotime($today. ' + 20 days'));
		 $this->load->database();

		 $this->db->select();
			$this->db->where('itp <', $expires);
			 $query = $this->db->get('masini');
			foreach ($query->result() as $row) {
				$data[] = $row->numar;
			}

			$this->db->where('casco <', $expires);
			 $query = $this->db->get('masini');
			foreach ($query->result() as $row) {
				$data2[] = $row->numar;
			}

			$this->db->where('rca <', $expires);
			 $query = $this->db->get('masini');
			foreach ($query->result() as $row) {
				$data3[] = $row->numar;
			}

			$this->db->where('rovinieta <', $expires);
			 $query = $this->db->get('masini');
			foreach ($query->result() as $row) {
				$data4[] = $row->numar;
			}

			$this->db->where('revizie <', $expires);
			 $query = $this->db->get('masini');
			foreach ($query->result() as $row) {
				$data5[] = $row->numar;
			}
			global $alldata;
			$alldata = array('itp' => $data, 'casco' => $data2, 'rca' => $data3, 'rovinieta' => $data4, 'revizie' => $data5);
			$this->mViewData['alldata'] = $alldata;

			$this->mViewData['content'] = $data;
			$this->mViewData['content2'] = $data2;
			$this->mViewData['content3'] = $data3;
			$this->mViewData['content4'] = $data4;
			$this->mViewData['content5'] = $data5;
			$this->render('notifi');
			return $alldata;
	}
}
