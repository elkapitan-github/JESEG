<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class LoggedIn Extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('connector','x');
	}
	function admFxFX(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		if($sqlxx->num_rows() == 1){
			$data = array(
				'content' => 'redirectingAdmn'
			);
			$this->load->view('inc/template',$data);
		}else{
			redirect('strt');
		}
	}
	function reviewrxFX(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		if($sqlxx->num_rows() == 1){
			$data = array(
				'content' => 'redirectReviewer'
			);
			$this->load->view('inc/template',$data);
		}else{
			redirect('strt');
		}
	}
	function editorxFX(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		if($sqlxx->num_rows() == 1){
			$data = array(
				'content' => 'redirectEditor'
			);
			$this->load->view('inc/template',$data);
		}else{
			redirect('strt');
		}
	}
	function rglrFxfx(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		if($sqlxx->num_rows() == 1){
			$data = array(
				'content' => 'redirectingRglr'
			);
			$this->load->view('inc/template',$data);
		}else{
			redirect('strt');
		}
	}
	function fxwlx(){
		redirect('Cmendwll?epr=dash');
	}
	function fxRglrData(){
		redirect('GtReglr?epr=backgrnd');
	}
	function fxReviewrDtaXXd(){
		redirect('GtReviewrRr?epr=dash');
	}
	function fxEdtrDtaXXd(){
		redirect('GtEdtrRr?epr=dash');
	}
}