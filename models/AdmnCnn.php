<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AdmnCnn extends CI_Model{
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
		$mail->SMTPDebug = 2;
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
		$xxID = 0;
		foreach ($sqlxx->result() as $x) {
			$xxID = intval($x->userid);
			$opID = intval($x->id);
		}
		if($cmd == 112333){
			$keepArr = array('prio' => $this->input->get('OP'));
			$this->db->where('id', $opID);
			$this->db->update('session', $keepArr);
		}
		else if($cmd == 1){
			$mail->addAddress($this->input->post('resEmail'));
			$mail->Subject = 'Account Confirmation';
			$mail->isHTML(true);

			$mailContent = "<h4>System generated email:</h4>
				<p style='font-size:25px;font-family:calibri;'>The Journal for <b>Environmental Sciences and Eco-Governance</b> accepted you as <b>Researcher</b>.<br>
					You can now use our Journal System resources to <b>submit an article for review</b>.<br>
					Visit and Login to jESEG with this link: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
				</p>";

			$mail->Body = $mailContent;

			if(!$mail->send()){
				return false;
			}else{
				$id = $this->input->post('useridCred');
				$stat = array(
					'statacc' => "accepted",
					'author' => 1
				);

				$this->db->where('userid', $id);
				$this->db->update('users', $stat);

				return true;
			}
		}else if($cmd == 2){
			$mail->addAddress($this->input->post('emailDtailtox'));
			$mail->Subject = 'Invitation and Account Confirmation';
			$mail->isHTML(true);

			$id = $this->input->post('thisIDrecepient');
			$vl = $this->db->query("SELECT * FROM users WHERE userid='$id'");
			$usern = '';$passw = '';
			foreach ($vl->result() as $llv) {
				$usern = md5($llv->username);
				$passw = $llv->password;
			}

			$mailContent = "<h4>System generated email:</h4>
				<p style='font-size:25px;font-family:calibri;'>The Journal for <b>Environmental Sciences and Eco-Governance</b> accepted you as <b>Researcher</b>.<br>
					You can now use our Journal System to <b>submit an article for review</b>.<br>
					Visit and Login to jESEG with this link: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
					<br><br>
					<b>".$this->input->post('messageDtail')."</b><br><br>
					<font style='font-size:17px;'>
						Click this link for your invitation acceptance: 
						<a href='http://jeseg.carsu.edu.ph/index.php/Strt/valydd?epr=".$usern."&oopre=".$passw."&ddl=".$id."' target='__blank'>
							http://jeseg.carsu.edu.ph/index.php/Strt/invitationAcceptance
						</a> 
					</font>
				</p>";

			$mail->Body = $mailContent;

			if(!$mail->send()){
				return false;
			}else{
				$stat = array(
					'statacc' => "accepted",
					'author' => 1
				);
				$kkfff = $this->input->post('opfffff322');
				if($kkfff == 2){
					$stat += array(
						'tempreviewer' => 1
					);
				}else if($kkfff == 3){
					$stat += array(
						'tempeditor' => 1
					);
				}else if($kkfff == 4){
					$stat += array(
						'tempeditor' => 1,
						'tempreviewer' => 1
					);
				}
				$this->db->where('userid', $id);
				$this->db->update('users', $stat);
				$prtlIns = array();
				$thisIP = $this->x->get_client_ip();
				$sqlxx = $this->db->query("SELECT * from users WHERE userid=".$id."");
				foreach ($sqlxx->result() as $x) {
					$prtlIns = array(
						'ipaddress' => $thisIP,
						'timein' => $xx,
						'datein' => $yy,
						'completename' => "".$x->u_lname.", ".$x->u_fname." ".$x->u_mname."",
						'userid' => $x->userid,
						'password' => $x->password,
						'admin' => $x->admin,
						'reviewer' => $x->reviewer,
						'editor' => $x->editor,
						'author' => $x->author,
						'email' => $x->email,
						'prio' => 1
					);
				}
				$this->db->insert('session', $prtlIns);
				return true;
			}
		}else if($cmd == 3){
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
		}else if($cmd == 4){
			$fileFields = array(
				'sendermessageid' => $xxID,
				'mesfor' => $this->input->post('listOFadmxxn'),
				'message' => $this->input->post('foxMEsARea'),
				'mesdate' => $yy,
				'mestime' => $xx
			);
			$this->db->insert('message', $fileFields);
		}else if($cmd == 5){
			$annFields = array(
				'datestartann' => $this->input->post('dateStrat'),
				'dateendann' => $this->input->post('dateEndDspNMe'),
				'subject' => $this->input->post('annSubject'),
				'anndetail' => $this->input->post('annMessage')
			);
			$this->db->insert('announcement', $annFields);
		}else if($cmd == 6){
			$textar = $this->input->post('textar');
			$inxcc = $this->input->post('indi');
			$dataImage = $this->input->post('image');

			$imagearr1 = explode(";", $dataImage);
			$imagearr2 = explode(",", $imagearr1[1]);
			$data = base64_decode($imagearr2[1]);
			$imageName = time() . '.png';
			unlink("nwng/slider/". $imageName);
			file_put_contents("nwng/slider/". $imageName, $data);

			$imgsliderField = array(
				'sel' => $this->input->post('indi'),
				'imgname' => $imageName,
				'tagline' => $this->input->post('textar')
			);
			$sqlpx = $this->db->query("SELECT * FROM slider WHERE sel='".$inxcc."'");
			if($sqlpx->num_rows() > 0){
				$this->db->where('sel', $inxcc);
				$this->db->update('slider', $imgsliderField);
			}else{
				$this->db->insert('slider', $imgsliderField);
			}
			return true;
		}else if($cmd == 7){
			$jrestttttt1_id = $this->input->post('restttttt1_id');
			$jrestttttt1_ttle = $this->input->post('restttttt1_ttle');
			$this->db->query("UPDATE journal set approvedpublished=0 WHERE j_id='".$jrestttttt1_id."'");
			/******** Note Logs *******/
			$forNote = array(
				'notefor' => $this->input->post('authOwnPlx'),
				'messagenote' => 'You article entitled "'.$jrestttttt1_ttle.'" has been restored!',
				'date' => $yy,
				'time' => $xx,
				'specifynote' => 'regular'
			);
			$this->db->insert('notemessage', $forNote);
			/******** End Note Logs *******/
		}else if($cmd == 8){
			$textar = $this->input->post('textar');
			$intitle = $this->input->post('intitle');
			$dataImage = $this->input->post('image');

			$imagearr1 = explode(";", $dataImage);
			$imagearr2 = explode(",", $imagearr1[1]);
			$data = base64_decode($imagearr2[1]);
			$imageName = time() . '.png';
			file_put_contents("nwng/lanews/". $imageName, $data);

			$newField = array(
				'newsname' => $this->input->post('intitle'),
				'newsimage' => $imageName,
				'newsdesc' => $textar,
				'weblink' => $this->input->post('newwebsiteLink'),
				'date' => $yy,
				'time' => $AMPM
			);
			$this->db->insert('lanews', $newField);
			return true;
		}else if($cmd == 9){
			$opData = $this->input->get('opData');
			$sql = $this->db->query("SELECT * FROM lanews WHERE id='".$opData."'");
			foreach ($sql->result() as $x) {
				unlink("nwng/lanews/". $x->newsimage);
			}
			$this->db->query("DELETE from lanews WHERE id='".$opData."'");
		}else if($cmd == 10){
			$textar = $this->input->post('textar');
			$titleEA = $this->input->post('titleEA');
			$dataImage = $this->input->post('image');

			$imagearr1 = explode(";", $dataImage);
			$imagearr2 = explode(",", $imagearr1[1]);
			$data = base64_decode($imagearr2[1]);
			$imageName = time() . '.png';
			file_put_contents("nwng/actevent/". $imageName, $data);

			$actField = array(
				'acttitle' => $titleEA,
				'actimage' => $imageName,
				'actdesc' => $textar,
				'date' => $yy,
				'time' => $AMPM
			);
			$this->db->insert('actevent', $actField);
			return true;
		}else if($cmd == 11){
			$fnm = $_FILES['file']['tmp_name'];
			$filenameDesc = $_POST['filenameDesc'];
			ini_set($fnm, PHP_INT_MAX);
			$dst = "nwng/downloada/".$_FILES['file']['name'];
			move_uploaded_file($fnm, $dst);
			$fileFields = array(
				'filedesc' => $filenameDesc,
				'filename' => $_FILES['file']['name'],
				'date' => $yy,
				'time' => $AMPM
			);
			$this->db->insert('downloada', $fileFields);
		}else if($cmd == 12){
			$orgName001 = $this->input->post('orgName001');
			$orgDesc001 = $this->input->post('orgDesc001');
			$wEbLiknOrg = $this->input->post('wEbLiknOrg');
			$dataImage = $this->input->post('image');

			$imagearr1 = explode(";", $dataImage);
			$imagearr2 = explode(",", $imagearr1[1]);
			$data = base64_decode($imagearr2[1]);
			$imageName = time() . '.png';
			file_put_contents("nwng/partorg/". $imageName, $data);

			$actField = array(
				'orgname' => $orgName001,
				'orgdesc' => $orgDesc001,
				'orgimage' => $imageName,
				'orglink' => $wEbLiknOrg
			);
			$this->db->insert('partorg', $actField);
			return true;
		}else if($cmd == 13){
			$idrrw = $this->input->get('idrrw');
			$filn = $this->input->get('filn');
			unlink("nwng/downloada/". $filn);
			$this->db->query("DELETE from downloada WHERE id='".$idrrw."'");
		}else if($cmd == 14){
			$idrrwforOp = $this->input->get('idrrwforOp');
			$orgimage = $this->input->get('orgimage');
			unlink("nwng/partorg/". $orgimage);
			$this->db->query("DELETE from partorg WHERE id='".$idrrwforOp."'");
		}else if($cmd == 15){
			$othField = array(
				'hotline' => $this->input->post('oth1'),
				'schedule' => $this->input->post('oth2'),
				'mailingacc' => $this->input->post('oth3'),
				'officeaddress' => $this->input->post('oth4'),
				'pristatement' => $this->input->post('oth5'),
				'lastupdate' => $yy,
				'lastuptime' => $AMPM
			);
			$this->db->update('others', $othField);
		}else if($cmd == 16){
			$sercField = array(
				'description' => $this->input->get('data'),
				'date' => $yy,
				'time' => $xx
			);
			$this->db->insert('facsection', $sercField);
		}else if($cmd == 17){
			$dataImage = $this->input->post('image5');
			$idOflxxOpkxasdhawasdd001 = $this->input->post('idOflxxOpkxasdhawasdd001');

			$imagearr1 = explode(";", $dataImage);
			$imagearr2 = explode(",", $imagearr1[1]);
			$data = base64_decode($imagearr2[1]);
			$imageName = time() . '.png';
			file_put_contents("nwng/facilities/". $imageName, $data);

			$facSecCont = array(
				'sectionid' => $idOflxxOpkxasdhawasdd001,
				'image' => $imageName,
			);
			$this->db->insert('faccontentimage', $facSecCont);
		
			return true;
		}else if($cmd == 18){
			$idJournalPPmm = $this->input->post('idJournalPPmm');
			$titLeJournalPPmm = $this->input->post('titLeJournalPPmm');
			$seleJournalPPmm = $this->input->post('seleJournalPPmm');
			$raaprDssField = array(
				'approvedpublished' => $seleJournalPPmm,
				'year' => date('Y'),
				'month' => date('M'),
				'vol_volume' => $this->input->post('volnum'),
				'vol_number' => $this->input->post('num'),
				'vol_year' => $this->input->post('year'),
				'vol_page' => $this->input->post('page'),
				'datetimepublished' => "".$yy." ".$xx."",
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
			$email = '';
			foreach ($xxPQ->result() as $klaaaP) {
				$email = $klaaaP->email;
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


			// Sending Email to Researcher
			$mail->addAddress($email);
			$mail->Subject = 'Article Reviews';
			$mail->isHTML(true);

			if($seleJournalPPmm == 1){
				$mailContent = "<h4>System generated email:</h4>
					<p style='font-size:25px;font-family:Calibri;'>
						<h2>Congratulations!</h2>
						The <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>Journal for <b>Environmental Sciences and Eco-Governance</b></a> <font style='color:#1BB221'><b>Published</b></font> your article entitled: <br>
						<b>".$titLeJournalPPmm."</b><br>
						To view this details, Visit and Login to jESEG @: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
					</p>";
			}else{
				$mailContent = "<h4>System generated email:</h4>
					<p style='font-size:25px;font-family:Calibri;'>
						<h2>Congratulations!</h2>
						The <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>Journal for <b>Environmental Sciences and Eco-Governance</b></a> <font style='color:#B43928'><b>Refused</b></font> your article entitled: <br>
						<b>".$titLeJournalPPmm."</b><br>
						To view this details, Visit and Login to jESEG @: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
					</p>";
			}
				

			$mail->Body = $mailContent;

			if(!$mail->send()){
				
			}else{
				
			}
		}else if($cmd == 19){
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
				<p style='font-size:25px;font-family:calibri;'>The <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>Journal for <b>Environmental Sciences and Eco-Governance</b></a> invites you to review an article entitled:<br>
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
				// Sending Mail to author...
				$j_idx = $this->input->post('j_idCopied');
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
					<p style='font-size:25px;font-family:calibri;'>The <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>Journal for <b>Environmental Sciences and Eco-Governance</b></a> successfully evaluated your article entitled: <br>
						<b>".$this->input->post('ttleOloxxxx')."</b>, and this will be reviewed soon.<br>
						To view this details, Visit and Login to jESEG @: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
					</p>";

				$mail->Body = $mailContent;
				// End Sending Mail to author...

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
					/******** Logs Reviewer *******/
					$logFF = array(
						'journal_idlog' => $j_idx,
						'logrev' => "Your article entitled: ".$this->input->post('ttleOloxxxx')." was successfully evaluated. Constant updates will be made with this journal system and via email from review and up until it will be published",
						'date' => $yy,
						'time' => $xx,
						'userid' => $resIDcpp,
					);
					$this->db->insert('reviewerlog', $logFF);
					/******** End Logs Reviewer *******/
					return true;
				}
			}
		}else if($cmd == 20){
			$j_idj_id = $this->input->get('j_idj_id');
			$vl1 = $this->db->query("SELECT journal.title, users.email, users.userid, fileportal.path FROM journal LEFT JOIN users ON users.userid=journal.author_id LEFT JOIN fileportal ON fileportal.attachedTo=journal.j_id WHERE journal.j_id='$j_idj_id'");
			$jTitle = '';$emailLp = '';$path = '';$userixxxxxxx = 0;
			foreach ($vl1->result() as $llv1) {
				$jTitle = $llv1->title;
				$emailLp = $llv1->email;
				$path = $llv1->path;
				$userixxxxxxx = $llv1->userid;
			}

			$mail->addAddress($emailLp);
			$mail->Subject = 'Article Update';
			$mail->isHTML(true);

			$mailContent = "<h4>System generated email:</h4>
				<p style='font-size:25px;font-family:calibri;'>The <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>Journal for <b>Environmental Sciences and Eco-Governance</b></a> reviewed your article entitled: <br>
					<b>".$jTitle."</b><br>
					<font style='font-size:17px;'>
						The following are the comments created by our reviewers, you can treat some comments as task: 
						<div style='padding:5px;'>".$this->input->get('messageRecvvv')."</div>
					</font><br><br>
					<font style='font-size:17px;'>
						Click this link to download you corrected article in a file format:
						<a href='http://jeseg.carsu.edu.ph/".$path."' target='__blank'>
							http://jeseg.carsu.edu.ph/fileArticleDownload
						</a> 
					</font>
				</p>";

			$mail->Body = $mailContent;

			if(!$mail->send()){
				return false;
			}else{
				$taskField = array(
					'approvedbyeditor' => 1
				);
				$this->db->where('taskid', $this->input->get('taskidggnss'));
				$this->db->update('tast', $taskField);
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

				/******** Logs Reviewer *******/
				$logFF = array(
					'journal_idlog' => $this->input->get('j_idj_id'),
					'logrev' => "Your article entitled: ".$jTitle." was reviewed. Reviewers may gave following feedback. View details now.",
					'date' => $yy,
					'time' => $xx,
					'userid' => $userixxxxxxx,
				);
				$this->db->insert('reviewerlog', $logFF);
				/******** End Logs Reviewer *******/
			}
		}else if($cmd == 21){
			$j_idj_id = $this->input->get('j_idj_id');
			$vl1 = $this->db->query("SELECT journal.title, users.email, users.userid, fileportal.path FROM journal LEFT JOIN users ON users.userid=journal.author_id LEFT JOIN fileportal ON fileportal.attachedTo=journal.j_id WHERE journal.j_id='$j_idj_id'");
			$jTitle = '';$emailLp = '';$path = '';$userixxxxxxx = 0;
			foreach ($vl1->result() as $llv1) {
				$jTitle = $llv1->title;
				$emailLp = $llv1->email;
				$path = $llv1->path;
				$userixxxxxxx = $llv1->userid;
			}

			$mail->addAddress($emailLp);
			$mail->Subject = 'Article Update';
			$mail->isHTML(true);

			$mailContent = "<h4>System generated email:</h4>
				<p style='font-size:25px;font-family:calibri;'>The <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>Journal for <b>Environmental Sciences and Eco-Governance</b></a> reviewed your article entitled: <br>
					<b>".$jTitle."</b><br>
					<font style='font-size:17px;'>
						The following are the comments created by our reviewers, you can treat some comments as task: 
						<div style='padding:5px;'>".$this->input->get('messageRecvvv')."</div>
					</font><br><br>
					<font style='font-size:17px;'>
						Click this link to download you corrected article in a file format:
						<a href='http://jeseg.carsu.edu.ph/".$path."' target='__blank'>
							http://jeseg.carsu.edu.ph/fileArticleDownload
						</a> 
					</font>
				</p>";

			$mail->Body = $mailContent;

			if(!$mail->send()){
				return false;
			}else{
				$taskField = array(
					'approvedbyeditor' => 1
				);
				$this->db->where('id', $this->input->get('taskidggnss'));
				$this->db->update('replytotask', $taskField);
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

				/******** Logs Reviewer *******/
				$logFF = array(
					'journal_idlog' => $this->input->get('j_idj_id'),
					'logrev' => "Your article entitled: ".$jTitle." was reviewed. Reviewers may gave following feedback. View details now.",
					'date' => $yy,
					'time' => $xx,
					'userid' => $userixxxxxxx,
				);
				$this->db->insert('reviewerlog', $logFF);
				/******** End Logs Reviewer *******/
			}
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
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE users.statacc='pending' AND users.userid!='$xxID'  ORDER BY users.userid DESC");
		}else if($cmd == 2){
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=0 AND users.editor=0 AND users.author=1 ORDER BY users.userid DESC");
		}else if($cmd == 3){
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE users.statacc='accepted' AND users.userid!='$xxID' AND  users.editor=1 AND users.author=1 OR users.statacc='accepted' AND users.userid!='$xxID' AND users.editor=1 AND users.author=1 ORDER BY users.userid DESC");
		}else if($cmd == 4){
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE users.statacc='ignored' AND users.userid!='$xxID'  ORDER BY users.userid DESC");
		}else if($cmd == 5){
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE users.statacc='accepted' AND users.userid!='$xxID' AND  users.reviewer=1 AND users.author=1 OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.author=1 ORDER BY users.userid DESC");
		}else if($cmd == 6){
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
		}else if($cmd == 7){
			$idArt = $this->input->get('artID');
			$query = $this->db->query("SELECT * FROM revto LEFT JOIN users ON users.userid=revto.revto LEFT JOIN country ON users.country_id=country.countryid WHERE revto.journ_id='$idArt' ORDER BY users.userid DESC");
		}else if($cmd == 8){
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
		}else if($cmd == 9){
			$query = $this->db->query("SELECT * FROM message LEFT JOIN users ON message.sendermessageid=users.userid WHERE message.mesfor='$xxID' AND message.sendermessageid!='$xxID' ORDER BY message.mesid DESC");
		}else if($cmd == 10){
			$query = $this->db->query("SELECT * FROM users WHERE userid!='$xxID' ORDER BY u_lname ASC");
		}else if($cmd == 11){
			$query = $this->db->query("SELECT * FROM message LEFT JOIN users ON message.mesfor=users.userid WHERE message.sendermessageid='$xxID' ORDER BY message.mesid DESC");
		}else if($cmd == 12){
			$query = $this->db->query("SELECT * FROM announcement ORDER BY annid DESC");
		}else if($cmd == 13){
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE journal.approvedpublished=1 ORDER BY journal.j_id DESC LIMIT 5");
			$resData = array();
			$x = 0;
			foreach ($query->result() as $k){
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'title' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'keywords' => $k->keywords,
					'year' => $k->year,
					'month' => $k->month,
					'themaarea' => $k->fieldarea,
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
			$query = $this->db->query("SELECT DISTINCT yearrsubmit from journal WHERE approvedpublished=0 ORDER BY yearrsubmit DESC");
		}else if($cmd == 15){
			$query = $this->db->query("SELECT DISTINCT year from journal WHERE approvedpublished=1 ORDER BY year DESC");
		}else if($cmd == 16){
			$yrElemXx = $this->input->get('yrElemXx');
			$semXxJr = $this->input->get('semXxJr');
			if($semXxJr == '1st'){
				$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE 
					journal.approvedpublished=0 AND yearrsubmit='$yrElemXx' AND monthsubmit='Jan' OR
					journal.approvedpublished=0 AND yearrsubmit='$yrElemXx' AND monthsubmit='Feb' OR
					journal.approvedpublished=0 AND yearrsubmit='$yrElemXx' AND monthsubmit='Mar' OR
					journal.approvedpublished=0 AND yearrsubmit='$yrElemXx' AND monthsubmit='Apr' OR
					journal.approvedpublished=0 AND yearrsubmit='$yrElemXx' AND monthsubmit='May' OR
					journal.approvedpublished=0 AND yearrsubmit='$yrElemXx' AND monthsubmit='Jun'
					ORDER BY journal.j_id DESC");
			}else{
				$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE 
					journal.approvedpublished=0 AND yearrsubmit='$yrElemXx' AND monthsubmit='Jul' OR
					journal.approvedpublished=0 AND yearrsubmit='$yrElemXx' AND monthsubmit='Aug' OR
					journal.approvedpublished=0 AND yearrsubmit='$yrElemXx' AND monthsubmit='Sep' OR
					journal.approvedpublished=0 AND yearrsubmit='$yrElemXx' AND monthsubmit='Oct' OR
					journal.approvedpublished=0 AND yearrsubmit='$yrElemXx' AND monthsubmit='Nov' OR
					journal.approvedpublished=0 AND yearrsubmit='$yrElemXx' AND monthsubmit='Dec'
					ORDER BY journal.j_id DESC");
			}
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
			$dataopSee = $this->input->get('dataSer');
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
			$yrElemXx = $this->input->get('yrElemXx');
			$semXxJr = $this->input->get('semXxJr');
			if($semXxJr == '1st'){
				$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE 
					journal.approvedpublished=1 AND yearrsubmit='$yrElemXx' AND monthsubmit='Jan' OR
					journal.approvedpublished=1 AND yearrsubmit='$yrElemXx' AND monthsubmit='Feb' OR
					journal.approvedpublished=1 AND yearrsubmit='$yrElemXx' AND monthsubmit='Mar' OR
					journal.approvedpublished=1 AND yearrsubmit='$yrElemXx' AND monthsubmit='Apr' OR
					journal.approvedpublished=1 AND yearrsubmit='$yrElemXx' AND monthsubmit='May' OR
					journal.approvedpublished=1 AND yearrsubmit='$yrElemXx' AND monthsubmit='Jun'
					ORDER BY journal.j_id DESC");
			}else{
				$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE 
					journal.approvedpublished=1 AND yearrsubmit='$yrElemXx' AND monthsubmit='Jul' OR
					journal.approvedpublished=1 AND yearrsubmit='$yrElemXx' AND monthsubmit='Aug' OR
					journal.approvedpublished=1 AND yearrsubmit='$yrElemXx' AND monthsubmit='Sep' OR
					journal.approvedpublished=1 AND yearrsubmit='$yrElemXx' AND monthsubmit='Oct' OR
					journal.approvedpublished=1 AND yearrsubmit='$yrElemXx' AND monthsubmit='Nov' OR
					journal.approvedpublished=1 AND yearrsubmit='$yrElemXx' AND monthsubmit='Dec'
					ORDER BY journal.j_id DESC");
			}
			$resData = array();
			$x = 0;
			foreach ($query->result() as $k){
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'title' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'keywords' => $k->keywords,
					'year' => $k->year,
					'month' => $k->month,
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
		}else if($cmd == 19){
			$dataopSee = $this->input->get('dataRpox');
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
					'year' => $k->year,
					'month' => $k->month,
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
		}else if($cmd == 20){
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE journal.approvedpublished=2 ORDER BY journal.j_id DESC");
			$resData = array();
			$x = 0;
			foreach ($query->result() as $k){
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
		}else if($cmd == 21){
			$dataopSee = $this->input->get('sercPlidd_3');
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
		}else if($cmd == 22){
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE journal.approvedpublished=1 ORDER BY journal.j_id DESC LIMIT 8");
			$resData = array();
			$x = 0;
			foreach ($query->result() as $k){
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'title' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'keywords' => $k->keywords,
					'year' => $k->year,
					'month' => $k->month,
					'themaarea' => $k->fieldarea,
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
		}else if($cmd == 23){
			$data = $this->input->get('data');
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE 
				journal.approvedpublished=1 AND fieldarea LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND title LIKE '%".$data."%' OR
				journal.approvedpublished=1 AND abstract LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND keywords LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND year LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND month LIKE '%".$data."%'
			 ORDER BY journal.j_id DESC LIMIT 8");
			$resData = array();
			$x = 0;
			foreach ($query->result() as $k){
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'title' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'keywords' => $k->keywords,
					'year' => $k->year,
					'month' => $k->month,
					'themaarea' => $k->fieldarea,
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
		}else if($cmd == 24){
			$query = $this->db->query("SELECT * FROM slider ORDER BY sel ASC");
		}else if($cmd == 25){
			$data = $this->input->get('data');
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE 
				journal.approvedpublished=1 AND fieldarea LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND title LIKE '%".$data."%' OR
				journal.approvedpublished=1 AND abstract LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND keywords LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND year LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND month LIKE '%".$data."%'
			 ORDER BY journal.j_id DESC LIMIT 8");
			$resData = array();
			$x = 0;
			foreach ($query->result() as $k){
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'title' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'keywords' => $k->keywords,
					'year' => $k->year,
					'month' => $k->month,
					'themaarea' => $k->fieldarea,
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
		}else if($cmd == 26){
			$query = $this->db->query("SELECT * FROM lanews ORDER BY id DESC LIMIT 5");
		}else if($cmd == 27){
			$query = $this->db->query("SELECT * FROM lanews ORDER BY id DESC LIMIT 5");
		}else if($cmd == 28){
			$query = $this->db->query("SELECT * FROM actevent ORDER BY id DESC");
		}else if($cmd == 29){
			$query = $this->db->query("SELECT * FROM downloada ORDER BY id DESC");
		}else if($cmd == 30){
			$query = $this->db->query("SELECT * FROM partorg ORDER BY id DESC");
		}else if($cmd == 31){
			$query = $this->db->query("SELECT * FROM actevent ORDER BY id DESC LIMIT 3");
		}else if($cmd == 32){
			$data = $this->input->get('data');
			$query = $this->db->query("SELECT * FROM actevent WHERE acttitle LIKE '%".$data."%' OR actdesc LIKE '%".$data."%' OR date LIKE '%".$data."%' OR time LIKE '%".$data."%' ORDER BY id DESC");
		}else if($cmd == 33){
			$query = $this->db->query("SELECT * FROM downloada ORDER BY id DESC LIMIT 5");
		}else if($cmd == 34){
			$data = $this->input->get('data');
			$query = $this->db->query("SELECT * FROM downloada WHERE filedesc LIKE '%".$data."%' OR filename LIKE '%".$data."%' ORDER BY id DESC");
		}else if($cmd == 35){
			$query = $this->db->query("SELECT * FROM downloada ORDER BY id DESC");
		}else if($cmd == 36){
			$query = $this->db->query("SELECT * FROM actevent ORDER BY id DESC");
		}else if($cmd == 37){
			$query = $this->db->query("SELECT * FROM lanews ORDER BY id DESC");
		}else if($cmd == 38){
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE journal.approvedpublished=1 ORDER BY journal.j_id DESC");
			$resData = array();
			$x = 0;
			foreach ($query->result() as $k){
				$resData[$x] = array(
					'j_id' => $k->j_id,
					'title' => $k->title,
					'abstract' => $k->abstract,
					'authrIDpls' => $k->userid,
					'keywords' => $k->keywords,
					'year' => $k->year,
					'month' => $k->month,
					'themaarea' => $k->fieldarea,
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
		}else if($cmd == 39){
			$query = $this->db->query("SELECT * FROM partorg ORDER BY id DESC LIMIT 5");
		}else if($cmd == 40){
			$query = $this->db->query("SELECT * FROM partorg ORDER BY id DESC");
		}else if($cmd == 41){
			$data = $this->input->get('data');
			$query = $this->db->query("SELECT * FROM partorg WHERE orgname LIKE '%".$data."%' OR orgdesc LIKE '%".$data."%' OR orglink LIKE '%".$data."%' ORDER BY id DESC");
		}else if($cmd == 42){
			$query = $this->db->query("SELECT * FROM others");
		}else if($cmd == 43){
			$data = $this->input->get('data');
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE 
				users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=0 AND users.editor=0 AND users.author=1 AND users.salutation LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=0 AND users.editor=0 AND users.author=1 AND users.u_fname LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=0 AND users.editor=0 AND users.author=1 AND users.u_mname LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=0 AND users.editor=0 AND users.author=1 AND users.u_lname LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=0 AND users.editor=0 AND users.author=1 AND users.u_initials LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=0 AND users.editor=0 AND users.author=1 AND users.u_gender LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=0 AND users.editor=0 AND users.author=1 AND users.affiliation LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=0 AND users.editor=0 AND users.author=1 AND users.email LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=0 AND users.editor=0 AND users.author=1 AND users.mailingaddrss LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=0 AND users.editor=0 AND users.author=1 AND country.country_name LIKE '%".$data."%'
				ORDER BY users.userid DESC");
		}else if($cmd == 44){
			$data = $this->input->get('data');
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.editor=1 AND users.author=1 AND users.salutation LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.editor=1 AND users.author=1 AND users.salutation LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.editor=1 AND users.author=1 AND users.u_fname LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.editor=1 AND users.author=1 AND users.u_fname LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.editor=1 AND users.author=1 AND users.u_mname LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.editor=1 AND users.author=1 AND users.u_mname LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.editor=1 AND users.author=1 AND users.u_lname LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.editor=1 AND users.author=1 AND users.u_lname LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.editor=1 AND users.author=1 AND users.u_initials LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.editor=1 AND users.author=1 AND users.u_initials LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.editor=1 AND users.author=1 AND users.u_gender LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.editor=1 AND users.author=1 AND users.u_gender LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.editor=1 AND users.author=1 AND users.affiliation LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.editor=1 AND users.author=1 AND users.affiliation LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.editor=1 AND users.author=1 AND users.email LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.editor=1 AND users.author=1 AND users.email LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.editor=1 AND users.author=1 AND users.mailingaddrss LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.editor=1 AND users.author=1 AND users.mailingaddrss LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.editor=1 AND users.author=1 AND country.country_name LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.editor=1 AND users.author=1 AND country.country_name LIKE '%".$data."%'
				ORDER BY users.userid DESC");
		}else if($cmd == 45){
			$data = $this->input->get('data');
			$query = $this->db->query("SELECT * FROM users LEFT JOIN country ON users.country_id=country.countryid WHERE 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.reviewer=1 AND users.author=1 AND users.salutation LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.author=1 AND users.salutation LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.reviewer=1 AND users.author=1 AND users.u_fname LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.author=1 AND users.u_fname LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.reviewer=1 AND users.author=1 AND users.u_mname LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.author=1 AND users.u_mname LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.reviewer=1 AND users.author=1 AND users.u_lname LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.author=1 AND users.u_lname LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.reviewer=1 AND users.author=1 AND users.u_initials LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.author=1 AND users.u_initials LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.reviewer=1 AND users.author=1 AND users.u_gender LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.author=1 AND users.u_gender LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.reviewer=1 AND users.author=1 AND users.affiliation LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.author=1 AND users.affiliation LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.reviewer=1 AND users.author=1 AND users.email LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.author=1 AND users.email LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.reviewer=1 AND users.author=1 AND users.mailingaddrss LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.author=1 AND users.mailingaddrss LIKE '%".$data."%' OR 
				users.statacc='accepted' AND users.userid!='$xxID' AND  users.reviewer=1 AND users.author=1 AND country.country_name LIKE '%".$data."%' OR users.statacc='accepted' AND users.userid!='$xxID' AND users.reviewer=1 AND users.author=1 AND country.country_name LIKE '%".$data."%'
				ORDER BY users.userid DESC");
		}else if($cmd == 46){
			$query = $this->db->query("SELECT * FROM others");
		}else if($cmd == 47){
			$query = $this->db->query("SELECT count(userid) as tot FROM users");
		}else if($cmd == 48){
			$query = $this->db->query("SELECT count(j_id) as tot FROM journal WHERE approvedpublished=0");
		}else if($cmd == 49){
			$query = $this->db->query("SELECT count(fileid) as tot FROM fileportal");
		}else if($cmd == 50){
			$query = $this->db->query("SELECT count(nid) as tot FROM notemessage");
		}else if($cmd == 51){
			$query = $this->db->query("SELECT count(logid) as tot FROM activitylogs");
		}else if($cmd == 52){
			$query = $this->db->query("SELECT DISTINCT userid FROM session");
			return $query->num_rows();
		}else if($cmd == 53){
			$query = $this->db->query("SELECT count(id) as tot FROM downloada");
		}else if($cmd == 54){
			$query = $this->db->query("SELECT * FROM activitylogs LEFT JOIN users ON activitylogs.userid=users.userid ORDER BY activitylogs.logid DESC");
		}else if($cmd == 55){
			$query = $this->db->query("SELECT * FROM actevent ORDER BY id DESC LIMIT 10");
		}else if($cmd == 58){
			$query = $this->db->query("SELECT count(j_id) as tot FROM journal WHERE approvedpublished=1");
		}else if($cmd == 59){
			$query = $this->db->query("SELECT count(nid) as tot FROM notemessage WHERE sav=0");
		}else if($cmd == 60){
			$this->db->query("UPDATE notemessage set sav=1 WHERE sav=0");
			$query = $this->db->query("SELECT * FROM notemessage WHERE sav=1 ORDER BY nid DESC");
		}else if($cmd == 61){
			$query = $this->db->query("SELECT * from facsection ORDER BY facid DESC");
			$resData = array();
			$x = 0;
			foreach ($query->result() as $k){
				$resData[$x] = array(
					'facid' => $k->facid,
					'description' => $k->description,
					'date' => $k->date,
					'time' => $k->time,
					'imagees' => $this->db->query("SELECT * FROM faccontentimage WHERE sectionid='".$k->facid."'")->result(),
				);
				$x++;
			}
			if($x == 0){
				if(!$resData[$x]['fileDatax']){
					$resData[$x]['fileDatax'][0] = array(
						'facid' => "",
						'description' => "",
						'date' => "",
						'time' => "",
						'imagees' => "",
					);
				}
			}
			return $resData;
		}else if($cmd == 62){
			$data = $this->input->get('data');
			$query = $this->db->query("DELETE from facsection WHERE facid='".$data."'");
			return true;
		}else if($cmd == 63){
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
		}else if($cmd == 64){
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
		}

		if($query->num_rows() > 0){
			return $query->result();
		}
		return false;
	}
}