<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class GtReglr Extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('reglrCnn','x');
	}
	function index(){
		$getEPRx = $_GET['epr'];
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		if($sqlxx->num_rows() > 0){
			foreach ($sqlxx->result() as $log) {
				if($log->prio == 4){
					// Admin
					redirect('strt');
				}else if($log->prio == 3){
					// Reviewer
					redirect('strt');
				}else if($log->prio == 2){
					// Reviewer
					redirect('strt');
				}else if($log->prio == 1){
					// Author Only
					if($getEPRx == 'backgrnd'){ $data = array('content' => 'mob_rglr_about'); }
					else if($getEPRx == 'articles'){ $data = array('content' => 'mob_rglr_article'); }
					else if($getEPRx == 'social'){ $data = array('content' => 'mob_rglr_social'); }
					else if($getEPRx == 'settings'){ $data = array('content' => 'mob_rglr_settings'); }
					else{
						redirect('GtReglr?epr=backgrnd');
					}
					$data += array(
						'ComName' => $log->completename,
						'getPassWord' => $log->password,
						'userID' => $log->userid,
						'pI' => $this->db->query("SELECT * from users LEFT JOIN country ON users.country_id=country.countryid WHERE users.userid='".$log->userid."'")->result(),
						'adminSel' => $log->admin,
						'editorSel' => $log->editor,
						'reviewerSel' => $log->reviewer,
						'authorSel' => $log->author,
						'imageres' => $this->db->query("SELECT * FROM users WHERE userid='".$log->userid."' LIMIT 1")->result(),
						'lastLog' => $this->db->query("SELECT * FROM session WHERE id!='".$log->id."' AND userid='".$log->userid."' ORDER BY id DESC LIMIT 1")->result()
					);
					$this->load->view('rglr/template',$data);
				}else{
					redirect('strt');
				}
			}
		}else{
			redirect('strt');
		}
	}

	function lcklc(){
		//***** Date Area ******
		date_default_timezone_set('Asia/Manila');
		$xx = date('H:i:sa', time());
		//***** Date Area ******
		$thisIP = $this->x->get_client_ip();
		$uplog = array('timeout' => $xx);
		$this->db->where('ipaddress', $thisIP);
		$this->db->update('session',$uplog);
		if($this->db->affected_rows() > 0){
			redirect('Strt/lgin');
		}
	}

	/************************** Submitting Data *************************/
	function lckRedrct(){
		$result = $this->x->submitData(112333);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmitNewAuthor(){
		$result = $this->x->submitData(1);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmitThsJournalxXx(){
		$result = $this->x->submitData(2);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtFileDat(){
		$result = $this->x->submitData(3);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function remFileAtt(){
		$result = $this->x->submitData(4);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtMessageAsTasksx(){
		$result = $this->x->submitData(5);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function submitUpdateTAK(){
		$result = $this->x->submitData(6);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function remFilePersXxa(){
		$result = $this->x->submitData(7);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtFileDat2(){
		$result = $this->x->submitData(8);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtFileDat22(){
		$result = $this->x->submitData(9);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtMessPLxxgge(){
		$result = $this->x->submitData(10);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function uploadMyProfImage(){
		$result = $this->x->submitData(11);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmitPRivChange(){
		$result = $this->x->submitData(12);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function updateCsFmxPP(){
		$result = $this->x->submitData(14);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	/************************** Getting Data *************************/
	function getlslsaauthor(){
		$result = $this->x->getData(1);
		echo json_encode($result);
	}
	function getNameofFile(){
		$result = $this->x->getData(2);
		echo json_encode($result);
	}
	function getJournalxPPT(){
		$result = $this->x->getData(3);
		echo json_encode($result);
	}
	function getAllTaskNNw(){
		$result = $this->x->getData(4);
		echo json_encode($result);
	}
	function getAlDmilipole(){
		$result = $this->x->getData(5);
		echo json_encode($result);
	}
	function getIMXx(){
		$result = $this->x->getData(6);
		echo json_encode($result);
	}
	function logsGet(){
		$result = $this->x->getData(7);
		echo json_encode($result);
	}
	function getRelatedArt(){
		$result = $this->x->getData(8);
		echo json_encode($result);
	}
	function getJournalxPPT2(){
		$result = $this->x->getData(9);
		echo json_encode($result);
	}
	function getCountry(){
		$result = $this->x->getData(10);
		echo json_encode($result);
	}
	function getJournalxPPTsearch1(){
		$result = $this->x->getData(11);
		echo json_encode($result);
	}
	function getJournalxPPTsearch2(){
		$result = $this->x->getData(12);
		echo json_encode($result);
	}
	function thisNoteGet(){
		$result = array(
			'content1' => $this->x->getData(13),
			'content2' => $this->x->getData(14)
		);
		echo json_encode($result);
	}
	function UpthisNoteTook(){
		$result = $this->x->getData(15);
		echo json_encode($result);
	}
	function glTTTTallLgg(){
		$result = $this->x->getData(16);
		echo json_encode($result);
	}
}