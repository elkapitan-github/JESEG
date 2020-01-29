<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EdtrCnn extends CI_Model{
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
		// End PHP Mailer

		//***** Date Area ******
		date_default_timezone_set('Asia/Manila');
		$xx = date('H:i:sa', time());
		$yy = date('Y-m-d', time());
		$finalDT = "".$yy." ".$xx."";
		$AMPM = date('h:ia', time());
		//***** Date Area ******

		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		$xxID = 0;
		foreach ($sqlxx->result() as $x) {
			$xxID = intval($x->userid);
			$opID = intval($x->id);
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
		}else if($cmd == 2){
			$mail->addAddress($this->input->post('emailhhgg'));
			$mail->Subject = 'Invitation to Review an Article';
			$mail->isHTML(true);

			$id = $this->input->post('userIDcopied');
			$vl = $this->db->query("SELECT * FROM users WHERE userid='$id'");
			$usern = '';$passw = '';
			foreach ($vl->result() as $llv) {
				$usern = md5($llv->username);
				$passw = $llv->password;
			}

			$mailContent = "<h4>System generated email:</h4>
				<p style='font-size:25px;font-family:Calibri;'>The <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>Journal for <b>Environmental Sciences and Eco-Governance</b></a> invites you to review an article entitled:<br>
					<b>".$this->input->post('ttleOloxxxx')."</b><br>
					<font style='font-size:17px;'>
						Click this link for your invitation acceptance: 
						<a href='http://jeseg.carsu.edu.ph/index.php/Strt/accptREvpr?epr=".$usern."&oopre=".$passw."&ddl=".$id."&jid=".$this->input->post('j_idCopied')."&ttle=".$this->input->post('ttleOloxxxx')."' target='__blank'>
							http://jeseg.carsu.edu.ph/invitationAcceptance
						</a> 
					</font>
				</p>";

			$mail->Body = $mailContent;

			if(!$mail->send()){
				return false;
			}else{
				$revFieldInfo = array(
					'revto' => $this->input->post('userIDcopied'),
					'journ_id' => $this->input->post('j_idCopied'),
					'dateAss' => $yy,
					'TimeAss' => $xx,
					'deaddateass' => $this->input->post('dueDate'),
					'deadtimeass' => $this->input->post('dueTime'),
					'stat' => 'pending'
				);
				$this->db->insert('revto', $revFieldInfo);
				/******** Logs *******/
				$logFF = array(
					'log' => "Assigned a reviewer to new article",
					'datelog' => $yy,
					'timelog' => $xx,
					'userid' => $xxID,
					'typedesfor' => 'editor'
				);
				$this->db->insert('activitylogs', $logFF);
				/******** End Logs *******/
				/******** Note Logs *******/
				$forNote = array(
					'notefor' => $this->input->post('userIDcopied'),
					'messagenote' => "a New article was assigned for your review",
					'date' => $yy,
					'time' => $xx,
					'specifynote' => 'reviewer'
				);
				$this->db->insert('notemessage', $forNote);
				/******** End Note Logs *******/
				return true;
			}
		}else if($cmd == 3){
			$userIDRevLsixx = $this->input->post('userIDRevLsixx');
			$journalID2xxggt = $this->input->post('journalID2xxggt');
			$deaddateass = $this->input->post('dueDatexx2');
			$deadtimeass = $this->input->post('dueTimexx2');
			$this->db->query("UPDATE revto set deaddateass='$deaddateass', deadtimeass='$deadtimeass' WHERE revto='$userIDRevLsixx' AND journ_id='$journalID2xxggt'");
			/******** Logs *******/
			$logFF = array(
				'log' => "Updated reviewer of article entitled: <b>".$this->input->post('TitleJournxxXcpoyx')."</b>",
				'datelog' => $yy,
				'timelog' => $xx,
				'userid' => $xxID,
				'typedesfor' => 'editor'
			);
			$this->db->insert('activitylogs', $logFF);
			/******** End Logs *******/
		}else if($cmd == 4){
			$mail->addAddress($this->input->get('emailofaut4444'));
			$mail->Subject = 'Article Reviews';
			$mail->isHTML(true);

			$id = $this->input->get('idofAut4444');
			$vl = $this->db->query("SELECT * FROM users WHERE userid='$id'");
			$usern = '';$passw = '';
			foreach ($vl->result() as $llv) {
				$usern = md5($llv->username);
				$passw = $llv->password;
			}

			$mailContent = "<h4>System generated email:</h4>
				<p style='font-size:25px;font-family:Calibri;'>The <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>Journal for <b>Environmental Sciences and Eco-Governance</b></a> reviewed your article entitled: <br>
					<b>".$this->input->get('titleOfflf')."</b><br>
					<font style='font-size:17px;'>
						The following are the comments created by our reviewers: 
						<div style='padding:10px;'>".$this->input->get('ttxxxxBoard')."</div>
						<a href='' target='__blank'>
							http://jeseg.carsu.edu.ph/viewTask
						</a> 
					</font>
				</p>";

			$mail->Body = $mailContent;

			if(!$mail->send()){
				return false;
			}else{
				$dataidRWtast = $this->input->get('dataidRWtast');
				$kliddfield = array('approvedbyeditor' => 1);
				$this->db->where('taskid', $dataidRWtast);
				$this->db->update('tast', $kliddfield);
				/******** Logs *******/
				$logFF = array(
					'log' => "Approved task from Reviewer",
					'datelog' => $yy,
					'timelog' => $xx,
					'userid' => $xxID,
					'typedesfor' => 'editor'
				);
				$this->db->insert('activitylogs', $logFF);
				/******** End Logs *******/
				/******** Note Logs *******/
				$LXXpid = $this->input->get('LXXpid');
				$xxPQ = $this->db->query("SELECT * FROM journal LEFT JOIN users ON journal.author_id=users.userid WHERE journal.j_id='".$LXXpid."' LIMIT 1");
				foreach ($xxPQ->result() as $klaaaP) {
					$forNote = array(
						'notefor' => $klaaaP->author_id,
						'messagenote' => "a New Task has been assigned to improve your article entitled '".$klaaaP->title."'.",
						'date' => $yy,
						'time' => $xx,
						'specifynote' => 'regular'
					);
					$this->db->insert('notemessage', $forNote);
				}
				/******** End Note Logs *******/
			}
		}else if($cmd == 5){
			$dataidRWtast = $this->input->get('idOFWORtaslxx2');
			$kliddfield = array('approvedbyeditor' => 1);
			$this->db->where('id', $dataidRWtast);
			$this->db->update('replytotask', $kliddfield);
			/******** Logs *******/
			$logFF = array(
				'log' => "Accepted task from Reviewer",
				'datelog' => $yy,
				'timelog' => $xx,
				'userid' => $xxID,
				'typedesfor' => 'editor'
			);
			$this->db->insert('activitylogs', $logFF);
			/******** End Logs *******/
		}else if($cmd == 6){
			$idJournalPPmm = $this->input->post('idJournalPPmm');
			$titLeJournalPPmm = $this->input->post('titLeJournalPPmm');
			$seleJournalPPmm = $this->input->post('seleJournalPPmm');
			$raaprDssField = array(
				'approvedpublished' => $seleJournalPPmm,
				'year' => date('Y'),
				'month' => date('M')
			);
			$this->db->where('j_id', $idJournalPPmm);
			$this->db->update('journal', $raaprDssField);
			/******** Logs *******/
			$logFF = array(
				'log' => "Approved the journal entitled: <b>".$titLeJournalPPmm."</b>",
				'datelog' => $yy,
				'timelog' => $xx,
				'userid' => $xxID,
				'typedesfor' => 'editor'
			);
			$this->db->insert('activitylogs', $logFF);
			/******** End Logs *******/
			/******** Note Logs *******/
			$xxPQ = $this->db->query("SELECT * FROM journal LEFT JOIN users ON journal.author_id=users.userid WHERE journal.j_id='".$idJournalPPmm."' LIMIT 1");
			foreach ($xxPQ->result() as $klaaaP) {
				$forNote = array(
					'notefor' => $klaaaP->author_id,
					'date' => $yy,
					'time' => $xx,
					'specifynote' => 'regular'
				);
				if($seleJournalPPmm == 1){
					$forNote += array( 'messagenote' => "Your article entitled: <b>'".$titLeJournalPPmm."'</b> has been published!" );
				}else if($seleJournalPPmm == 2){
					$forNote += array( 'messagenote' => "Your article entitled: <b>'".$titLeJournalPPmm."'</b> has been refused!" );
				}
				$this->db->insert('notemessage', $forNote);
			}
			/******** End Note Logs *******/
		}else if($cmd == 7){
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
		}else if($cmd == 8){
			$mail->addAddress($this->input->get('emailofaut4444'));
			$mail->Subject = 'Article Reviews';
			$mail->isHTML(true);

			$id = $this->input->get('idofAut4444');
			$vl = $this->db->query("SELECT * FROM users WHERE userid='$id'");
			$usern = '';$passw = '';
			foreach ($vl->result() as $llv) {
				$usern = md5($llv->username);
				$passw = $llv->password;
			}

			$mailContent = "<h4>System generated email:</h4>
				<p style='font-size:25px;font-family:Calibri;'>The <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>Journal for <b>Environmental Sciences and Eco-Governance</b></a> reviewed your article entitle: <br>
					<b>".$this->input->get('titlBBnnx')."</b><br>
					<font style='font-size:17px;'>
						The following are the comments created by our reviewers: 
						<div style='padding:10px;'>".$this->input->get('messageforTaskofAut')."</div>
						<a href='http://jeseg.carsu.edu.ph/index.php/GtReglr?epr=articles' target='__blank'>
							http://jeseg.carsu.edu.ph/viewTask
						</a> 
					</font>
				</p>";

			$mail->Body = $mailContent;

			if(!$mail->send()){
				return false;
			}else{
				$taskField = array(
					'journal_id' => $this->input->get('journalID4task'),
					'reviewer_id' => $xxID,
					'mess_task' => $this->input->get('messageforTaskofAut'),
					'date' => $yy,
					'time' => $xx,
					'privateeditormessage' => 1,
					'approvedbyeditor' => 1
				);
				$this->db->insert('tast', $taskField);
				$getID = 0;
				$qqqq = $this->db->query("SELECT taskid FROM tast WHERE reviewer_id='$xxID' ORDER BY taskid DESC LIMIT 1");
				foreach ($qqqq->result() as $xxbb) {
					$getID = $xxbb->taskid;
				}
				$this->db->query("UPDATE fileportal set taskidref='".intval($getID)."', attachedTo='".$this->input->get('journalID4task')."' WHERE taskidref=0 AND ownerid='$xxID'");
				/******** Logs *******/
				$logFF = array(
					'log' => "Assigned a new Task for an author review",
					'datelog' => $yy,
					'timelog' => $xx,
					'userid' => $xxID,
					'typedesfor' => 'editor'
				);
				$this->db->insert('activitylogs', $logFF);
				/******** End Logs *******/
				/******** Note Logs *******/
				$forNote = array(
					'notefor' => $this->input->get('idofAuthorPPOx'),
					'messagenote' => "a New article was assigned for your review",
					'date' => $yy,
					'time' => $xx,
					'specifynote' => 'author'
				);
				$this->db->insert('notemessage', $forNote);
				/******** End Note Logs *******/
				return true;
			}
		}else if($cmd == 9){
			$this->db->query("UPDATE activitylogs set seenadmin=1 WHERE 1");
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
			$opID = intval($x->id);
		}

		if($cmd == 1){
			$id = $this->input->get('givenID');
			$query = $this->db->query("SELECT * FROM coauthors WHERE stat='pending' AND memberto='".$id."' ORDER BY journid DESC");
		}else if($cmd == 2){
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.admin!=1 ORDER BY users.userid DESC");
		}else if($cmd == 3){
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 ORDER BY users.userid DESC");
		}else if($cmd == 4){
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE journal.approvedpublished=0 ORDER BY journal.j_id DESC");
			$resData = array();
			$x = 0;
			foreach ($query->result() as $k) {
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'title' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'email' => $k->email,
					'keywords' => $k->keywords,
					'yearrsubmit' => $k->yearrsubmit,
					'monthsubmit' => $k->monthsubmit,
					'aut' => $this->db->query("SELECT * FROM coauthors WHERE authorTo='".$k->j_id."'")->result(),
					'datetimeSub' => $k->datetime,
					'fileDatax' => $this->db->query("SELECT * from fileportal WHERE attachedTo='".$k->j_id."' AND taskidref=0 ORDER BY fileid DESC LIMIT 1")->result(),
					'realAuth' => "".$k->u_fname." ".$k->u_lname.""
				);
				if(!$resData[$x]['fileDatax']){
					$resData[$x]['fileDatax'][0] = array(
						'attachedTo' => "",
						'fileid' => "",
						'filename' => "",
						'ownerid' => "",
						'path' => "",
						'taskidref' => ""
					);
				}
				$x++;
			}
			return $resData;
		}else if($cmd == 5){
			$authrIDpls = $this->input->get('authrIDpls');
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE users.statacc='accepted' AND users.userid!='$authrIDpls' AND users.userid!='$xxID' AND users.reviewer=1 ORDER BY users.userid DESC");
			$data = array(); 
			$i = 0;
			foreach($query->result() as $bx){
				$xxPtrace = $this->db->query("SELECT * from revto WHERE revto='".$bx->userid."' AND journ_id='".$this->input->get("idpw")."'");
				if($xxPtrace->num_rows() == 0){
					$data[$i] = array(
						'userid' => $bx->userid,
						'u_lname' => $bx->u_lname,
						'u_fname' => $bx->u_fname,
						'u_mname' => $bx->u_mname,
						'salutation' => $bx->salutation,
						'u_gender' => $bx->u_gender,
						'affiliation' => $bx->affiliation,
						'bio_state' => $bx->bio_state,
						'country_name' => $bx->country_name,
						'email' => $bx->email,
						'orcid_id' => $bx->orcid_id,
						'url' => $bx->url,
						'phone' => $bx->phone,
						'fax' => $bx->fax,
						'mailingaddrss' => $bx->mailingaddrss,
					);
					$i++;
				}
			}
			if($i < 1){
				$data[$i] = array(
					'userid' => "null",
					'u_lname' => "null",
					'u_fname' => "null",
					'u_mname' => "null"
				);
			}
			return $data;
		}else if($cmd == 6){
			$idArt = $this->input->get('artID');
			$query = $this->db->query("SELECT * FROM revto LEFT JOIN users ON users.userid=revto.revto LEFT JOIN country ON users.country_id=country.countryid WHERE revto.journ_id='$idArt' ORDER BY users.userid DESC");
		}else if($cmd == 7){
			$j_idGet = $this->input->get('idData');
			$query = $this->db->query("SELECT * FROM tast LEFT JOIN users ON tast.reviewer_id=users.userid WHERE tast.journal_id='".$j_idGet."' ORDER BY tast.taskid DESC");
			$data = array();
			$i = 0;
			foreach($query->result() as $bx){
				$data[$i] = array(
					'taskid' => $bx->taskid,
					'journal_id' => $bx->journal_id,
					'reviewer_id' => $bx->reviewer_id,
					'mess_task' => $bx->mess_task,
					'date' => $bx->date,
					'fullNameRev' => "".$bx->u_fname." ".$bx->u_mname." ".$bx->u_lname."",
					'time' => $bx->time,
					'viewed' => $bx->viewed,
					'approvedbyeditor' => $bx->approvedbyeditor,
					'fileDatax' => $this->db->query("SELECT * from fileportal WHERE taskidref='".$bx->taskid."'")->result(),
					'replies' => $this->db->query("SELECT * from replytotask LEFT JOIN users ON replytotask.sender=users.userid WHERE taskid='".$bx->taskid."'")->result(),
				);
				if(!$data[$i]['fileDatax']){
					$data[$i]['fileDatax'][0] = array(
						'path' => "",
						'filename' => ""
					);
				}
				$i++;
			}
			if($i < 1){
				return false;
			}
			return $data;
		}else if($cmd == 8){
			$authrIDpls = $this->input->post('idofAuth');
			$searchRevAll = $this->input->post('searchRevAll');
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE
				 users.statacc='accepted' AND users.userid!='$authrIDpls' AND users.userid!='$xxID' AND users.reviewer=1 AND users.u_lname LIKE '%".strtoupper($searchRevAll)."%' OR 
				 users.statacc='accepted' AND users.userid!='$authrIDpls' AND users.userid!='$xxID' AND users.reviewer=1 AND users.u_fname LIKE '%".strtoupper($searchRevAll)."%' OR 
				 users.statacc='accepted' AND users.userid!='$authrIDpls' AND users.userid!='$xxID' AND users.reviewer=1 AND users.u_mname LIKE '%".strtoupper($searchRevAll)."%' OR 
				 users.statacc='accepted' AND users.userid!='$authrIDpls' AND users.userid!='$xxID' AND users.reviewer=1 AND users.u_gender LIKE '%".$searchRevAll."%' OR 
				 users.statacc='accepted' AND users.userid!='$authrIDpls' AND users.userid!='$xxID' AND users.reviewer=1 AND users.affiliation LIKE '%".$searchRevAll."%' OR 
				 users.statacc='accepted' AND users.userid!='$authrIDpls' AND users.userid!='$xxID' AND users.reviewer=1 AND users.email LIKE '%".$searchRevAll."%' OR 
				 users.statacc='accepted' AND users.userid!='$authrIDpls' AND users.userid!='$xxID' AND users.reviewer=1 AND users.orcid_id LIKE '%".$searchRevAll."%' OR 
				 users.statacc='accepted' AND users.userid!='$authrIDpls' AND users.userid!='$xxID' AND users.reviewer=1 AND users.url LIKE '%".$searchRevAll."%' OR 
				 users.statacc='accepted' AND users.userid!='$authrIDpls' AND users.userid!='$xxID' AND users.reviewer=1 AND users.phone LIKE '%".$searchRevAll."%' OR 
				 users.statacc='accepted' AND users.userid!='$authrIDpls' AND users.userid!='$xxID' AND users.reviewer=1 AND users.fax LIKE '%".$searchRevAll."%' OR 
				 users.statacc='accepted' AND users.userid!='$authrIDpls' AND users.userid!='$xxID' AND users.reviewer=1 AND users.mailingaddrss LIKE '%".$searchRevAll."%' OR 
				 users.statacc='accepted' AND users.userid!='$authrIDpls' AND users.userid!='$xxID' AND users.reviewer=1 AND country.country_name LIKE '%".$searchRevAll."%' OR 
				 users.statacc='accepted' AND users.userid!='$authrIDpls' AND users.userid!='$xxID' AND users.reviewer=1 AND users.bio_state LIKE '%".$searchRevAll."%' 
				 ORDER BY users.userid DESC");
			$data = array(); 
			$i = 0;
			foreach($query->result() as $bx){
				$xxPtrace = $this->db->query("SELECT * from revto LEFT JOIN journal ON revto.journ_id=journal.j_id WHERE revto.revto='".$bx->userid."' AND revto.journ_id='".$this->input->post("idofJournx")."'");
				if($xxPtrace->num_rows() == 0){
					$data[$i] = array(
						'userid' => $bx->userid,
						'u_lname' => $bx->u_lname,
						'u_fname' => $bx->u_fname,
						'u_mname' => $bx->u_mname,
						'salutation' => $bx->salutation,
						'u_gender' => $bx->u_gender,
						'affiliation' => $bx->affiliation,
						'bio_state' => $bx->bio_state,
						'country_name' => $bx->country_name,
						'title' => $bx->title,
						'email' => $bx->email,
						'orcid_id' => $bx->orcid_id,
						'url' => $bx->url,
						'phone' => $bx->phone,
						'fax' => $bx->fax,
						'mailingaddrss' => $bx->mailingaddrss,
					);
					$i++;
				}
			}
			if($i < 1){
				$data[$i] = array(
					'userid' => "null",
					'u_lname' => "null",
					'u_fname' => "null",
					'u_mname' => "null"
				);
			}
			return $data;
		}else if($cmd == 9){
			$query = $this->db->query("SELECT * FROM announcement ORDER BY annid DESC");
		}else if($cmd == 10){
			$query = $this->db->query("SELECT * FROM activitylogs WHERE userid='".$xxID."' AND typedesfor='editor' ORDER BY logid DESC");
		}else if($cmd == 11){
			$dataFetch = $this->input->get('dataFetch');
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE 
				users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.admin!=1 AND users.u_fname LIKE '%".$dataFetch."%'
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.admin!=1 AND users.u_mname LIKE '%".$dataFetch."%' 
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.admin!=1 AND users.u_lname LIKE '%".$dataFetch."%'
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.admin!=1 AND users.u_gender LIKE '%".$dataFetch."%'
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.admin!=1 AND users.affiliation LIKE '%".$dataFetch."%'
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.admin!=1 AND users.email LIKE '%".$dataFetch."%'
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.admin!=1 AND users.orcid_id LIKE '%".$dataFetch."%'
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.admin!=1 AND country.country_name LIKE '%".$dataFetch."%'
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.admin!=1 AND users.bio_state LIKE '%".$dataFetch."%'
				ORDER BY users.userid DESC");
		}else if($cmd == 12){
			$dataFetch = $this->input->get('dataFetch');
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE 
				users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.u_mname LIKE '%".$dataFetch."%'
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.u_lname LIKE '%".$dataFetch."%'
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.u_mname LIKE '%".$dataFetch."%'
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.u_gender LIKE '%".$dataFetch."%'
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.affiliation LIKE '%".$dataFetch."%'
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.email LIKE '%".$dataFetch."%'
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.orcid_id LIKE '%".$dataFetch."%'
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND country.country_name LIKE '%".$dataFetch."%'
				OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.bio_state LIKE '%".$dataFetch."%'
				ORDER BY users.userid DESC");
		}else if($cmd == 13){
			$dataopSee = $this->input->get('dataopSee');
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id 
				WHERE journal.approvedpublished=0 AND journal.title LIKE '%".$dataopSee."%' OR 
				journal.approvedpublished=0 AND journal.abstract LIKE '%".$dataopSee."%' OR
				journal.approvedpublished=0 AND journal.keywords LIKE '%".$dataopSee."%'
				ORDER BY journal.j_id DESC");
			$resData = array();
			$x = 0;
			foreach ($query->result() as $k) {
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'title' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'keywords' => $k->keywords,
					'email' => $k->email,
					'yearrsubmit' => $k->yearrsubmit,
					'monthsubmit' => $k->monthsubmit,
					'aut' => $this->db->query("SELECT * FROM coauthors WHERE authorTo='".$k->j_id."'")->result(),
					'datetimeSub' => $k->datetime,
					'fileDatax' => $this->db->query("SELECT * from fileportal WHERE attachedTo='".$k->j_id."' AND taskidref=0 ORDER BY fileid DESC LIMIT 1")->result(),
					'realAuth' => "".$k->u_fname." ".$k->u_lname.""
				);
				if(!$resData[$x]['fileDatax']){
					$resData[$x]['fileDatax'][0] = array(
						'attachedTo' => "",
						'fileid' => "",
						'filename' => "",
						'ownerid' => "",
						'path' => "",
						'taskidref' => ""
					);
				}
				$x++;
			}
			return $resData;
		}else if($cmd == 14){
			$dataopSee = $this->input->get('dataopSee');
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id 
				WHERE journal.approvedpublished=1 AND journal.title LIKE '%".$dataopSee."%' OR 
				journal.approvedpublished=1 AND journal.abstract LIKE '%".$dataopSee."%' OR
				journal.approvedpublished=1 AND journal.keywords LIKE '%".$dataopSee."%'
				ORDER BY journal.j_id DESC");
			$resData = array();
			$x = 0;
			foreach ($query->result() as $k) {
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'title' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'keywords' => $k->keywords,
					'email' => $k->email,
					'yearrsubmit' => $k->yearrsubmit,
					'monthsubmit' => $k->monthsubmit,
					'aut' => $this->db->query("SELECT * FROM coauthors WHERE authorTo='".$k->j_id."'")->result(),
					'datetimeSub' => $k->datetime,
					'fileDatax' => $this->db->query("SELECT * from fileportal WHERE attachedTo='".$k->j_id."' AND taskidref=0 ORDER BY fileid DESC LIMIT 1")->result(),
					'realAuth' => "".$k->u_fname." ".$k->u_lname.""
				);
				if(!$resData[$x]['fileDatax']){
					$resData[$x]['fileDatax'][0] = array(
						'attachedTo' => "",
						'fileid' => "",
						'filename' => "",
						'ownerid' => "",
						'path' => "",
						'taskidref' => ""
					);
				}
				$x++;
			}
			return $resData;
		}else if($cmd == 15){
			$dataopSee = $this->input->get('dataopSee');
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id 
				WHERE journal.approvedpublished=2 AND journal.title LIKE '%".$dataopSee."%' OR 
				journal.approvedpublished=2 AND journal.abstract LIKE '%".$dataopSee."%' OR
				journal.approvedpublished=2 AND journal.keywords LIKE '%".$dataopSee."%'
				ORDER BY journal.j_id DESC");
			$resData = array();
			$x = 0;
			foreach ($query->result() as $k) {
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'title' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'email' => $k->email,
					'keywords' => $k->keywords,
					'yearrsubmit' => $k->yearrsubmit,
					'monthsubmit' => $k->monthsubmit,
					'aut' => $this->db->query("SELECT * FROM coauthors WHERE authorTo='".$k->j_id."'")->result(),
					'datetimeSub' => $k->datetime,
					'fileDatax' => $this->db->query("SELECT * from fileportal WHERE attachedTo='".$k->j_id."' AND taskidref=0 ORDER BY fileid DESC LIMIT 1")->result(),
					'realAuth' => "".$k->u_fname." ".$k->u_lname.""
				);
				if(!$resData[$x]['fileDatax']){
					$resData[$x]['fileDatax'][0] = array(
						'attachedTo' => "",
						'fileid' => "",
						'filename' => "",
						'ownerid' => "",
						'path' => "",
						'taskidref' => ""
					);
				}
				$x++;
			}
			return $resData;
		}else if($cmd == 16){
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE journal.approvedpublished=1 ORDER BY journal.j_id DESC");
			$resData = array();
			$x = 0;
			foreach ($query->result() as $k) {
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'title' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'keywords' => $k->keywords,
					'yearrsubmit' => $k->yearrsubmit,
					'monthsubmit' => $k->monthsubmit,
					'aut' => $this->db->query("SELECT * FROM coauthors WHERE authorTo='".$k->j_id."'")->result(),
					'datetimeSub' => $k->datetime,
					'fileDatax' => $this->db->query("SELECT * from fileportal WHERE attachedTo='".$k->j_id."' AND taskidref=0 ORDER BY fileid DESC LIMIT 1")->result(),
					'realAuth' => "".$k->u_fname." ".$k->u_lname.""
				);
				if(!$resData[$x]['fileDatax']){
					$resData[$x]['fileDatax'][0] = array(
						'attachedTo' => "",
						'fileid' => "",
						'filename' => "",
						'ownerid' => "",
						'path' => "",
						'taskidref' => ""
					);
				}
				$x++;
			}
			return $resData;
		}else if($cmd == 17){
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE journal.approvedpublished=2 ORDER BY journal.j_id DESC");
			$resData = array();
			$x = 0;
			foreach ($query->result() as $k) {
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'title' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'keywords' => $k->keywords,
					'yearrsubmit' => $k->yearrsubmit,
					'monthsubmit' => $k->monthsubmit,
					'aut' => $this->db->query("SELECT * FROM coauthors WHERE authorTo='".$k->j_id."'")->result(),
					'datetimeSub' => $k->datetime,
					'fileDatax' => $this->db->query("SELECT * from fileportal WHERE attachedTo='".$k->j_id."' AND taskidref=0 ORDER BY fileid DESC LIMIT 1")->result(),
					'realAuth' => "".$k->u_fname." ".$k->u_lname.""
				);
				if(!$resData[$x]['fileDatax']){
					$resData[$x]['fileDatax'][0] = array(
						'attachedTo' => "",
						'fileid' => "",
						'filename' => "",
						'ownerid' => "",
						'path' => "",
						'taskidref' => ""
					);
				}
				$x++;
			}
			return $resData;
		}else if($cmd == 18){
			$query = $this->db->query("SELECT * FROM activitylogs WHERE seenadmin=0 AND typedesfor='editor'");
			return $query->num_rows();
		}else if($cmd == 19){
			$query = $this->db->query("SELECT * FROM activitylogs WHERE seenadmin=1 AND typedesfor='editor' ORDER BY logid DESC");
		}else if($cmd == 20){
			$query = $this->db->query("UPDATE notemessage SET viewed=1 WHERE notefor='$xxID' AND specifynote='editor'");
			return true;
		}else if($cmd == 21){
			$j_idGet = $this->input->get('idData');
			$query = $this->db->query("SELECT * FROM tast LEFT JOIN users ON tast.reviewer_id=users.userid WHERE tast.reviewer_id='$xxID' AND tast.journal_id='$j_idGet' ORDER BY tast.taskid DESC");
			$data = array();
			$i = 0;
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
				}
				$i++;
			}
			if($i < 1){
				return false;
			}
			return $data;
		}else if($cmd == 22){
			$query = $this->db->query("SELECT * FROM fileportal WHERE ownerid='$xxID' AND taskidref=0 ORDER BY fileid DESC LIMIT 1");
		}

		if($query->num_rows() > 0){
			return $query->result();
		}
		return false;
	}
}