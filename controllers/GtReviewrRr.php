<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class GtReviewrRr Extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('reviewrCnn','x');
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
					// Editor
					redirect('strt');
				}else if($log->prio == 2){
					$this->db->query("DELETE FROM fileportal WHERE ownerid=".$log->userid." AND taskidref=0 AND attachedTo=0");
					// Reviewer
					if($getEPRx == 'dash'){ $data = array('content' => 'mob_rev_reviews'); }
					else if($getEPRx == 'researchers'){ $data = array('content' => 'mob_rev_researcher'); }
					else{
						redirect('GtReviewrRr?epr=dash');
					}
					$data += array(
						'ComName' => $log->completename,
						'getPassWord' => $log->password,
						'userID' => $log->userid,
						'adminSel' => $log->admin,
						'editorSel' => $log->editor,
						'reviewerSel' => $log->reviewer,
						'authorSel' => $log->author,
						'imageXCnt' => $this->db->query("SELECT image FROM users WHERE userid='".$log->userid."'")->result(),
						'lastLog' => $this->db->query("SELECT * FROM session WHERE id!='".$log->id."' AND userid='".$log->userid."' ORDER BY id DESC LIMIT 1")->result()
					);
					$this->load->view('reviewer/template',$data);
				}else if($log->prio == 1){
					// Author Only
					redirect('strt');
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
	function sbmitNewAuthor(){
		$result = $this->x->submitData(1);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function lckRedrct(){
		$result = $this->x->submitData(112333);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmitrespnseArti(){
		$result = $this->x->submitData(2);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtMessageAsTasksx(){
		$result = $this->x->submitData(3);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtMessageAsTasksxx2(){
		$result = $this->x->submitData(4);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtFireApprvalxklh(){
		$result = $this->x->submitData(5);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtFileDat(){
		$result = $this->x->submitData(6);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtFireApprvalxklh2(){
		$result = $this->x->submitData(7);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtFireApprvalxklh3(){
		$result = $this->x->submitData(8);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtFireApprvalxklh4(){
		$result = $this->x->submitData(9);
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
	function listofResearchersXx(){
		$result = $this->x->getData(2);
		echo json_encode($result);
	}
	function newTaskedArticles(){
		$result = $this->x->getData(3);
		echo json_encode($result);
	}
	function newTaskedArticles2(){
		$result = $this->x->getData(4);
		echo json_encode($result);
	}
	function getAllTaskNNw(){
		$result = $this->x->getData(5);
		echo json_encode($result);
	}
	function getAllGEnTaskPlHre(){
		$result = $this->x->getData(6);
		echo json_encode($result);
	}
	function newTaskedArticles3(){
		$result = $this->x->getData(7);
		echo json_encode($result);
	}
	function logsGet(){
		$result = $this->x->getData(8);
		echo json_encode($result);
	}
	function getAllUpdateFxrLssls(){
		$result = $this->x->getData(9);
		echo json_encode($result);
	}
	function getListIDdd(){
		$result = $this->x->getData(10);
		echo json_encode($result);
	}
	function newTaskedArticles4(){
		$result = $this->x->getData(11);
		echo json_encode($result);
	}
	function getAllAnnce(){
		$result = $this->x->getData(12);
		echo json_encode($result);
	}
	function listofResearchersXxDRSTVH(){
		$result = $this->x->getData(13);
		echo json_encode($result);
	}
	function searchNewASsNw(){
		$result = $this->x->getData(14);
		echo json_encode($result);
	}
	function acceptedForRev(){
		$result = $this->x->getData(15);
		echo json_encode($result);
	}
	function pbulArtccle(){
		$result = $this->x->getData(17);
		echo json_encode($result);
	}
	function ardisAppr(){
		$result = $this->x->getData(16);
		echo json_encode($result);
	}
	function thisNoteGet(){
		$result = array(
			'content1' => $this->x->getData(18),
			'content2' => $this->x->getData(19)
		);
		echo json_encode($result);
	}
	function UpthisNoteTook(){
		$result = $this->x->getData(20);
		echo json_encode($result);
	}
}