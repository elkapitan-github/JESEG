<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ReviewrCnn extends CI_Model{
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
			/******** Sending Mail to administrator *******/
			$sqladmn = $this->db->query("SELECT email from users WHERE admin=1");
			$sqlxx2 = $this->db->query("SELECT u_fname, u_mname, u_lname from users WHERE userid='".$xxID."'");
			$emailadmn = "";$sernder = "";
			foreach ($sqladmn->result() as $xadm) {
				$emailadmn = $xadm->email;
			}
			foreach ($sqlxx2->result() as $x2) {
				$sernder = " ".$x2->u_fname." ".$x2->u_mname." ".$x2->u_lname." ";
			}

			$mail->addAddress($emailadmn);
			$mail->Subject = 'Invitation for Review was accepted';
			$mail->isHTML(true);

			$mailContent = "<h4>System generated email for jESEG Administrator:</h4>
				<p style='font-size:25px;font-family:calibri;'><b>".$sernder."</b> ".$this->input->post('controlRepnseArt')." your invite as Reviewer of an Article entitled: <b>".$this->input->post('titleOfthisJourn')."</b><br>
					To view this details, Visit and Login to jESEG @: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
				</p>";

			$mail->Body = $mailContent;

			if(!$mail->send()){
				return false;
			}else{
				// Sending Mail to author...
				$j_idx = $this->input->post('idofArticleXx');
				$autEm = $this->db->query("SELECT users.email, users.userid FROM journal LEFT JOIN users ON journal.author_id=users.userid WHERE journal.j_id='".$j_idx."'");
				$getautEm = "";$resIDcpp = 0;
				foreach ($autEm->result() as $vv) {
					$getautEm = $vv->email;
					$resIDcpp = $vv->userid;
				}

				$mail->addAddress($getautEm);
				$mail->Subject = 'Article Update';
				$mail->isHTML(true);

				$mailContent = "<h4>System generated email:</h4>
					<p style='font-size:25px;font-family:calibri;'>One of the <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>Journal for <b>Environmental Sciences and Eco-Governance</b></a> REVIEWER are now reading and reviewing your article entitled: <br>
						<b>".$this->input->post('titleOfthisJourn')."</b>. Constant updates will be made with our journal system and via email.<br>
						To view this details, Visit and Login to jESEG @: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
					</p>";

				$mail->Body = $mailContent;
				// End Sending Mail to author...
				if(!$mail->send()){
					return false;
				}else{
					$idAr = $this->input->post('idofArticleXx');
					$this->db->query("UPDATE revto set stat='".$this->input->post('controlRepnseArt')."', dateaccepted='$yy', timeaccepted='$xx' WHERE journ_id='$idAr' AND revto='$xxID'");
					/******** Logs *******/
					$logFF = array(
						'log' => "<b>".$this->input->post('controlRepnseArt')."</b> an article for review, entitled: ".$this->input->post('titleOfthisJourn')."",
						'datelog' => $yy,
						'timelog' => $xx,
						'userid' => $xxID,
						'typedesfor' => 'reviewer'
					);
					$this->db->insert('activitylogs', $logFF);
					/******** End Logs *******/
					/******** Logs Reviewer *******/
					$logFF = array(
						'journal_idlog' => $j_idx,
						'logrev' => "Your article entitled: ".$this->input->post('titleOfthisJourn')." is now under review. Constant updates will be made with this journal system and via email.",
						'date' => $yy,
						'time' => $xx,
						'userid' => $resIDcpp,
					);
					$this->db->insert('reviewerlog', $logFF);
					/******** End Logs Reviewer *******/
				}
			}
			/******** End Sending Mail to administrator *******/
		}else if($cmd == 3){
			$idRowofFile = $this->input->get('cpyRowIDofNEWFLLE');
			$taskField = array(
				'journal_id' => $this->input->get('journalID4task'),
				'reviewer_id' => $xxID,
				'mess_task' => $this->input->get('messageforTaskofAut'),
				'date' => $yy,
				'time' => $xx
			);
			$this->db->insert('tast', $taskField);
			$getID = 0;
			$qqqq = $this->db->query("SELECT taskid FROM tast WHERE reviewer_id='$xxID' ORDER BY taskid DESC LIMIT 1");
			foreach ($qqqq->result() as $xxbb) {
				$getID = $xxbb->taskid;
			}
			$this->db->query("UPDATE fileportal set taskidref='".$getID."', attachedTo='".$this->input->get('journalID4task')."' WHERE fileid='".$idRowofFile."'");
			/******** Logs *******/
			$logFF = array(
				'log' => "Assigned a new Task for an author review",
				'datelog' => $yy,
				'timelog' => $xx,
				'userid' => $xxID,
				'typedesfor' => 'reviewer'
			);
			$this->db->insert('activitylogs', $logFF);
			/******** End Logs *******/


			$sqladmn = $this->db->query("SELECT email from users WHERE admin=1");
			$sqlxx2 = $this->db->query("SELECT u_fname, u_mname, u_lname from users WHERE userid='".$xxID."'");
			$sqltitle = $this->db->query("SELECT title from journal WHERE j_id=".$this->input->get('journalID4task')."");
			$emailadmn = "";$sernder = "";$titlexx = "";
			foreach ($sqladmn->result() as $xadm) {
				$emailadmn = $xadm->email;
			}
			foreach ($sqlxx2->result() as $x2) {
				$sernder = " ".$x2->u_fname." ".$x2->u_mname." ".$x2->u_lname." ";
			}
			foreach ($sqltitle->result() as $x3) {
				$titlexx = $x3->title;
			}

			/******** Sending Mail to administrator *******/
			$mail->addAddress($emailadmn);
			$mail->Subject = 'Reviewer set a New Task';
			$mail->isHTML(true);

			$mailContent = "<h4>System generated email for jESEG Administrator:</h4>
				<p style='font-size:25px;font-family:calibri;'><b>".$sernder."</b> reviewed an Article and set task for its reviewer. The task needs an administrator approval to be viewed by the researcher of an article entitled: <b>".$titlexx."</b><br>
					To view this details, Visit and Login to jESEG @: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
				</p>";

			$mail->Body = $mailContent;

			if(!$mail->send()){
				
			}else{
				
			}
			/******** End Sending Mail to administrator *******/

			return true;
		}else if($cmd == 4){
			$taskField = array(
				'taskid' => $this->input->post('journalID4task2'),
				'message' => $this->input->post('messageforTaskofAut2'),
				'date' => $yy,
				'time' => $xx,
				'sender' => $xxID,
				'usertype' => $userTYpeX,
			);
			$this->db->insert('replytotask', $taskField);
			/******** Logs *******/
			$logFF = array(
				'log' => "Set a new reply for an article's author task",
				'datelog' => $yy,
				'timelog' => $xx,
				'userid' => $xxID,
				'typedesfor' => 'reviewer'
			);
			$this->db->insert('activitylogs', $logFF);
			/******** End Logs *******/

			$sqladmn = $this->db->query("SELECT email from users WHERE admin=1");
			$sqlxx2 = $this->db->query("SELECT u_fname, u_mname, u_lname from users WHERE userid='".$xxID."'");
			$sqltitle = $this->db->query("SELECT title from journal WHERE j_id=".$this->input->post('journalID4task2')."");
			$emailadmn = "";$sernder = "";$titlexx = "";
			foreach ($sqladmn->result() as $xadm) {
				$emailadmn = $xadm->email;
			}
			foreach ($sqlxx2->result() as $x2) {
				$sernder = " ".$x2->u_fname." ".$x2->u_mname." ".$x2->u_lname." ";
			}
			foreach ($sqltitle->result() as $x3) {
				$titlexx = $x3->title;
			}


			/******** Sending Mail to administrator *******/
			$mail->addAddress($emailadmn);
			$mail->Subject = 'Reviewer set a New Task';
			$mail->isHTML(true);

			$mailContent = "<h4>System generated email for jESEG Administrator:</h4>
				<p style='font-size:25px;font-family:calibri;'><b>".$sernder."</b> reviewed an Article and set task for its reviewer. The task needs an administrator approval to be viewed by the researcher of an article entitled: <b>".$titlexx."</b><br>
					To view this details, Visit and Login to jESEG @: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
				</p>";

			$mail->Body = $mailContent;

			if(!$mail->send()){
				return false;
			}else{
				return true;
			}
			/******** End Sending Mail to administrator *******/
		}else if($cmd == 5){
			$jkllidjhourna = $this->input->get('dataIDxxD');
			$this->db->query("UPDATE revto set finalapproval = 1, dateapp = '$yy', timeapp = '$xx' WHERE journ_id='$jkllidjhourna' AND revto='$xxID'");
			/******** Logs *******/
			$logFF = array(
				'log' => "reviewed an article entitled: ".$this->input->get('titleCklasP')." and vindicated it as 'Accept As It Is'",
				'datelog' => $yy,
				'timelog' => $xx,
				'userid' => $xxID,
				'typedesfor' => 'reviewer'
			);
			$this->db->insert('activitylogs', $logFF);
			/******** End Logs *******/

			/******** Sending Mail to administrator *******/
			$sqladmn = $this->db->query("SELECT email from users WHERE admin=1");
			$sqlxx2 = $this->db->query("SELECT u_fname, u_mname, u_lname from users WHERE userid='".$xxID."'");
			$emailadmn = "";$sernder = "";
			foreach ($sqladmn->result() as $xadm) {
				$emailadmn = $xadm->email;
			}
			foreach ($sqlxx2->result() as $x2) {
				$sernder = " ".$x2->u_fname." ".$x2->u_mname." ".$x2->u_lname." ";
			}

			/******** Sending Mail to administrator *******/
			$mail->addAddress($emailadmn);
			$mail->Subject = "Reviewer's vindication";
			$mail->isHTML(true);

			$mailContent = "<h4>System generated email for jESEG Administrator:</h4>
				<p style='font-size:25px;font-family:calibri;'><b>".$sernder."</b> reviewed an Article entitled: <b>".$this->input->post('titleOfthisJourn')."</b> and vindicated it as 'Accept As It Is'<br>
					To view this details, Visit and Login to jESEG @: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
				</p>";

			$mail->Body = $mailContent;

			if(!$mail->send()){
				
			}else{
				
			}
			/******** End Sending Mail to administrator *******/
		}else if($cmd == 6){
			$fnm = $_FILES['file']['tmp_name'];
			ini_set($fnm, MAX);
			$dst = "filePortal/".$_FILES['file']['name'];
			move_uploaded_file($fnm, $dst);
			$fileFields = array(
				'ownerid' => $xxID,
				'filename' => $_FILES['file']['name'],
				'path' => $dst,
			);
			$this->db->insert('fileportal', $fileFields);
		}else if($cmd == 7){
			$jkllidjhourna = $this->input->get('dataIDxxD');
			$this->db->query("UPDATE revto set finalapproval = 2, dateapp = '$yy', timeapp = '$xx' WHERE journ_id='$jkllidjhourna' AND revto='$xxID'");
			/******** Logs *******/
			$logFF = array(
				'log' => "reviewed an article entitled: ".$this->input->get('titleCklasP')." and vindicated it as 'Accept with Minor Revision'",
				'datelog' => $yy,
				'timelog' => $xx,
				'userid' => $xxID,
				'typedesfor' => 'reviewer'
			);
			$this->db->insert('activitylogs', $logFF);
			/******** End Logs *******/

			/******** Sending Mail to administrator *******/
			$sqladmn = $this->db->query("SELECT email from users WHERE admin=1");
			$sqlxx2 = $this->db->query("SELECT u_fname, u_mname, u_lname from users WHERE userid='".$xxID."'");
			$emailadmn = "";$sernder = "";
			foreach ($sqladmn->result() as $xadm) {
				$emailadmn = $xadm->email;
			}
			foreach ($sqlxx2->result() as $x2) {
				$sernder = " ".$x2->u_fname." ".$x2->u_mname." ".$x2->u_lname." ";
			}

			$this->load->library('phpmailer_lib');

			$mail = $this->phpmailer_lib->load();

			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'csujeseg@gmail.com';
			$mail->Password = 'jesegadministrator';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;

			$mail->setFrom('csujeseg@gmail.com', 'jESEG');
			$mail->addReplyTo('csujeseg@gmail.com', 'jESEG');

			$mail->addAddress($emailadmn);
			$mail->Subject = "Reviewer's vindication";
			$mail->isHTML(true);

			$mailContent = "<h4>System generated email for jESEG Administrator:</h4>
				<p style='font-size:25px;font-family:calibri;'><b>".$sernder."</b> reviewed an Article entitled: <b>".$this->input->post('titleOfthisJourn')."</b> and vindicated it as 'Accept with Minor Revision'<br>
					To view this details, Visit and Login to jESEG @: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
				</p>";

			$mail->Body = $mailContent;

			if(!$mail->send()){
				
			}else{
				
			}
			/******** End Sending Mail to administrator *******/
		}else if($cmd == 8){
			$jkllidjhourna = $this->input->get('dataIDxxD');
			$this->db->query("UPDATE revto set finalapproval = 3, dateapp = '$yy', timeapp = '$xx' WHERE journ_id='$jkllidjhourna' AND revto='$xxID'");
			/******** Logs *******/
			$logFF = array(
				'log' => "reviewed an article entitled: ".$this->input->get('titleCklasP')." and vindicated it as 'Accept with Major Revision'",
				'datelog' => $yy,
				'timelog' => $xx,
				'userid' => $xxID,
				'typedesfor' => 'reviewer'
			);
			$this->db->insert('activitylogs', $logFF);
			/******** End Logs *******/

			/******** Sending Mail to administrator *******/
			$sqladmn = $this->db->query("SELECT email from users WHERE admin=1");
			$sqlxx2 = $this->db->query("SELECT u_fname, u_mname, u_lname from users WHERE userid='".$xxID."'");
			$emailadmn = "";$sernder = "";
			foreach ($sqladmn->result() as $xadm) {
				$emailadmn = $xadm->email;
			}
			foreach ($sqlxx2->result() as $x2) {
				$sernder = " ".$x2->u_fname." ".$x2->u_mname." ".$x2->u_lname." ";
			}

			$this->load->library('phpmailer_lib');

			$mail = $this->phpmailer_lib->load();

			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'csujeseg@gmail.com';
			$mail->Password = 'jesegadministrator';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;

			$mail->setFrom('csujeseg@gmail.com', 'jESEG');
			$mail->addReplyTo('csujeseg@gmail.com', 'jESEG');

			$mail->addAddress($emailadmn);
			$mail->Subject = "Reviewer's vindication";
			$mail->isHTML(true);

			$mailContent = "<h4>System generated email for jESEG Administrator:</h4>
				<p style='font-size:25px;font-family:calibri;'><b>".$sernder."</b> reviewed an Article entitled: <b>".$this->input->post('titleOfthisJourn')."</b> and vindicated it as 'Accept with Major Revision'<br>
					To view this details, Visit and Login to jESEG @: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
				</p>";

			$mail->Body = $mailContent;

			if(!$mail->send()){
				
			}else{
				
			}
			/******** End Sending Mail to administrator *******/
		}else if($cmd == 9){
			$jkllidjhourna = $this->input->get('dataIDxxD');
			$this->db->query("UPDATE revto set finalapproval = 4, dateapp = '$yy', timeapp = '$xx' WHERE journ_id='$jkllidjhourna' AND revto='$xxID'");
			/******** Logs *******/
			$logFF = array(
				'log' => "reviewed an article entitled: ".$this->input->get('titleCklasP')." and vindicated it as 'Rejected'",
				'datelog' => $yy,
				'timelog' => $xx,
				'userid' => $xxID,
				'typedesfor' => 'reviewer'
			);
			$this->db->insert('activitylogs', $logFF);
			/******** End Logs *******/

			/******** Sending Mail to administrator *******/
			$sqladmn = $this->db->query("SELECT email from users WHERE admin=1");
			$sqlxx2 = $this->db->query("SELECT u_fname, u_mname, u_lname from users WHERE userid='".$xxID."'");
			$emailadmn = "";$sernder = "";
			foreach ($sqladmn->result() as $xadm) {
				$emailadmn = $xadm->email;
			}
			foreach ($sqlxx2->result() as $x2) {
				$sernder = " ".$x2->u_fname." ".$x2->u_mname." ".$x2->u_lname." ";
			}

			$this->load->library('phpmailer_lib');

			$mail = $this->phpmailer_lib->load();

			$mail->isSMTP();
			$mail->Host = 'smtp.gmail.com';
			$mail->SMTPAuth = true;
			$mail->Username = 'csujeseg@gmail.com';
			$mail->Password = 'jesegadministrator';
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;

			$mail->setFrom('csujeseg@gmail.com', 'jESEG');
			$mail->addReplyTo('csujeseg@gmail.com', 'jESEG');

			$mail->addAddress($emailadmn);
			$mail->Subject = "Reviewer's vindication";
			$mail->isHTML(true);

			$mailContent = "<h4>System generated email for jESEG Administrator:</h4>
				<p style='font-size:25px;font-family:calibri;'><b>".$sernder."</b> reviewed an Article entitled: <b>".$this->input->post('titleOfthisJourn')."</b> and vindicated it as 'Rejected'<br>
					To view this details, Visit and Login to jESEG @: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
				</p>";

			$mail->Body = $mailContent;

			if(!$mail->send()){
				
			}else{
				
			}
			/******** End Sending Mail to administrator *******/
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
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 ORDER BY users.userid DESC");
		}else if($cmd == 3){
			$query = $this->db->query("SELECT * FROM revto LEFT JOIN journal ON revto.journ_id=journal.j_id LEFT JOIN users ON users.userid=journal.author_id WHERE revto.revto='".$xxID."' AND revto.stat='pending' ORDER BY revto.id DESC");
			$datax[] = array();
			$i = 0;
			foreach($query->result() as $bx){
				$datax[$i] = array(
					'userid' => $bx->userid,
					'titleJournal' => $bx->title,
					'abstractJournal' => $bx->abstract,
					'keywords' => $bx->keywords,
					'dateASs' => $bx->dateAss,
					'timeASs' => $bx->TimeAss,
					'coAuthor' => $this->db->query("SELECT * from revto LEFT JOIN users ON revto.revto=users.userid WHERE revto!='".$xxID."' AND journ_id='".$bx->j_id."'")->result(),
					'j_id' => $bx->j_id,
					'waitO' => $this->db->query("SELECT * from revto WHERE stat='pending' AND journ_id='".$bx->j_id."'")->num_rows(),
					'realAuth' => "".$bx->u_fname." ".$bx->u_lname."",
					'autXxx' => $this->db->query("SELECT * from coauthors WHERE authorTo='".$bx->j_id."'")->result(),
					'datetimeSub' => $bx->datetime,
					'finalapproval' => $bx->finalapproval,
					'dateapp' => $bx->dateapp,
					'timeapp' => $bx->timeapp,
					'fileData' => $this->db->query("SELECT * FROM filePortal WHERE attachedTo='".$bx->j_id."' ORDER BY fileid DESC LIMIT 1")->result(),
				);
				$i++;
			}
			if($i < 1){
				return false;
			}
			return $datax;
		}else if($cmd == 4){
			$query = $this->db->query("SELECT * FROM revto LEFT JOIN journal ON revto.journ_id=journal.j_id LEFT JOIN users ON users.userid=journal.author_id WHERE revto.revto='".$xxID."' AND revto.stat='accepted' AND revto.finalapproval!=1 AND revto.finalapproval!=2 and revto.finalapproval!=3 and revto.finalapproval!=4 ORDER BY revto.id DESC");
			$data[] = array();
			$i = 0;
			foreach($query->result() as $bx){
				$data[$i] = array(
					'userid' => $bx->userid,
					'titleJournal' => $bx->title,
					'abstractJournal' => $bx->abstract,
					'keywords' => $bx->keywords,
					'dateASs' => $bx->dateAss,
					'timeASs' => $bx->TimeAss,
					'coAuthor' => $this->db->query("SELECT * from revto LEFT JOIN users ON revto.revto=users.userid WHERE revto!='".$xxID."' AND journ_id='".$bx->j_id."'")->result(),
					'j_id' => $bx->j_id,
					'waitO' => $this->db->query("SELECT * from revto WHERE stat='pending' AND journ_id='".$bx->j_id."'")->num_rows(),
					'realAuth' => "".$bx->u_fname." ".$bx->u_lname."",
					'autXxx' => $this->db->query("SELECT * from coauthors WHERE authorTo='".$bx->j_id."'")->result(),
					'datetimeSub' => $bx->datetime,
					'finalapproval' => $bx->finalapproval,
					'dateapp' => $bx->dateapp,
					'timeapp' => $bx->timeapp,
					'fileData' => $this->db->query("SELECT * FROM filePortal WHERE attachedTo='".$bx->j_id."' ORDER BY fileid DESC LIMIT 1")->result(),
				);
				if(!$data[$i]['fileData']){
					$data[$i]['fileData'][0] = array(
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
		}else if($cmd == 5){
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
		}else if($cmd == 6){
			$j_idGet = $this->input->get('idData');
			$query = $this->db->query("SELECT * FROM tast LEFT JOIN users ON tast.reviewer_id=users.userid WHERE tast.journal_id='$j_idGet' AND tast.approvedbyeditor=1 ORDER BY tast.taskid DESC");
			$data[] = array();
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
					'replies' => $this->db->query("SELECT * from replytotask WHERE taskid='".$bx->taskid."'")->result(),
				);
				$i++;
			}
			if($i < 1){
				return false;
			}
			return $data;
		}else if($cmd == 7){
			$query = $this->db->query("SELECT * FROM revto LEFT JOIN journal ON revto.journ_id=journal.j_id LEFT JOIN users ON users.userid=journal.author_id WHERE revto.revto='".$xxID."' AND revto.stat='accepted' AND revto.finalapproval=4 ORDER BY revto.id DESC");
			$data[] = array();
			$i = 0;
			foreach($query->result() as $bx){
				$data[$i] = array(
					'userid' => $bx->userid,
					'titleJournal' => $bx->title,
					'abstractJournal' => $bx->abstract,
					'keywords' => $bx->keywords,
					'dateASs' => $bx->dateAss,
					'timeASs' => $bx->TimeAss,
					'coAuthor' => $this->db->query("SELECT * from revto LEFT JOIN users ON revto.revto=users.userid WHERE revto!='".$xxID."' AND journ_id='".$bx->j_id."'")->result(),
					'j_id' => $bx->j_id,
					'waitO' => $this->db->query("SELECT * from revto WHERE stat='pending' AND journ_id='".$bx->j_id."'")->num_rows(),
					'realAuth' => "".$bx->u_fname." ".$bx->u_lname."",
					'autXxx' => $this->db->query("SELECT * from coauthors WHERE authorTo='".$bx->j_id."'")->result(),
					'datetimeSub' => $bx->datetime,
					'finalapproval' => $bx->finalapproval,
					'dateapp' => $bx->dateapp,
					'timeapp' => $bx->timeapp,
					'fileData' => $this->db->query("SELECT * FROM filePortal WHERE attachedTo='".$bx->j_id."' ORDER BY fileid DESC LIMIT 1")->result(),
				);
				$i++;
			}
			if($i < 1){
				return false;
			}
			return $data;
		}else if($cmd == 8){
			$query = $this->db->query("SELECT * FROM activitylogs WHERE userid='".$xxID."' AND typedesfor='reviewer' ORDER BY logid DESC");
		}else if($cmd == 9){
			$takeIDxx = $this->input->get('dataIDxxD');
			$query = $this->db->query("SELECT * FROM journalbasicupdate LEFT JOIN users ON journalbasicupdate.useridupdate=users.userid WHERE journalbasicupdate.jouridupdate='".$takeIDxx."' ORDER BY journalbasicupdate.basicupid DESC");
		}else if($cmd == 10){
			$query = $this->db->query("SELECT * FROM fileportal WHERE ownerid='$xxID' AND taskidref=0 ORDER BY fileid DESC LIMIT 1");
		}else if($cmd == 11){
			$query = $this->db->query("SELECT * FROM revto LEFT JOIN journal ON revto.journ_id=journal.j_id LEFT JOIN users ON users.userid=journal.author_id WHERE revto.revto='".$xxID."' AND revto.stat='accepted' AND revto.finalapproval!=4 AND revto.finalapproval!=0 ORDER BY revto.id DESC");
			$data[] = array();
			$i = 0;
			foreach($query->result() as $bx){
				$data[$i] = array(
					'userid' => $bx->userid,
					'titleJournal' => $bx->title,
					'abstractJournal' => $bx->abstract,
					'keywords' => $bx->keywords,
					'dateASs' => $bx->dateAss,
					'timeASs' => $bx->TimeAss,
					'coAuthor' => $this->db->query("SELECT * from revto LEFT JOIN users ON revto.revto=users.userid WHERE revto!='".$xxID."' AND journ_id='".$bx->j_id."'")->result(),
					'j_id' => $bx->j_id,
					'waitO' => $this->db->query("SELECT * from revto WHERE stat='pending' AND journ_id='".$bx->j_id."'")->num_rows(),
					'realAuth' => "".$bx->u_fname." ".$bx->u_lname."",
					'autXxx' => $this->db->query("SELECT * from coauthors WHERE authorTo='".$bx->j_id."'")->result(),
					'datetimeSub' => $bx->datetime,
					'finalapproval' => $bx->finalapproval,
					'dateapp' => $bx->dateapp,
					'timeapp' => $bx->timeapp,
					'fileData' => $this->db->query("SELECT * FROM filePortal WHERE attachedTo='".$bx->j_id."' ORDER BY fileid DESC LIMIT 1")->result(),
				);
				$i++;
			}
			if($i < 1){
				return false;
			}
			return $data;
		}else if($cmd == 12){
			$query = $this->db->query("SELECT * FROM announcement ORDER BY annid DESC");
		}else if($cmd == 13){
			$ooop = $this->input->get('dataSearchRevP');
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.salutation LIKE '%".$ooop."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.u_fname LIKE '%".$ooop."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.u_mname LIKE '%".$ooop."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.u_lname LIKE '%".$ooop."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.u_initials LIKE '%".$ooop."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.u_gender LIKE '%".$ooop."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.affiliation LIKE '%".$ooop."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.email LIKE '%".$ooop."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.orcid_id LIKE '%".$ooop."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.url LIKE '%".$ooop."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.fax LIKE '%".$ooop."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND country.country_name LIKE '%".$ooop."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.mailingaddrss LIKE '%".$ooop."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.author=1 AND users.bio_state LIKE '%".$ooop."%' ORDER BY users.userid DESC");
		}else if($cmd == 14){
			$OPdataS = $this->input->get('OPdataS');
			$query = $this->db->query("SELECT * FROM revto LEFT JOIN journal ON revto.journ_id=journal.j_id LEFT JOIN users ON users.userid=journal.author_id WHERE revto.revto='".$xxID."' AND revto.stat='pending' AND journal.title LIKE '%".$OPdataS."%' OR revto.revto='".$xxID."' AND revto.stat='pending' AND journal.abstract LIKE '%".$OPdataS."%' OR revto.revto='".$xxID."' AND revto.stat='pending' AND journal.keywords LIKE '%".$OPdataS."%' ORDER BY revto.id DESC");
			$datax[] = array();
			$i = 0;
			foreach($query->result() as $bx){
				$datax[$i] = array(
					'userid' => $bx->userid,
					'titleJournal' => $bx->title,
					'abstractJournal' => $bx->abstract,
					'keywords' => $bx->keywords,
					'dateASs' => $bx->dateAss,
					'timeASs' => $bx->TimeAss,
					'coAuthor' => $this->db->query("SELECT * from revto LEFT JOIN users ON revto.revto=users.userid WHERE revto!='".$xxID."' AND journ_id='".$bx->j_id."'")->result(),
					'j_id' => $bx->j_id,
					'waitO' => $this->db->query("SELECT * from revto WHERE stat='pending' AND journ_id='".$bx->j_id."'")->num_rows(),
					'realAuth' => "".$bx->u_fname." ".$bx->u_lname."",
					'autXxx' => $this->db->query("SELECT * from coauthors WHERE authorTo='".$bx->j_id."'")->result(),
					'datetimeSub' => $bx->datetime,
					'finalapproval' => $bx->finalapproval,
					'dateapp' => $bx->dateapp,
					'timeapp' => $bx->timeapp,
					'fileData' => $this->db->query("SELECT * FROM filePortal WHERE attachedTo='".$bx->j_id."' ORDER BY fileid DESC LIMIT 1")->result(),
				);
				$i++;
			}
			if($i < 1){
				return false;
			}
			return $datax;
		}else if($cmd == 15){
			$OPdataS = $this->input->get('OPdataS');
			$query = $this->db->query("SELECT * FROM revto LEFT JOIN journal ON revto.journ_id=journal.j_id LEFT JOIN users ON users.userid=journal.author_id WHERE revto.revto='".$xxID."' AND revto.finalapproval!=1 AND journal.title LIKE '%".$OPdataS."%' OR revto.revto='".$xxID."' AND revto.finalapproval!=1 AND journal.abstract LIKE '%".$OPdataS."%' OR revto.revto='".$xxID."' AND revto.finalapproval!=1 AND journal.keywords LIKE '%".$OPdataS."%' ORDER BY revto.id DESC");
			$datax[] = array();
			$i = 0;
			foreach($query->result() as $bx){
				$datax[$i] = array(
					'userid' => $bx->userid,
					'titleJournal' => $bx->title,
					'abstractJournal' => $bx->abstract,
					'keywords' => $bx->keywords,
					'dateASs' => $bx->dateAss,
					'timeASs' => $bx->TimeAss,
					'coAuthor' => $this->db->query("SELECT * from revto LEFT JOIN users ON revto.revto=users.userid WHERE revto!='".$xxID."' AND journ_id='".$bx->j_id."'")->result(),
					'j_id' => $bx->j_id,
					'waitO' => $this->db->query("SELECT * from revto WHERE stat='pending' AND journ_id='".$bx->j_id."'")->num_rows(),
					'realAuth' => "".$bx->u_fname." ".$bx->u_lname."",
					'autXxx' => $this->db->query("SELECT * from coauthors WHERE authorTo='".$bx->j_id."'")->result(),
					'datetimeSub' => $bx->datetime,
					'finalapproval' => $bx->finalapproval,
					'dateapp' => $bx->dateapp,
					'timeapp' => $bx->timeapp,
					'fileData' => $this->db->query("SELECT * FROM filePortal WHERE attachedTo='".$bx->j_id."' ORDER BY fileid DESC LIMIT 1")->result(),
				);
				$i++;
			}
			if($i < 1){
				return false;
			}
			return $datax;
		}else if($cmd == 16){
			$OPdataS = $this->input->get('OPdataS');
			$query = $this->db->query("SELECT * FROM revto LEFT JOIN journal ON revto.journ_id=journal.j_id LEFT JOIN users ON users.userid=journal.author_id WHERE revto.revto='".$xxID."' AND revto.finalapproval=1 AND journal.title LIKE '%".$OPdataS."%' OR revto.revto='".$xxID."' AND revto.finalapproval=1 AND journal.abstract LIKE '%".$OPdataS."%' OR revto.revto='".$xxID."' AND revto.finalapproval=1 AND journal.keywords LIKE '%".$OPdataS."%' ORDER BY revto.id DESC");
			$datax[] = array();
			$i = 0;
			foreach($query->result() as $bx){
				$datax[$i] = array(
					'userid' => $bx->userid,
					'titleJournal' => $bx->title,
					'abstractJournal' => $bx->abstract,
					'keywords' => $bx->keywords,
					'dateASs' => $bx->dateAss,
					'timeASs' => $bx->TimeAss,
					'coAuthor' => $this->db->query("SELECT * from revto LEFT JOIN users ON revto.revto=users.userid WHERE revto!='".$xxID."' AND journ_id='".$bx->j_id."'")->result(),
					'j_id' => $bx->j_id,
					'waitO' => $this->db->query("SELECT * from revto WHERE stat='pending' AND journ_id='".$bx->j_id."'")->num_rows(),
					'realAuth' => "".$bx->u_fname." ".$bx->u_lname."",
					'autXxx' => $this->db->query("SELECT * from coauthors WHERE authorTo='".$bx->j_id."'")->result(),
					'datetimeSub' => $bx->datetime,
					'finalapproval' => $bx->finalapproval,
					'dateapp' => $bx->dateapp,
					'timeapp' => $bx->timeapp,
					'fileData' => $this->db->query("SELECT * FROM filePortal WHERE attachedTo='".$bx->j_id."' ORDER BY fileid DESC LIMIT 1")->result(),
				);
				$i++;
			}
			if($i < 1){
				return false;
			}
			return $datax;
		}else if($cmd == 17){
			$OPdataS = $this->input->get('OPdataS');
			$query = $this->db->query("SELECT * FROM revto LEFT JOIN journal ON revto.journ_id=journal.j_id LEFT JOIN users ON users.userid=journal.author_id WHERE revto.revto='".$xxID."' AND revto.finalapproval=2 AND journal.title LIKE '%".$OPdataS."%' OR revto.revto='".$xxID."' AND revto.finalapproval=2 AND journal.abstract LIKE '%".$OPdataS."%' OR revto.revto='".$xxID."' AND revto.finalapproval=2 AND journal.keywords LIKE '%".$OPdataS."%' ORDER BY revto.id DESC");
			$datax[] = array();
			$i = 0;
			foreach($query->result() as $bx){
				$datax[$i] = array(
					'userid' => $bx->userid,
					'titleJournal' => $bx->title,
					'abstractJournal' => $bx->abstract,
					'keywords' => $bx->keywords,
					'dateASs' => $bx->dateAss,
					'timeASs' => $bx->TimeAss,
					'coAuthor' => $this->db->query("SELECT * from revto LEFT JOIN users ON revto.revto=users.userid WHERE revto!='".$xxID."' AND journ_id='".$bx->j_id."'")->result(),
					'j_id' => $bx->j_id,
					'waitO' => $this->db->query("SELECT * from revto WHERE stat='pending' AND journ_id='".$bx->j_id."'")->num_rows(),
					'realAuth' => "".$bx->u_fname." ".$bx->u_lname."",
					'autXxx' => $this->db->query("SELECT * from coauthors WHERE authorTo='".$bx->j_id."'")->result(),
					'datetimeSub' => $bx->datetime,
					'finalapproval' => $bx->finalapproval,
					'dateapp' => $bx->dateapp,
					'timeapp' => $bx->timeapp,
					'fileData' => $this->db->query("SELECT * FROM filePortal WHERE attachedTo='".$bx->j_id."' ORDER BY fileid DESC LIMIT 1")->result(),
				);
				$i++;
			}
			if($i < 1){
				return false;
			}
			return $datax;
		}else if($cmd == 18){
			$query = $this->db->query("SELECT * FROM notemessage WHERE specifynote='reviewer' AND notefor='$xxID' AND viewed=0");
			return $query->num_rows();
		}else if($cmd == 19){
			$query = $this->db->query("SELECT * FROM notemessage WHERE specifynote='reviewer' AND notefor='$xxID' ORDER BY nid DESC");
		}else if($cmd == 20){
			$query = $this->db->query("UPDATE notemessage SET viewed=1 WHERE notefor='$xxID' AND specifynote='reviewer'");
			return true;
		}

		if($query->num_rows() > 0){
			return $query->result();
		}
		return false;
	}
}