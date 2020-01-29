<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Cmendwll Extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('AdmnCnn','x');
	}
	function index(){
		$actual_link = "$_SERVER[REQUEST_URI]";
		$rl = substr($actual_link,15,50);
		if($rl == '?epr=dash' || $rl == '?epr=newRes' || $rl == '?epr=regsterd' || $rl == '?epr=artcl' || $rl == '?epr=mainslider' || $rl == '?epr=lanews' || $rl == '?epr=facilities' || $rl == '?epr=downLdDa' || $rl == '?epr=prtOrg' || $rl == '?epr=oth'){
			date_default_timezone_set("Asia/Manila");
			$sqlCheck = $this->db->query("SELECT * FROM revto WHERE stat='pending'");
			foreach ($sqlCheck->result() as $getKt) {
				$d1 = new DateTime($getKt->dateAss);
				$d2 = new DateTime(date('Y-m-d', time()));
				$diff = $d1->diff($d2);
				if($diff->d > 2){
					$this->db->query("DELETE from revto WHERE id='".$getKt->id."'");
				}
			}
			$getEPRx = $_GET['epr'];
			$thisIP = $this->x->get_client_ip();
			$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
			if($sqlxx->num_rows() > 0){
				foreach ($sqlxx->result() as $log) {
					if($log->prio == 4){
						// Admin
						if($getEPRx == 'dash'){ $data = array('content' => 'mob_admn_dash'); }
						else if($getEPRx == 'newRes'){ $data = array('content' => 'mob_admn_newres'); }
						else if($getEPRx == 'regsterd'){ $data = array('content' => 'mob_admn_regsterd'); }
						else if($getEPRx == 'artcl'){ $data = array('content' => 'mob_admn_artcl'); }
						else if($getEPRx == 'mainslider'){ $data = array('content' => 'mob_admn_mainslider'); }
						else if($getEPRx == 'lanews'){ $data = array('content' => 'mob_admn_lanews'); }
						else if($getEPRx == 'facilities'){ $data = array('content' => 'mob_admn_facilities'); }
						else if($getEPRx == 'downLdDa'){ $data = array('content' => 'mob_admn_downLdDa'); }
						else if($getEPRx == 'prtOrg'){ $data = array('content' => 'mob_admn_prtOrg'); }
						else if($getEPRx == 'oth'){ $data = array('content' => 'mob_admn_oth'); }
						else{
							redirect('Cmendwll?epr=dash');
						}
						$data += array(
							'userid' => $log->userid,
							'ComName' => $log->completename,
							'getPassWord' => $log->password,
							'Myemail' => $log->email,
							'adminSel' => $log->admin,
							'editorSel' => $log->editor,
							'reviewerSel' => $log->reviewer,
							'authorSel' => $log->author,
							'actual_link' => $actual_link,
							'imageres' => $this->db->query("SELECT * FROM users WHERE userid='".$log->userid."' LIMIT 1")->result()
						);
						$this->load->view('enter/template',$data);
					}else if($log->prio == 3){
						// Editor
						redirect('strt');
					}else if($log->prio == 2){
						// Reviewer
						redirect('strt');
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
		}else{
			$this->load->view('errors/index');
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
	function requestACcC(){
		$result = $this->x->submitData(1);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmitEmail(){
		$result = $this->x->submitData(2);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function asdawliansdlkawasdadawjbgnljkassaw(){
		$result = $this->x->submitData(112333);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtFileDat22(){
		$result = $this->x->submitData(3);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtMessPLxxgge(){
		$result = $this->x->submitData(4);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function setAnnLNnow(){
		$result = $this->x->submitData(5);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function uploadMyProfImage(){
		$result = $this->x->submitData(6);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtRestore2kR(){
		$result = $this->x->submitData(7);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function uploadNewsxOlx(){
		$result = $this->x->submitData(8);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function remNewsLxldd(){
		$result = $this->x->submitData(9);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function uploadaactDtt(){
		$result = $this->x->submitData(10);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtFileDat(){
		$result = $this->x->submitData(11);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function uploadOrgPart(){
		$result = $this->x->submitData(12);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function deleXX(){
		$result = $this->x->submitData(13);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function PoCmsnut(){
		$result = $this->x->submitData(14);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmtfrmOp(){
		$result = $this->x->submitData(15);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function submitSerctionFac(){
		$result = $this->x->submitData(16);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function attachImgFacSEc(){
		$result = $this->x->submitData(17);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function submitProcDsFnl(){
		$result = $this->x->submitData(18);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbMitRevAssignment(){
		$result = $this->x->submitData(19);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function azscasasdklisd(){
		$result = $this->x->submitData(20);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function azscasasdklisd2(){
		$result = $this->x->submitData(21);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}

	/************************** Getting Data *************************/
	function reqstPendingUsrs(){
		$result = $this->x->getData(1);
		echo json_encode($result);
	}
	function reqstActvResearchrs(){
		$result = $this->x->getData(2);
		echo json_encode($result);
	}
	function reqstActvResearchrs2(){
		$result = $this->x->getData(3);
		echo json_encode($result);
	}
	function reqstPendingUsrs2(){
		$result = $this->x->getData(4);
		echo json_encode($result);
	}
	function reqstActvResearchrs3(){
		$result = $this->x->getData(5);
		echo json_encode($result);
	}
	function getJournalxPPT(){
		$result = $this->x->getData(6);
		echo json_encode($result);
	}
	function getListofAssnedRE(){
		$result = $this->x->getData(7);
		echo json_encode($result);
	}
	function getAllGEnTaskPlHre(){
		$result = $this->x->getData(8);
		echo json_encode($result);
	}
	function getMyMS(){
		$result = $this->x->getData(9);
		echo json_encode($result);
	}
	function getAlDmilipole(){
		$result = $this->x->getData(10);
		echo json_encode($result);
	}
	function getMyMS2xx2(){
		$result = $this->x->getData(11);
		echo json_encode($result);
	}
	function getAllNNNNpolxx(){
		$result = $this->x->getData(12);
		echo json_encode($result);
	}
	function getJournalxPPT2(){
		$result = $this->x->getData(13);
		echo json_encode($result);
	}
	function gtAllYrInf(){
		$result = $this->x->getData(14);
		echo json_encode($result);
	}
	function gtAllYrInf2pub(){
		$result = $this->x->getData(15);
		echo json_encode($result);
	}
	function getDataFilter(){
		$result = $this->x->getData(16);
		echo json_encode($result);
	}
	function getJournalxPPTSerchPol(){
		$result = $this->x->getData(17);
		echo json_encode($result);
	}
	function getJournalxPPT2_2(){
		$result = $this->x->getData(18);
		echo json_encode($result);
	}
	function getJournalxPPT2_SEr(){
		$result = $this->x->getData(19);
		echo json_encode($result);
	}
	function getJournalxPPT3(){
		$result = $this->x->getData(20);
		echo json_encode($result);
	}
	function getJournalxPPT3_Serach(){
		$result = $this->x->getData(21);
		echo json_encode($result);
	}
	function getImgSldede(){
		$result = $this->x->getData(24);
		echo json_encode($result);
	}
	function getAllLaNews(){
		$result = $this->x->getData(26);
		echo json_encode($result);
	}
	function showPlxxiActEvt(){
		$result = $this->x->getData(28);
		echo json_encode($result);
	}
	function getXLlasd(){
		$result = $this->x->getData(29);
		echo json_encode($result);
	}
	function getLalxxPartOrgpopo(){
		$result = $this->x->getData(30);
		echo json_encode($result);
	}
	function getOthOlxx(){
		$result = $this->x->getData(42);
		echo json_encode($result);
	}
	function reqstActvResearchrs_SearS1(){
		$result = $this->x->getData(43);
		echo json_encode($result);
	}
	function reqstActvResearchrs2_SearS2(){
		$result = $this->x->getData(44);
		echo json_encode($result);
	}
	function reqstActvResearchrs3_SearS3(){
		$result = $this->x->getData(45);
		echo json_encode($result);
	}
	function gtAlDsh(){
		$result = array(
			'data1' => $this->x->getData(47),
			'data2' => $this->x->getData(48),
			'data3' => $this->x->getData(49),
			'data4' => $this->x->getData(50),
			'data5' => $this->x->getData(51),
			'data6' => $this->x->getData(52),
			'data7' => $this->x->getData(53),
			'data8' => $this->x->getData(58),
		);
		echo json_encode($result);
	}
	function gtAlDsh2(){
		$result = $this->x->getData(54);
		echo json_encode($result);
	}
	function gtAlDsh3(){
		$result = $this->x->getData(55);
		echo json_encode($result);
	}
	function PolxxUpddrMsUp(){
		$result = $this->x->getData(59);
		echo json_encode($result);
	}
	function PolxxUpddrMsUpgetOxpx(){
		$result = $this->x->getData(60);
		echo json_encode($result);
	}
	function getAllFacSec(){
		$result = $this->x->getData(61);
		echo json_encode($result);
	}
	function delPlxoxFacSec(){
		$result = $this->x->getData(62);
		echo json_encode($result);
	}
	function listofResearchersXx2x2(){
		$result = $this->x->getData(63);
		echo json_encode($result);
	}
	function getAllRevFrmSrchXX1(){
		$result = $this->x->getData(64);
		echo json_encode($result);
	}
}