<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Strt Extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('connector','x');
		$this->load->model('admnCnn','y');
	}
	function index(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		$ses = array('done' => 'yes');
		$this->db->where('ipaddress',$thisIP);
		$this->db->update('tempsession', $ses);
		if($sqlxx->num_rows() > 0){
			foreach ($sqlxx->result() as $log) {
				if($log->prio == 4){
					redirect('loggedIn/admFxFX');
				}else if($log->prio == 3){
					redirect('loggedIn/editorxFX');
				}else if($log->prio == 2){
					redirect('loggedIn/reviewrxFX');
				}else if($log->prio == 1){
					redirect('loggedIn/rglrFxfx');
				}else{
					$data = array(
						'content' => 'landing',
						'dataSlider' => $this->db->query("SELECT * FROM slider ORDER BY sel ASC")->result(),
						'slddes' => $query = $this->db->query("SELECT * FROM slider ORDER BY sel ASC")->result(),
						'event' => $query = $this->db->query("SELECT * FROM lanews ORDER BY id DESC LIMIT 1")->result(),
						'event2' => $query = $this->db->query("SELECT * FROM lanews ORDER BY id DESC LIMIT 4")->result(),
					);
					$this->load->view('pageMain/template',$data);
				}
			}
		}else{
			$data = array(
				'content' => 'landing',
				'dataSlider' => $this->db->query("SELECT * FROM slider ORDER BY sel ASC")->result(),
				'slddes' => $query = $this->db->query("SELECT * FROM slider ORDER BY sel ASC")->result(),
				'event' => $query = $this->db->query("SELECT * FROM lanews ORDER BY id DESC LIMIT 1")->result(),
				'event2' => $query = $this->db->query("SELECT * FROM lanews ORDER BY id DESC LIMIT 4")->result(),
			);
			$this->load->view('pageMain/template',$data);
		}
	}
	public function lgin(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		$ses = array('done' => 'yes');
		$this->db->where('ipaddress',$thisIP);
		$this->db->update('tempsession', $ses);
		if($sqlxx->num_rows() > 0){
			foreach ($sqlxx->result() as $log) {
				if($log->prio == 4){
					redirect('LoggedIn/admFxFX');
				}else if($log->prio == 3){
					redirect('LoggedIn/editorxFX');
				}else if($log->prio == 2){
					redirect('LoggedIn/reviewrxFX');
				}else if($log->prio == 1){
					redirect('LoggedIn/rglrFxfx');
				}else{
					$data = array(
						'content' => 'login',
						'dataSlider' => $this->db->query("SELECT * FROM slider ORDER BY sel ASC")->result()
					);
					$this->load->view('pageMain/template',$data);
				}
			}
		}else{
			$data = array(
				'content' => 'login',
				'dataSlider' => $this->db->query("SELECT * FROM slider ORDER BY sel ASC")->result()
			);
			$this->load->view('pageMain/template',$data);
		}
	}
	public function CreateA(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		$ses = array('done' => 'yes');
		$this->db->where('ipaddress',$thisIP);
		$this->db->update('tempsession', $ses);
		if($sqlxx->num_rows() > 0){
			foreach ($sqlxx->result() as $log) {
				if($log->prio == 4){
					redirect('LoggedIn/admFxFX');
				}else if($log->prio == 3){
					redirect('LoggedIn/editorxFX');
				}else if($log->prio == 2){
					redirect('LoggedIn/reviewrxFX');
				}else if($log->prio == 1){
					redirect('LoggedIn/rglrFxfx');
				}else{
					$data = array(
						'content' => 'createa',
						'dataSlider' => $this->db->query("SELECT * FROM slider ORDER BY sel ASC")->result()
					);
					$this->load->view('pageMain/template',$data);
				}
			}
		}else{
			$data = array(
				'content' => 'createa',
				'dataSlider' => $this->db->query("SELECT * FROM slider ORDER BY sel ASC")->result()
			);
			$this->load->view('pageMain/template',$data);
		}
	}
	function background(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		$ses = array('done' => 'yes');
		$this->db->where('ipaddress',$thisIP);
		$this->db->update('tempsession', $ses);
		if($sqlxx->num_rows() > 0){
			foreach ($sqlxx->result() as $log) {
				if($log->prio == 4){
					redirect('loggedIn/admFxFX');
				}else if($log->prio == 3){
					redirect('loggedIn/editorxFX');
				}else if($log->prio == 2){
					redirect('loggedIn/reviewrxFX');
				}else if($log->prio == 1){
					redirect('loggedIn/rglrFxfx');
				}else{
					$data = array(
						'content' => 'background'
					);
					$this->load->view('pageMain/template',$data);
				}
			}
		}else{
			$data = array(
				'content' => 'background'
			);
			$this->load->view('pageMain/template',$data);
		}
	}
	function latestnews(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		$ses = array('done' => 'yes');
		$this->db->where('ipaddress',$thisIP);
		$this->db->update('tempsession', $ses);
		if($sqlxx->num_rows() > 0){
			foreach ($sqlxx->result() as $log) {
				if($log->prio == 4){
					redirect('loggedIn/admFxFX');
				}else if($log->prio == 3){
					redirect('loggedIn/editorxFX');
				}else if($log->prio == 2){
					redirect('loggedIn/reviewrxFX');
				}else if($log->prio == 1){
					redirect('loggedIn/rglrFxfx');
				}else{
					$data = array(
						'content' => 'newsupdate'
					);
					$this->load->view('pageMain/template',$data);
				}
			}
		}else{
			$data = array(
				'content' => 'newsupdate'
			);
			$this->load->view('pageMain/template',$data);
		}
	}
	function facilities(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		$ses = array('done' => 'yes');
		$this->db->where('ipaddress',$thisIP);
		$this->db->update('tempsession', $ses);
		if($sqlxx->num_rows() > 0){
			foreach ($sqlxx->result() as $log) {
				if($log->prio == 4){
					redirect('loggedIn/admFxFX');
				}else if($log->prio == 3){
					redirect('loggedIn/editorxFX');
				}else if($log->prio == 2){
					redirect('loggedIn/reviewrxFX');
				}else if($log->prio == 1){
					redirect('loggedIn/rglrFxfx');
				}else{
					$data = array(
						'content' => 'facilities'
					);
					$this->load->view('pageMain/template',$data);
				}
			}
		}else{
			$data = array(
				'content' => 'facilities'
			);
			$this->load->view('pageMain/template',$data);
		}
	}
	function EditorialBoard(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		$ses = array('done' => 'yes');
		$this->db->where('ipaddress',$thisIP);
		$this->db->update('tempsession', $ses);
		if($sqlxx->num_rows() > 0){
			foreach ($sqlxx->result() as $log) {
				if($log->prio == 4){
					redirect('loggedIn/admFxFX');
				}else if($log->prio == 3){
					redirect('loggedIn/editorxFX');
				}else if($log->prio == 2){
					redirect('loggedIn/reviewrxFX');
				}else if($log->prio == 1){
					redirect('loggedIn/rglrFxfx');
				}else{
					$data = array(
						'content' => 'orgstruct'
					);
					$this->load->view('pageMain/template',$data);
				}
			}
		}else{
			$data = array(
				'content' => 'orgstruct'
			);
			$this->load->view('pageMain/template',$data);
		}
	}
	function ragenda(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		$ses = array('done' => 'yes');
		$this->db->where('ipaddress',$thisIP);
		$this->db->update('tempsession', $ses);
		if($sqlxx->num_rows() > 0){
			foreach ($sqlxx->result() as $log) {
				if($log->prio == 4){
					redirect('loggedIn/admFxFX');
				}else if($log->prio == 3){
					redirect('loggedIn/editorxFX');
				}else if($log->prio == 2){
					redirect('loggedIn/reviewrxFX');
				}else if($log->prio == 1){
					redirect('loggedIn/rglrFxfx');
				}else{
					$data = array(
						'content' => 'ragenda'
					);
					$this->load->view('pageMain/template',$data);
				}
			}
		}else{
			$data = array(
				'content' => 'ragenda'
			);
			$this->load->view('pageMain/template',$data);
		}
	}
	function pubartic(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		$ses = array('done' => 'yes');
		$this->db->where('ipaddress',$thisIP);
		$this->db->update('tempsession', $ses);
		if($sqlxx->num_rows() > 0){
			foreach ($sqlxx->result() as $log) {
				if($log->prio == 4){
					redirect('loggedIn/admFxFX');
				}else if($log->prio == 3){
					redirect('loggedIn/editorxFX');
				}else if($log->prio == 2){
					redirect('loggedIn/reviewrxFX');
				}else if($log->prio == 1){
					redirect('loggedIn/rglrFxfx');
				}else{
					$data = array(
						'content' => 'pubartic'
					);
					$this->load->view('pageMain/template',$data);
				}
			}
		}else{
			$data = array(
				'content' => 'pubartic'
			);
			$this->load->view('pageMain/template',$data);
		}
	}
	function downloadables(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		$ses = array('done' => 'yes');
		$this->db->where('ipaddress',$thisIP);
		$this->db->update('tempsession', $ses);
		if($sqlxx->num_rows() > 0){
			foreach ($sqlxx->result() as $log) {
				if($log->prio == 4){
					redirect('loggedIn/admFxFX');
				}else if($log->prio == 3){
					redirect('loggedIn/editorxFX');
				}else if($log->prio == 2){
					redirect('loggedIn/reviewrxFX');
				}else if($log->prio == 1){
					redirect('loggedIn/rglrFxfx');
				}else{
					$data = array(
						'content' => 'dwnloadable',
						'downldld' => $query = $this->db->query("SELECT * FROM downloada ORDER BY id DESC")->result(),
					);
					$this->load->view('pageMain/template',$data);
				}
			}
		}else{
			$data = array(
				'content' => 'dwnloadable',
				'downldld' => $query = $this->db->query("SELECT * FROM downloada ORDER BY id DESC")->result(),
			);
			$this->load->view('pageMain/template',$data);
		}
	}
	public function valydd(){
		//***** Date Area ******
		date_default_timezone_set('Asia/Manila');
		$xx = date('H:i:sa', time());
		$yy = date('Y-m-d', time());
		$finalDT = "".$yy." ".$xx."";
		$AMPM = date('h:ia', time());
		//***** Date Area ******
		$epr = $_GET['epr'];
		$oopre = $_GET['oopre'];
		$ddl = $_GET['ddl'];
		$vl = $this->db->query("SELECT * FROM users WHERE userid='$ddl' AND password='$oopre' AND reviewer=0");
		$usern = '';
		if($vl->num_rows() > 0){
			$tempeditor = 0; $tempreviewer = 0;
			foreach ($vl->result() as $llv) {
				$usern = md5($llv->username);
				$tempeditor = $llv->tempeditor;
				$tempreviewer = $llv->tempreviewer;
			}
			if($epr == $usern){
				if($tempeditor == 1 && $tempreviewer == 1){
					$stat = array( 'reviewer' => 1, 'editor' => 1 );
				}else if($tempeditor == 1){
					$stat = array( 'editor' => 1 );
				}else if($tempreviewer == 1){
					$stat = array( 'reviewer' => 1 );
				}
				$this->db->where('userid', $ddl);
				$this->db->update('users', $stat);

				// **********
				$thisIP = $this->x->get_client_ip();
				$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");

				$ses = array('done' => 'yes');
				$this->db->where('userid',$thisIP);
				$this->db->update('tempsession', $ses);
				$ses = array('prio' => 2, 'reviewer' => 1);
				$this->db->where('userid',$ddl);
				$this->db->update('session', $ses);

				/******** Logs *******/
				$logFF = array(
					'log' => "Accepted your invite as Reviewer",
					'datelog' => $yy,
					'timelog' => $xx,
					'userid' => $ddl,
					'typedesfor' => 'reviewer'
				);
				$this->db->insert('activitylogs', $logFF);
				/******** End Logs *******/

				/******** Sending Mail to administrator *******/
				$sqladmn = $this->db->query("SELECT email from users WHERE admin=1");
				$sqlxx2 = $this->db->query("SELECT salutation, u_lname, u_fname from users WHERE userid='".$ddl."'");
				$emailadmn = "";$sernder = "";
				foreach ($sqladmn->result() as $xadm) {
					$emailadmn = $xadm->email;
				}
				foreach ($sqlxx2->result() as $x2) {
					$sernder = "".$x2->salutation." ".$x2->u_fname." ".$x2->u_lname."";
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
				$mail->Subject = 'Invitation for Review was accepted';
				$mail->isHTML(true);

				$mailContent = "<h4>System generated email for jESEG Administrator:</h4>
					<p style='font-size:25px;font-family:calibri;'><b>".$sernder."</b> accepted your invitation as <b>Reviewer</b>.<br>
						Visit and Login to jESEG with this link: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
					</p>";

				$mail->Body = $mailContent;

				if(!$mail->send()){
					
				}else{
					
				}

				/******** End Sending Mail to administrator *******/



				if($sqlxx->num_rows() > 0){
					foreach ($sqlxx->result() as $log) {
						if($log->prio == 4){
							redirect('loggedIn/admFxFX');
						}else if($log->prio == 3){
							redirect('loggedIn/editorxFX');
						}else if($log->prio == 2){
							redirect('loggedIn/reviewrxFX');
						}else if($log->prio == 1){
							redirect('loggedIn/rglrFxfx');
						}else{
							$data = array(
								'content' => 'landing',
								'dataSlider' => $this->db->query("SELECT * FROM slider ORDER BY sel ASC")->result(),
								'slddes' => $query = $this->db->query("SELECT * FROM slider ORDER BY sel ASC")->result(),
								'event' => $query = $this->db->query("SELECT * FROM lanews ORDER BY id DESC LIMIT 1")->result(),
								'event2' => $query = $this->db->query("SELECT * FROM lanews ORDER BY id DESC LIMIT 4")->result(),
							);
							$this->load->view('pageMain/template',$data);
						}
					}
				}else{
					$data = array(
						'content' => 'landing',
						'dataSlider' => $this->db->query("SELECT * FROM slider ORDER BY sel ASC")->result(),
						'slddes' => $query = $this->db->query("SELECT * FROM slider ORDER BY sel ASC")->result(),
						'event' => $query = $this->db->query("SELECT * FROM lanews ORDER BY id DESC LIMIT 1")->result(),
						'event2' => $query = $this->db->query("SELECT * FROM lanews ORDER BY id DESC LIMIT 4")->result(),
					);
					$this->load->view('pageMain/template',$data);
				}
				// **********
			}else{
				$this->load->view('errors/index');
			}
		}else{
			$this->load->view('errors/index');
		}
	}
	public function accptREvpr(){
		//***** Date Area ******
		date_default_timezone_set('Asia/Manila');
		$xx = date('H:i:sa', time());
		$yy = date('Y-m-d', time());
		$finalDT = "".$yy." ".$xx."";
		$AMPM = date('h:ia', time());
		//***** Date Area ******
		$epr = $_GET['epr'];
		$oopre = $_GET['oopre'];
		$ddl = $_GET['ddl'];
		$jid = $_GET['jid'];
		$ttle = $_GET['ttle'];
		$vl = $this->db->query("SELECT * FROM users LEFT JOIN revto ON users.userid=revto.revto WHERE users.userid='$ddl' AND users.password='$oopre' AND revto.stat='pending' AND revto.journ_id='".$jid."'");
		$usern = '';$copyjournid = 0;
		if($vl->num_rows() > 0){
			foreach ($vl->result() as $llv) {
				$usern = md5($llv->username);
				$copyjournid = $llv->id;
			}
			if($epr == $usern){
				$stat = array( 
					'stat' => 'accepted',
					'dateaccepted' => $yy,
					'timeaccepted' => $xx
				);
				$this->db->where('id', $copyjournid);
				$this->db->update('revto', $stat); // continue here...

				/******** Logs *******/
				$logFF = array(
					'log' => "Accepted your invite as Reviewer of the Article entitled: <b>".$ttle."</b>",
					'datelog' => $yy,
					'timelog' => $xx,
					'userid' => $ddl,
					'typedesfor' => 'editor'
				);
				$this->db->insert('activitylogs', $logFF);
				/******** End Logs *******/


				/******** Sending Mail to administrator *******/
				$sqladmn = $this->db->query("SELECT email from users WHERE admin=1");
				$sqlxx2 = $this->db->query("SELECT u_fname, u_mname, u_lname from users WHERE userid='".$ddl."'");
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
				$mail->Subject = 'Invitation for Review was accepted';
				$mail->isHTML(true);

				$mailContent = "<h4>System generated email for jESEG Administrator:</h4>
					<p style='font-size:25px;font-family:calibri;'><b>".$sernder."</b> Accepted your invite as Reviewer of an Article entitled: <b>".$ttle."</b><br>
						To view this details, Visit and Login to jESEG @: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
					</p>";

				$mail->Body = $mailContent;

				if(!$mail->send()){
					
				}else{
					
					// Sending Mail to author...
					$autEm = $this->db->query("SELECT users.email, users.userid FROM journal LEFT JOIN users ON journal.author_id=users.userid WHERE journal.j_id='".$jid."'");
					$getautEm = "";$resIDcpp = 0;
					foreach ($autEm->result() as $vv) {
						$getautEm = $vv->email;
						$resIDcpp = $vv->userid;
					}

					$mail->addAddress($getautEm);
					$mail->Subject = 'Article Update';
					$mail->isHTML(true);

					$mailContent = "<h4>System generated email:</h4>
						<p style='font-size:25px;font-family:calibri;'>One of the <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>Journal for <b>Environmental Sciences and Eco-Governance</b></a> REVIEWER are now reviewing your article entitled: <br>
							<b>".$ttle."</b>. Constant updates will be made with our journal system and via email.<br>
							To view this details, Visit and Login to jESEG @: <a href='http://jeseg.carsu.edu.ph/index.php/Strt/lgin' target='__blank'>jeseg.carsu.edu.ph</a>
						</p>";

					$mail->Body = $mailContent;
					// End Sending Mail to author...
					if(!$mail->send()){
						return false;
					}else{
						/******** Logs Reviewer *******/
						$logFF = array(
							'journal_idlog' => $jid,
							'logrev' => "Your article entitled: ".$ttle." is now under review. Constant updates will be made with this journal system and via email.",
							'date' => $yy,
							'time' => $xx,
							'userid' => $resIDcpp,
						);
						$this->db->insert('reviewerlog', $logFF);
						/******** End Logs Reviewer *******/
					}


				}
				/******** End Sending Mail to administrator *******/


				$this->load->view('otherlinks/link1');
			}else{
				$this->load->view('errors/index');
			}
		}else{
			$this->load->view('errors/index');
		}
	}

	function getJournalxPPT2(){
		$result = $this->y->getData(22);
		echo json_encode($result);
	}
	function getJournalxPPT2x(){
		$result = $this->y->getData(13);
		echo json_encode($result);
	}
	function getJournalxPPT2x_Searhc(){
		$result = $this->y->getData(23);
		echo json_encode($result);
	}
	function getJournalxPPT2x_Searhc2(){
		$result = $this->y->getData(25);
		echo json_encode($result);
	}
	function getKLewNxx(){
		$result = $this->y->getData(26);
		echo json_encode($result);
	}
	function getPOlaxEccact(){
		$result = $this->y->getData(31);
		echo json_encode($result);
	}
	function getPOlaxEccact_Search(){
		$result = $this->y->getData(32);
		echo json_encode($result);
	}
	function getgutdnwld(){
		$result = $this->y->getData(33);
		echo json_encode($result);
	}
	function getgutdnwld_serPX(){
		$result = $this->y->getData(34);
		echo json_encode($result);
	}
	function getgutdnwld2(){
		$result = $this->y->getData(35);
		echo json_encode($result);
	}
	function getPOlaxEccact2(){
		$result = $this->y->getData(36);
		echo json_encode($result);
	}
	function getKLewNxx2(){
		$result = $this->y->getData(37);
		echo json_encode($result);
	}
	function getJournalxPPT2x2(){
		$result = $this->y->getData(38);
		echo json_encode($result);
	}
	function gtPOilili(){
		$result = $this->y->getData(39);
		echo json_encode($result);
	}
	function gtPOilili2(){
		$result = $this->y->getData(40);
		echo json_encode($result);
	}
	function gtPOilili2_ser(){
		$result = $this->y->getData(41);
		echo json_encode($result);
	}
	function gtththt(){
		$result = $this->y->getData(46);
		echo json_encode($result);
	}
	function gtDolxxRO(){
		$result = $this->x->getData(4);
		echo json_encode($result);
	}
	function gtAllNsxxWop(){
		$result = $this->x->getData(5);
		echo json_encode($result);
	}
	function takeRandO(){
		$result = $this->x->getData(6);
		echo json_encode($result);
	}
	function admnRdRct(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		if($sqlxx->num_rows() == 1){
			redirect('LoggedIn/admFxFX');
		}else{
			redirect('strt');
		}
	}
	function reviewerArea(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		if($sqlxx->num_rows() == 1){
			redirect('loggedIn/reviewrxFX');
		}else{
			redirect('strt');
		}
	}
	function editorArea(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		if($sqlxx->num_rows() == 1){
			redirect('loggedIn/editorxFX');
		}else{
			redirect('strt');
		}
	}
	function reglrRdRct(){
		$thisIP = $this->x->get_client_ip();
		$sqlxx = $this->db->query("SELECT * from session WHERE ipaddress='$thisIP' AND timeout=''");
		if($sqlxx->num_rows() == 1){
			redirect('loggedIn/rglrFxfx');
		}else{
			redirect('strt');
		}
	}

	function sbmitRegFrm(){
		$result = $this->x->submitData(1);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function sbmitRegFrm2(){
		$result = $this->x->submitData(3);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function reqstLoggedIn(){
		$result = $this->x->submitData(2);
		echo json_encode($result);
	}
	function reqstLoggedIn2(){
		$result = $this->x->submitData(7);
		echo json_encode($result);
	}
	function getCountry(){
		$result = $this->x->getData(1);
		echo json_encode($result);
	}
	function sbmtFileDat(){
		$result = $this->x->submitData(4);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function getNameofFile(){
		$result = $this->x->getData(2);
		echo json_encode($result);
	}
	function sbmitNewAuthor(){
		$result = $this->x->submitData(5);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function getlslsaauthor(){
		$result = $this->x->getData(3);
		echo json_encode($result);
	}
	function sbmitThsJournalxXx(){
		$result = $this->x->submitData(6);
		$msg['success'] = false;
		if($result){
			$msg['success'] = true;
		}
		echo json_encode($msg);
	}
	function gtPleoxlsas(){
		$result = $this->x->getData(7);
		echo json_encode($result);
	}
	function gtPleoxlsasSearch(){
		$result = $this->x->getData(8);
		echo json_encode($result);
	}
	function gtPleoxlsasGEtPage(){
		$result = $this->x->getData(7);
		echo json_encode($result);
	}
}