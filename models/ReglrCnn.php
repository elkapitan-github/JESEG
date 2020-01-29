<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ReglrCnn extends CI_Model{
	function get_client_ip() {
	    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
	        //ip from share internet
	        $ip = $_SERVER['HTTP_CLIENT_IP'];
	    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
	        //ip pass from proxy
	        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    }else{
	        $ip = $_SERVER['REMOTE_ADDR'];
	    }
	    return $ip;
	}
	function submitData($cmd){
		// PHP Mailer Start
		$this->load->library('phpmailer_lib');
		$mail = $this->phpmailer_lib->load();
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'csujeseg@gmail.com';
		$mail->Password = 'jesegadministrator';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;
		$mail->setFrom('jeseg@carsu.edu.ph', 'jESEG');
		$mail->addReplyTo('jeseg@carsu.edu.ph', 'jESEG');
		// End PHP Mailer Start

		//***** Date Area ******
		date_default_timezone_set('Asia/Manila');
		$xx = date('H:i:sa', time());
		$yy = date('Y-m-d', time());
		$finalDT = "".$yy." ".$xx."";
		$AMPM = date('h:ia', time());
		//***** Date Area ******

		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		$xxID = 0;$userTYpeX = 0;
		foreach ($sqlxx->result() as $x) {
			$xxID = intval($x->userid);
			$opID = intval($x->id);
			$userTYpeX = intval($x->prio);
		}

		$sqladmn = $this->db->query("SELECT email from users WHERE admin=1");
		$sqlxx2 = $this->db->query("SELECT salutation, u_lname, u_fname from users WHERE userid='".$xxID."'");
		$emailadmn = "";$sernder = "";
		foreach ($sqladmn->result() as $xadm) {
			$emailadmn = $xadm->email;
		}
		foreach ($sqlxx2->result() as $x2) {
			$sernder = "".$x2->salutation." ".$x2->u_fname." ".$x2->u_lname."";
		}

		if($cmd == 112333){
			$keepArr = array('prio' => $this->input->get('OP'));
			$this->db->where('id', $opID);
			$this->db->update('session', $keepArr);
			return true;
		}else if($cmd == 1){
			$authorField = array(
				'completename' => $this->input->post('authorName'),
				'inscomp' => $this->input->post('insComp'),
				'contactnum' => $this->input->post('contNunbe'),
				'emailaut' => $this->input->post('autEmail'),
				'stat' => "pending",
				'memberto' => $this->input->post('usridfrAut')
			);
			$this->db->insert('coauthors', $authorField);
		}else if($cmd == 2){  // new article submitted
			$journField = array(
				'author_id' => $xxID,
				'title' => $this->input->post('titleXx'),
				'fieldarea' => $this->input->post('areaXxF'),
				'abstract' => $this->input->post('abstractXx'),
				'keywords' => $this->input->post('keywordsXx'),
				'references' => $this->input->post('references'),
				'stat' => "pending",
				'datetime' => $finalDT,
				'yearrsubmit' => date('Y'),
				'monthsubmit' => date('M')
			);
			$this->db->insert('journal', $journField);
			if($this->db->affected_rows() > 0){
				$res = $this->db->query("SELECT * from journal WHERE title='".$this->input->post('titleXx')."'");
				foreach ($res->result() as $kb) {
					$this->db->query("UPDATE coauthors set authorTo='".$kb->j_id."', stat='done' WHERE memberto='".$xxID."' AND stat='pending'");
					$this->db->query("UPDATE fileportal set attachedTo='".$kb->j_id."' WHERE ownerid='".$xxID."' AND attachedTo=''");
					break;
				}
				/******** Logs *******/
				$logFF = array(
					'log' => "submitted new article entitled: <b>".$this->input->post('titleXx')."</b>",
					'datelog' => $yy,
					'timelog' => $xx,
					'userid' => $xxID,
					'typedesfor' => 'editor'
				);
				$this->db->insert('activitylogs', $logFF);
				/******** End Logs *******/
				/******** notemessage *******/
				$logFF = array(
					'messagenote' => "A new article was submitted for review, entitled: <b>".$this->input->post('titleXx')."</b>",
					'date' => $yy,
					'time' => $xx,
					'specifynote' => 'editor'
				);
				$this->db->insert('notemessage', $logFF);
				/******** End notemessage *******/

				// Sending the administrator an email...
				$mail->addAddress($emailadmn);
				$mail->Subject = 'New article submission';
				$mail->isHTML(true);

				$mailContent = "<h4>System generated email for jESEG Administrator:</h4>
					<p style='font-size:25px;font-family:calibri;'><b>".$sernder."</b> has submitted a new article entitled: <b>".$this->input->post('titleXx')."</b><br>
						Visit and Login to jESEG with this link: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
					</p>";

				$mail->Body = $mailContent;

				if(!$mail->send()){
					
				}else{
					
				}
				// Sending the administrator an email...

				return true;
			}
			return false;
		}else if($cmd == 3){
			$fnm = $_FILES['file']['tmp_name'];
			ini_set($fnm, PHP_INT_MAX);
			$dst = "filePortal/".$_FILES['file']['name'];
			move_uploaded_file($fnm, $dst);
			$fileFields = array(
				'ownerid' => $xxID,
				'filename' => $_FILES['file']['name'],
				'path' => $dst,
			);
			$this->db->insert('fileportal', $fileFields);
		}else if($cmd == 4){
			$fileid = $this->input->get('fileid');
			$sqlFile = $this->db->query("SELECT *  FROM filePortal WHERE ownerid='$xxID' AND fileid='$fileid' LIMIT 1");
			$ffID = 0;
			foreach ($sqlFile->result() as $ffile) {
				$data = $ffile->filename;
		        $dir = "filePortal";
		        $dirHandle = opendir($dir);
		        while ($file = readdir($dirHandle)) {
		            if($file == $data) {
		                unlink($dir."/".$file);//give correct path,
		            }
		        }
		        closedir($dirHandle);
				$ffID = $ffile->fileid;
				$sql = $this->db->query("DELETE from fileportal WHERE fileid='".$ffID."'");
				return true;
			}
		}else if($cmd == 5){
			$taskField = array(
				'taskid' => $this->input->post('journalID4task'),
				'message' => $this->input->post('messageforTaskofAut'),
				'date' => $yy,
				'time' => $xx,
				'sender' => $xxID,
				'usertype' => $userTYpeX,
			);
			$this->db->insert('replytotask', $taskField);

			$sqlxx3 = $this->db->query("SELECT journal.title from tast LEFT JOIN journal ON tast.journal_id=journal.j_id WHERE tast.taskid=".$this->input->post('journalID4task')."");
			$tttleoffHJ = "";
			foreach ($sqlxx3->result() as $jj) {
				$tttleoffHJ = $jj->title;
			}

			// Sending the administrator an email...
			$mail->addAddress($emailadmn);
			$mail->Subject = 'New article submission';
			$mail->isHTML(true);

			$mailContent = "<h4>System generated email for jESEG Administrator:</h4>
				<p style='font-size:25px;font-family:calibri;'><b>".$sernder."</b> has replied to your task for an article entitle: <b>".$tttleoffHJ."</b>.<br>
					Visit and Login to jESEG with this link: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
				</p>";

			$mail->Body = $mailContent;

			if(!$mail->send()){
				
			}else{
				
			}
			// Sending the administrator an email...
		}else if($cmd == 6){
			$journBidid = $this->input->post('journIDklklxx');
			$updateFieldofInddx = array(
				'title' => $this->input->post('titleXx_mod'),
				'abstract' => $this->input->post('abstractXx_mod'),
				'keywords' => $this->input->post('keywordsXx_mod'),
				'references' => $this->input->post('ReferencesXx_mod'),
			);
			$this->db->where('j_id', $journBidid);
			$this->db->update('journal', $updateFieldofInddx);
			/******** basic user Update *******/
			$J_update = array(
				'updatemes' => "updated an Article entitled: ".$_POST['titleCptyaskjdbawxx2']."",
				'dateupdate' => $yy,
				'timeupdate' => $xx,
				'useridupdate' => $xxID,
				'jouridupdate' => $_POST['journalIdforBbse2'],
			);
			$this->db->insert('journalbasicupdate', $J_update);
			/******** End basic user Update *******/
			/******** Logs *******/
			$logFF = array(
				'log' => "updated an article entitled: <b>".$_POST['titleCptyaskjdbawxx2']."</b>",
				'datelog' => $yy,
				'timelog' => $xx,
				'userid' => $xxID,
				'typedesfor' => 'regular'
			);
			$this->db->insert('activitylogs', $logFF);
			/******** End Logs *******/
		}else if($cmd == 7){
			$dataJourn = $this->input->get('dataJourn');
			$sqlFile = $this->db->query("SELECT *  FROM filePortal WHERE ownerid='$xxID' AND attachedTo='$dataJourn' LIMIT 1");
			$ffID = 0;
			foreach ($sqlFile->result() as $ffile) {
				$data = $ffile->filename;
		        $dir = "filePortal";
		        $dirHandle = opendir($dir);
		        while ($file = readdir($dirHandle)) {
		            if($file == $data) {
		                unlink($dir."/".$file);//give correct path,
		            }
		        }
		        closedir($dirHandle);
				$ffID = $ffile->fileid;
				$sql = $this->db->query("DELETE from fileportal WHERE fileid='".$ffID."'");
				return true;
			}
		}else if($cmd == 8){
			$fnm = $_FILES['file_mod']['tmp_name'];
			ini_set($fnm, PHP_INT_MAX);
			$dst = "filePortal/".$_FILES['file_mod']['name'];
			move_uploaded_file($fnm, $dst);
			$fileFields = array(
				'attachedTo' => $_POST['journIDklklxx2forFile2'],
				'ownerid' => $xxID,
				'filename' => $_FILES['file_mod']['name'],
				'path' => $dst,
			);
			$this->db->insert('fileportal', $fileFields);
			/******** basic user Update *******/
			$J_update = array(
				'updatemes' => "updated an Article entitled: ".$_POST['titleCptyaskjdbawxx']."",
				'dateupdate' => $yy,
				'timeupdate' => $xx,
				'useridupdate' => $xxID,
				'jouridupdate' => $_POST['journalIdforBbse'],
			);
			$this->db->insert('journalbasicupdate', $J_update);
			/******** End basic user Update *******/
		}else if($cmd == 9){
			$fnm = $_FILES['file_mod2xxx']['tmp_name'];
			ini_set($fnm, PHP_INT_MAX);
			$dst = "MessageFilePortal/".$_FILES['file_mod2xxx']['name'];
			move_uploaded_file($fnm, $dst);
			$fileFields = array(
				'sendermessageid' => $xxID,
				'mesfor' => $_POST['listOFadmxxn'],
				'message' => $_POST['foxMEsARea'],
				'mesfilename' => $_FILES['file_mod2xxx']['name'],
				'mespath' => $dst,
				'mesdate' => $yy,
				'mestime' => $xx
			);
			$this->db->insert('message', $fileFields);
		}else if($cmd == 10){
			$fileFields = array(
				'sendermessageid' => $xxID,
				'mesfor' => $this->input->post('listOFadmxxn'),
				'message' => $this->input->post('foxMEsARea'),
				'mesdate' => $yy,
				'mestime' => $xx
			);
			$this->db->insert('message', $fileFields);
		}else if($cmd == 11){
			$dataImage = $this->input->post('image');
			$imagearr1 = explode(";", $dataImage);
			$imagearr2 = explode(",", $imagearr1[1]);
			$data = base64_decode($imagearr2[1]);
			$imageName = time() . '.png';
			file_put_contents("./userimage/". $imageName, $data);
			$newImageFieldFrEmp = array(
				'image' => $imageName
			);
			$this->db->where('userid', $xxID);
			$this->db->update('users', $newImageFieldFrEmp);
			/******** Logs *******/
			$logFF = array(
				'log' => "updated profile picture",
				'datelog' => $yy,
				'timelog' => $xx,
				'userid' => $xxID,
				'typedesfor' => 'regular'
			);
			$this->db->insert('activitylogs', $logFF);
			/******** End Logs *******/
			return true;
		}else if($cmd == 12){
			$confirmPasss = md5($this->input->post('confirmPasss'));
			$cc = $this->db->query("SELECT * from users WHERE password='$confirmPasss' AND userid='$xxID'");
			if($cc->num_rows() > 0){
				$newUserFieldPRiv = array(
					'visibleme' => $this->input->post('visibleme'),
					'visibleprof' => $this->input->post('visibleprof'),
					'sendnote' => $this->input->post('notesenme'),
					'artview' => $this->input->post('artview'),
					'username' => $this->input->post('usernameSetup'),
					'password' => md5($this->input->post('retypepasswordSetup')),
				);
				$this->db->where('userid', $xxID);
				$this->db->update('users', $newUserFieldPRiv);

				/******** basic user Update *******/
				$J_update = array(
					'updatemes' => "updated <b>Privacy Settings</b>",
					'dateupdate' => $yy,
					'timeupdate' => $xx,
					'useridupdate' => $xxID,
				);
				$this->db->insert('journalbasicupdate', $J_update);
				/******** End basic user Update *******/
				/******** Logs *******/
				$logFF = array(
					'log' => "updated privacy settings",
					'datelog' => $yy,
					'timelog' => $xx,
					'userid' => $xxID,
					'typedesfor' => 'regular'
				);
				$this->db->insert('activitylogs', $logFF);
				/******** End Logs *******/

				if($this->db->affected_rows() > 0){
					return true;
				}
				return false;
			}else{
				return false;
			}
		}else if($cmd == 13){
			$CSformNewFieldcncas = array(
				'visibleme' => $this->input->post('affiliationEd'),
				'visibleprof' => $this->input->post('visibleprof'),
				'sendnote' => $this->input->post('notesenme'),
				'artview' => $this->input->post('artview'),
				'username' => $this->input->post('usernameSetup'),
				'password' => md5($this->input->post('retypepasswordSetup')),
			);
			$this->db->where('userid', $xxID);
			$this->db->update('users', $CSformNewFieldcncas);
		}else if($cmd == 14){
			$suerUpdatePI = array(
				'affiliation' => $this->input->post('affiliationEd'),
				'email' => $this->input->post('emailEd'),
				'orcid_id' => $this->input->post('orcid_idEd'),
				'url' => $this->input->post('urlEd'),
				'phone' => $this->input->post('phoneEd'),
				'fax' => $this->input->post('faxEd'),
				'mailingaddrss' => $this->input->post('mailingaddrssEd'),
				'bio_state' => $this->input->post('bio_stateEd')
			);
			$brkxx = $this->input->post('identffklasPP0a1');
			if($brkxx == 1){
				$suerUpdatePI += array('country_id' => $this->input->post('RegCountryXp'));
			}
			$this->db->where('userid', $xxID);
			$this->db->update('users', $suerUpdatePI);
			/******** Logs *******/
			$logFF = array(
				'log' => "updated personal information",
				'datelog' => $yy,
				'timelog' => $xx,
				'userid' => $xxID,
				'typedesfor' => 'regular'
			);
			$this->db->insert('activitylogs', $logFF);
			/******** End Logs *******/
		}

		if($this->db->affected_rows() > 0){
			return true;
		}
		return false;
	}

	function getData($cmd){
		$onN = 0;
		//***** Date Area ******
		date_default_timezone_set('Asia/Manila');
		$xx = date('H:i:sa', time());
		$yy = date('Y-m-d', time());
		$finalDT = "".$yy." ".$xx."";
		$AMPM = date('h:ia', time());
		
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		$xxID = 0;
		foreach ($sqlxx->result() as $x) {
			$xxID = intval($x->userid);
		}

		if($cmd == 1){
			$id = $this->input->get('givenID');
			$query = $this->db->query("SELECT * FROM coauthors WHERE stat='pending' AND memberto='".$id."' ORDER BY journid DESC");
		}else if($cmd == 2){
			$register = array();
			$query = $this->db->query("SELECT * FROM fileportal WHERE ownerid='$xxID' AND attachedTo=0");
			foreach ($query->result() as $kb) {
				$register[0] = array('filename' => $kb->filename, 'fileid' => $kb->fileid);
				return $register;
			}
			$register[0] = array('filename' => null);
			return $register;
		}else if($cmd == 3){
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE journal.author_id='$xxID' AND approvedpublished=0 ORDER BY journal.j_id DESC");
			$resData = array();
			$x = 0; $y = 0;
			foreach ($query->result() as $k) {
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'titlex' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'keywords' => $k->keywords,
					'references' => $k->references,
					'fileDatax' => $this->db->query("SELECT * from fileportal WHERE attachedTo='".$k->j_id."' AND taskidref=0 ORDER BY fileid DESC LIMIT 1")->result(),
					'aut' => $this->db->query("SELECT * FROM coauthors WHERE authorTo='".$k->j_id."'")->result(),
					'datetimeSub' => $k->datetime,
					'realAuth' => "".$k->u_fname." ".$k->u_lname.""
				);
				if(!$resData[$x]['fileDatax']){
					$resData[$x]['fileDatax'][0] = array(
						'path' => "",
						'filename' => ""
					);
					$y++;
				}
				$x++;
			}
			return $resData;
		}else if($cmd == 4){
			$j_idGet = $this->input->get('dataID');
			$query = $this->db->query("SELECT * FROM tast WHERE journal_id='$j_idGet' AND approvedbyeditor=1 ORDER BY taskid DESC");
			$data[] = array();
			$i = 0;$y = 0;
			foreach($query->result() as $bx){
				$data[$i] = array(
					'taskid' => $bx->taskid,
					'journal_id' => $bx->journal_id,
					'reviewer_id' => $bx->reviewer_id,
					'mess_task' => $bx->mess_task,
					'date' => $bx->date,
					'time' => $bx->time,
					'viewed' => $bx->viewed,
					'approvedbyeditor' => $bx->approvedbyeditor,
					'fileDatax' => $this->db->query("SELECT * from fileportal WHERE taskidref='".$bx->taskid."'")->result(),
					'replies' => $this->db->query("SELECT * from replytotask WHERE taskid='".$bx->taskid."' AND sender='$xxID' OR taskid='".$bx->taskid."' AND approvedbyeditor=1")->result(),
				);
				if(!$data[$i]['fileDatax']){
					$data[$i]['fileDatax'][0] = array(
						'path' => "",
						'filename' => ""
					);
					$y++;
				}
				$i++;
			}
			if($i < 1){
				return false;
			}
			return $data;
		}else if($cmd == 5){
			$query = $this->db->query("SELECT * FROM users WHERE admin!=1 AND userid!='$xxID' AND visibleme=0 ORDER BY u_lname ASC");
		}else if($cmd == 6){
			$query = $this->db->query("SELECT image FROM users WHERE userid='$xxID' LIMIT 1");
		}else if($cmd == 7){
			$query = $this->db->query("SELECT * FROM activitylogs WHERE userid='".$xxID."' AND typedesfor='regular' ORDER BY logid DESC");
		}else if($cmd == 8){
			$usercccID = $this->input->get('usercccID');
			$query = $this->db->query("SELECT * FROM journal WHERE author_id='".$usercccID."' AND approvedpublished=1 ORDER BY j_id DESC");
			$data[] = array();
			$i = 0;
			foreach($query->result() as $bx){
				$data[$i] = array(
					'j_id' => $bx->j_id,
					'title' => $bx->title,
					'autXxx' => $this->db->query("SELECT * from coauthors WHERE authorTo='".$bx->j_id."'")->result(),
					'fileCnnc' => $this->db->query("SELECT * from fileportal WHERE attachedTo='".$bx->j_id."' ORDER BY fileid DESC LIMIT 1")->result(),
				);
				$i++;
			}
			if($i < 1){
				return false;
			}
			return $data;
		}else if($cmd == 9){
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE journal.author_id='$xxID' AND approvedpublished=1 ORDER BY journal.j_id DESC");
			$resData = array();
			$x = 0; $y = 0;
			foreach ($query->result() as $k) {
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'titlex' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'keywords' => $k->keywords,
					'references' => $k->references,
					'fileDatax' => $this->db->query("SELECT * from fileportal WHERE attachedTo='".$k->j_id."' AND taskidref=0 ORDER BY fileid DESC LIMIT 1")->result(),
					'aut' => $this->db->query("SELECT * FROM coauthors WHERE authorTo='".$k->j_id."'")->result(),
					'datetimeSub' => $k->datetime,
					'realAuth' => "".$k->u_fname." ".$k->u_lname.""
				);
				if(!$resData[$x]['fileDatax']){
					$resData[$x]['fileDatax'][0] = array(
						'path' => "",
						'filename' => ""
					);
				}
				$x++;
			}
			return $resData;
		}else if($cmd == 10){
			$query = $this->db->query("SELECT * FROM country ORDER BY country_name ASC");
		}else if($cmd == 11){
			$pp = $this->input->get('pp');
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE journal.author_id='$xxID' AND approvedpublished=0 AND journal.title LIKE '%".$pp."' OR journal.author_id='$xxID' AND approvedpublished=0 AND journal.abstract LIKE '%".$pp."' OR journal.author_id='$xxID' AND approvedpublished=0 AND journal.keywords LIKE '%".$pp."' ORDER BY journal.j_id DESC");
			$resData = array();
			$x = 0; $y = 0;
			foreach ($query->result() as $k) {
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'titlex' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'keywords' => $k->keywords,
					'references' => $k->references,
					'fileDatax' => $this->db->query("SELECT * from fileportal WHERE attachedTo='".$k->j_id."' AND taskidref=0 ORDER BY fileid DESC LIMIT 1")->result(),
					'aut' => $this->db->query("SELECT * FROM coauthors WHERE authorTo='".$k->j_id."'")->result(),
					'datetimeSub' => $k->datetime,
					'realAuth' => "".$k->u_fname." ".$k->u_lname.""
				);
				if(!$resData[$x]['fileDatax']){
					$resData[$x]['fileDatax'][0] = array(
						'path' => "",
						'filename' => ""
					);
					$y++;
				}
				$x++;
			}
			return $resData;
		}else if($cmd == 12){
			$pp = $this->input->get('pp');
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE journal.author_id='$xxID' AND approvedpublished=1 AND journal.title LIKE '%".$pp."' OR journal.author_id='$xxID' AND approvedpublished=1 AND journal.abstract LIKE '%".$pp."' OR journal.author_id='$xxID' AND approvedpublished=1 AND journal.keywords LIKE '%".$pp."' ORDER BY journal.j_id DESC");
			$resData = array();
			$x = 0; $y = 0;
			foreach ($query->result() as $k) {
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'titlex' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'keywords' => $k->keywords,
					'references' => $k->references,
					'fileDatax' => $this->db->query("SELECT * from fileportal WHERE attachedTo='".$k->j_id."' AND taskidref=0 ORDER BY fileid DESC LIMIT 1")->result(),
					'aut' => $this->db->query("SELECT * FROM coauthors WHERE authorTo='".$k->j_id."'")->result(),
					'datetimeSub' => $k->datetime,
					'realAuth' => "".$k->u_fname." ".$k->u_lname.""
				);
				if(!$resData[$x]['fileDatax']){
					$resData[$x]['fileDatax'][0] = array(
						'path' => "",
						'filename' => ""
					);
				}
				$x++;
			}
			return $resData;
		}else if($cmd == 13){
			$query = $this->db->query("SELECT * FROM notemessage WHERE specifynote='regular' AND notefor='$xxID' AND viewed=0");
			return $query->num_rows();
		}else if($cmd == 14){
			$query = $this->db->query("SELECT * FROM notemessage WHERE specifynote='regular' AND notefor='$xxID' ORDER BY nid DESC");
		}else if($cmd == 15){
			$query = $this->db->query("UPDATE notemessage SET viewed=1 WHERE notefor='$xxID' AND specifynote='regular'");
			return true;
		}

		if($query->num_rows() > 0){
			return $query->result();
		}
		return false;
	}
}