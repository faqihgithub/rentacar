<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notificari extends Admin_Controller {

	public $data;
	// Frontend User CRUD
	public function index() {

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

							function make_it_red($value,$row) {
								//This is experimental.
							    return "<span style=\"color:red !important; font-size: 16px !important;\">".$value."</span>";
							}

	public function dailycron() {
		 $alldata = $this->index();
		 echo 'Starting daily cron job'.PHP_EOL;
						 $this->load->helper('email');
						 $this->load->library('email');
						 $config['protocol'] = 'mail';

				    $this->email->initialize($config);
						$this->email->from('expira@yourcompany.com', 'Expirari | Rent a car');
						$this->email->to('office@yourcompany.ro');
						//$this->email->cc('Office@yourcompany.com, Office@yourcompany.com');

						$this->email->subject('Masini la care expira ITP/RCA/Casco/Rovinieta/Revizie in mai putin de 20 de zile');
						$this->email->message($this->load->view('notificari', $alldata, TRUE));

						if ( ! $this->email->send()) {
							 $data['message'] ="Email not sent \n".$this->email->print_debugger();
							 var_dump($data);
						 } else {
								// successfull message
							 $data['message'] ="Email was successfully sent";
					 	}

						//checking if cars are out of service, we switch their status to available.
						$today = date('Y-m-d');
			  		$outof = date('Y-m-d', strtotime($today));
			  		$this->db->where('iesire_service <=', $outof);
						$iesit_din_service = array(
						'status' => 'Disponibila'
						);
						$this->db->update('masini', $iesit_din_service);

		 echo 'End of daily cron job.'.PHP_EOL;
	}

}
