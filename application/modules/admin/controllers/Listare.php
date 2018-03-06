<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Listare extends Admin_Controller {

	// Frontend User CRUD
	public function index() {
		$contract_id = $_GET['contract'];

		$this->load->database();

		$this->db->select();
		 $this->db->where('id = ', $contract_id);
		 $query = $this->db->get('contracte');
		 $ret = $query->row();
		 //echo $ret->numar_contract;
		 $data['numar'] = $ret->numar_contract;
		 $data['din'] = $ret->de_la;
		 $data['pana'] = $ret->pana_la;
		 $data['id'] = $ret->id;
		 $data['unde'] = $ret->unde_circula;
		 $data['pret'] = $ret->pret;
		 $data['garantie'] = $ret->garantie;
		 $data['din_ora'] = $ret->din_ora;
		 $data['pana_ora'] = $ret->pana_ora;
		 $data['termen'] = $ret->termen;
		 $data['penalitati'] = $ret->penalitati;
		 $data['taxa_aeroport'] = $ret->taxa_aeroport;
		 $data['data_contract'] = $ret->data_contract;
		 $data['ora_contract'] = $ret->ora_contract;
		 $data['comb_predare'] = $ret->comb_predare;
		 $data['comb_primire'] = $ret->comb_primire;
		 $data['km_predare'] = $ret->km_predare;
		 $data['km_primire'] = $ret->km_primire;
		 $data['mentiuni_predare'] = $ret->mentiuni_predare;
		 $data['mentiuni_primire'] = $ret->mentiuni_primire;

		 //getting the admin users table to get the name of the employee
		 $this->db->select();
 		 $this->db->where('id = ', $ret->inchiriat_de);
 		 $query = $this->db->get('admin_users');
 		 $ret2 = $query->row();

		 $data['nume'] = $ret2->first_name;
		 $data['prenume'] = $ret2->last_name;

		 //getting the sediu address
		 $this->db->select();
 		 $this->db->where('id = ', $ret->sediu);
 		 $query = $this->db->get('sedii');
 		 $ret3 = $query->row();

		 $data['sediu'] = $ret3->adresa;

		 //getting the clients name
		 $this->db->select();
 		 $this->db->where('id = ', $ret->client);
 		 $query = $this->db->get('users');
 		 $ret4 = $query->row();

		 $data['numec'] = $ret4->nume;
		 $data['prenumec'] = $ret4->prenume;
		 $data['dob'] = $ret4->data_nasterii;
		 $data['cnp'] = $ret4->cnp;
		 $data['domiciliu'] = $ret4->domiciliu;
		 $data['telefon'] = $ret4->telefon;

		 //getting car details
		 $this->db->select();
 		 $this->db->where('id = ', $ret->masina);
 		 $query = $this->db->get('masini');
 		 $ret5 = $query->row();

		 $data['marca'] = $ret5->marca;
		 $data['model'] = $ret5->model;
		 $data['numar_masina'] = $ret5->numar;
		 $data['culoare'] = $ret5->culoare;
		 $data['vin'] = $ret5->caroseria_nr;

		 $this->load->view('listare', $data);
		//$this->render('notifi');
	}

	public function pdf() {
		$contract_id = $_GET['contract'];

		$this->load->database();

		$this->db->select();
		 $this->db->where('id = ', $contract_id);
		 $query = $this->db->get('contracte');
		 $ret = $query->row();
		 //echo $ret->numar_contract;
		 $data['numar'] = $ret->numar_contract;
		 $data['din'] = $ret->de_la;
		 $data['pana'] = $ret->pana_la;
		 $data['id'] = $ret->id;
		 $data['unde'] = $ret->unde_circula;
		 $data['pret'] = $ret->pret;
		 $data['garantie'] = $ret->garantie;
		 $data['din_ora'] = $ret->din_ora;
		 $data['pana_ora'] = $ret->pana_ora;
		 $data['termen'] = $ret->termen;
		 $data['penalitati'] = $ret->penalitati;
		 $data['taxa_aeroport'] = $ret->taxa_aeroport;
		 $data['data_contract'] = $ret->data_contract;
		 $data['ora_contract'] = $ret->ora_contract;
		 $data['comb_predare'] = $ret->comb_predare;
		 $data['comb_primire'] = $ret->comb_primire;
		 $data['km_predare'] = $ret->km_predare;
		 $data['km_primire'] = $ret->km_primire;
		 $data['mentiuni_predare'] = $ret->mentiuni_predare;
		 $data['mentiuni_primire'] = $ret->mentiuni_primire;

		 //getting the admin users table to get the name of the employee
		 $this->db->select();
 		 $this->db->where('id = ', $ret->inchiriat_de);
 		 $query = $this->db->get('admin_users');
 		 $ret2 = $query->row();

		 $data['nume'] = $ret2->first_name;
		 $data['prenume'] = $ret2->last_name;

		 //getting the sediu address
		 $this->db->select();
 		 $this->db->where('id = ', $ret->sediu);
 		 $query = $this->db->get('sedii');
 		 $ret3 = $query->row();

		 $data['sediu'] = $ret3->adresa;

		 //getting the clients name
		 $this->db->select();
 		 $this->db->where('id = ', $ret->client);
 		 $query = $this->db->get('users');
 		 $ret4 = $query->row();

		 $data['numec'] = $ret4->nume;
		 $data['prenumec'] = $ret4->prenume;
		 $data['dob'] = $ret4->data_nasterii;
		 $data['cnp'] = $ret4->cnp;
		 $data['domiciliu'] = $ret4->domiciliu;
		 $data['telefon'] = $ret4->telefon;

		 //getting car details
		 $this->db->select();
 		 $this->db->where('id = ', $ret->masina);
 		 $query = $this->db->get('masini');
 		 $ret5 = $query->row();

		 $data['marca'] = $ret5->marca;
		 $data['model'] = $ret5->model;
		 $data['culoare'] = $ret5->culoare;
		 $data['vin'] = $ret5->caroseria_nr;
		 $data['numar_masina'] = $ret5->numar;

		 $this->load->view('listare', $data);
		ini_set('display_errors', '0');
		//this data will be passed on to the view

		//load the view, pass the variable and do not show it but "save" the output into $html variable
		$html=$this->load->view('listare', $data, true);

		//this the the PDF filename that user will get to download
		$pdfFilePath = "contract_inchiriere_" . $data['numar'] . ".pdf";

		//load mPDF library
		$this->load->library('m_pdf');
		//actually, you can pass mPDF parameter on this load() function
		$pdf = $this->m_pdf->load();
		//generate the PDF!
		$pdf->WriteHTML($html);
		//offer it to user via browser download! (The PDF won't be saved on your server HDD)
		$pdf->Output($pdfFilePath, "D");

	}

}
