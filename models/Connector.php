<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Connector extends CI_Model{
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
		date_default_timezone_set('Africa/Nairobi');
		$t = strtotime("+15 hours");
		$xx = date('H:i:sa', $t);
		$yy = date('Y-m-d', $t);
		$finalDT = "".$yy." ".$xx."";
		$AMPM = date('h:ia', $t);
		//***** Date Area ******
		
		if($cmd == 1){
			$u_fname = strtoupper($this->input->post('RegFirstName'));
			$u_mname = strtoupper($this->input->post('RegMiddleName'));
			$u_lname = strtoupper($this->input->post('RegLastName'));
			$u_initials = strtoupper($this->input->post('RegInitials'));
			$thisCheckSQL = $this->db->query("SELECT * from users WHERE u_fname='$u_fname' AND u_mname='$u_mname' AND u_lname='$u_lname'");
			if($thisCheckSQL->num_rows() > 0){
				return false;
			}else{
				$bChck = 0;
				$conf_hash = $this->db->query("SELECT conf_hash from users ORDER BY userid DESC LIMIT 1")->result();
				foreach ($conf_hash as $xxPx) {
					$bChck = (int)$xxPx->conf_hash + 1;
				}
				$usersRegistration = array(
					'username' => $this->input->post('RegUsername'),
					'password' => md5($this->input->post('RegPassW')),
					'salutation' => $this->input->post('RegSalute'),
					'u_fname' => $u_fname,
					'u_mname' => $u_mname,
					'u_lname' => $u_lname,
					'u_initials' => $u_initials,
					'u_gender' => $this->input->post('RegGend'),
					'affiliation' => $this->input->post('RegAffiliation'),
					'email' => $this->input->post('RegEmail'),
					'url' => $this->input->post('RegURL'),
					'phone' => $this->input->post('RegPhone'),
					'fax' => $this->input->post('RegFax'),
					'mailingaddrss' => $this->input->post('RegMailAdd'),
					'country_id' => $this->input->post('RegCountry'),
					'bio_state' => $this->input->post('RegBioStatement'),
					'check_confirmation' => $this->input->post('SendMeEmail'),
					'check_registeras' => $this->input->post('RegRegAs'),
					'remarks' => $this->input->post('RegRemarks'),
					'dateSigned' => $finalDT,
					'author' => 0,
					'reviewer' => 0,
					'editor' => 0,
					'author' => 1,
					'statacc' => "pending",
					'conf_hash' => $bChck
				);
				$this->db->insert('users', $usersRegistration);
				return true;
			}
		}else if($cmd == 2){
			$register = array();
			$prtlIns = array();
			$thisIP = $this->x->get_client_ip();
			$userN = $this->input->post('usernNjj');
			$userP = md5($this->input->post('passWjj'));
			$sqlxx = $this->db->query("SELECT * from users WHERE username='$userN' AND password='$userP' AND statacc='accepted'");
			if($sqlxx->num_rows() == 1){
				foreach ($sqlxx->result() as $x) {
					$register[0] = array(
						'thisIP' => $thisIP,
						'U_admin' => $x->admin,
						'U_reviewer' => $x->reviewer,
						'U_editor' => $x->editor,
						'U_author' => $x->author,
						'userID' => $x->userid,
						'userN' => $x->username,
						'passW' => $x->password,
						'uFN' => $x->u_fname,
						'uMN' => $x->u_mname,
						'uLN' => $x->u_lname
					);
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
						'email' => $x->email
					);
					if($x->admin == 1){
						$prtlIns += array('prio' => 4);
					}else{
						if($x->editor == 1){
							$prtlIns += array('prio' => 3);
						}else{
							if($x->reviewer == 1){
								$prtlIns += array('prio' => 2);
							}else{
								$prtlIns += array('prio' => 1);
							}
						}
					}
					$revalidate = $this->db->query("SELECT * FROM session WHERE ipaddress='$thisIP' AND datein='$yy' AND timeout='' AND userid='".$x->userid."'");
					if($revalidate->num_rows() < 1){
						$this->db->insert('session', $prtlIns);
					}else{
						foreach ($revalidate->result() as $val) {
							$this->db->where('id', $val->id);
							$this->db->update('session', $prtlIns);
						}
					}
					return $register;
				}
				$register[0] = array(
					'U_admin' => "null",
					'U_reviewer' => "null",
					'U_editor' => "null",
					'U_author' => "null"
				);
				return $register;
			}
			$register[0] = array(
				'U_admin' => "null",
				'U_reviewer' => "null",
				'U_editor' => "null",
				'U_author' => "null"
			);
			return $register;
		}else if($cmd == 3){
			$u_fname = strtoupper($this->input->post('nx_RegFirstName'));
			$u_mname = strtoupper($this->input->post('nx_RegMiddleName'));
			$u_lname = strtoupper($this->input->post('nx_RegLastName'));
			$u_initials = strtoupper($this->input->post('nx_RegInitials'));
			$thisCheckSQL = $this->db->query("SELECT * from users WHERE u_fname='$u_fname' AND u_mname='$u_mname' AND u_lname='$u_lname'");
			if($thisCheckSQL->num_rows() > 0){
				return false;
			}else{
				$usersRegistration = array(
					'username' => $this->input->post('nx_RegUsername'),
					'password' => md5($this->input->post('nx_RegPassW')),
					'salutation' => $this->input->post('nx_RegSalute'),
					'u_fname' => $u_fname,
					'u_mname' => $u_mname,
					'u_lname' => $u_lname,
					'u_initials' => $u_initials,
					'u_gender' => $this->input->post('nx_RegGend'),
					'affiliation' => $this->input->post('nx_RegAffiliation'),
					'email' => $this->input->post('nx_RegEmail'),
					'orcid_id' => $this->input->post('nx_RegORCIDiD'),
					'url' => $this->input->post('nx_RegURL'),
					'phone' => $this->input->post('nx_RegPhone'),
					'fax' => $this->input->post('nx_RegFax'),
					'mailingaddrss' => $this->input->post('nx_RegMailAdd'),
					'country_id' => $this->input->post('nx_RegCountry'),
					'bio_state' => $this->input->post('nx_RegBioStatement'),
					'check_confirmation' => $this->input->post('nx_SendMeEmail'),
					'check_registeras' => $this->input->post('nx_RegRegAs'),
					'remarks' => $this->input->post('nx_RegRemarks'),
					'dateSigned' => $finalDT,
					'author' => 0,
					'reviewer' => 0,
					'editor' => 0,
					'author' => 1,
					'statacc' => "pending"
				);
				$this->db->insert('users', $usersRegistration);
				$u_fname = strtoupper($this->input->post('nx_RegFirstName'));
				$u_mname = strtoupper($this->input->post('nx_RegMiddleName'));
				$u_lname = strtoupper($this->input->post('nx_RegLastName'));
				$fetchSQL = $this->db->query("SELECT * from users WHERE u_fname='$u_fname' AND u_mname='$u_mname' AND u_lname='$u_lname' LIMIT 1");
				foreach ($fetchSQL->result() as $kg) {
					$tempsession = array(
						'ipaddress' => $this->x->get_client_ip(),
						'done' => 'no',
						'userid' => $kg->userid
					);
					$this->db->insert('tempsession', $tempsession);
				}
			}
		}else if($cmd == 4){
			$xxIDnw = 0;
			$sqlTEmpSes = $this->db->query("SELECT * FROM tempsession WHERE ipaddress='".$this->x->get_client_ip()."' AND done='no'");
			foreach ($sqlTEmpSes->result() as $xX) {
				$xxIDnw = $xX->userid;
			}
			$fnm = $_FILES['file']['tmp_name'];
			ini_set($fnm, MAX);
			$dst = "./filePortal/".$_FILES['file']['name'];
			move_uploaded_file($fnm, $dst);
			$fileFields = array(
				'ownerid' => $xxIDnw,
				'filename' => $_FILES['file']['name'],
				'path' => $dst,
				'stat' => "pending"
			);
			$this->db->insert('fileportal', $fileFields);
		}else if($cmd == 5){
			$xxIDnw = 0;
			$sqlTEmpSes = $this->db->query("SELECT * FROM tempsession WHERE ipaddress='".$this->x->get_client_ip()."' AND done='no'");
			foreach ($sqlTEmpSes->result() as $xX) {
				$xxIDnw = $xX->userid;
			}
			$authorField = array(
				'memberto' => $xxIDnw,
				'completename' => $this->input->post('authorName'),
				'inscomp' => $this->input->post('insComp'),
				'contactnum' => $this->input->post('contNunbe'),
				'emailaut' => $this->input->post('autEmail'),
				'stat' => "pending"
			);
			$this->db->insert('coauthors', $authorField);
		}else if($cmd == 6){
			$xxIDnw = 0;
			$sqlTEmpSes = $this->db->query("SELECT * FROM tempsession WHERE ipaddress='".$this->x->get_client_ip()."' AND done='no'");
			foreach ($sqlTEmpSes->result() as $xX) {
				$xxIDnw = $xX->userid;
			}
			$journField = array(
				'author_id' => $xxIDnw,
				'title' => $this->input->post('titleXx'),
				'fieldarea' => $this->input->post('areaXxF'),
				'abstract' => $this->input->post('abstractXx'),
				'keywords' => $this->input->post('keywordsXx'),
				'stat' => "pending",
				'datetime' => $finalDT
			);
			$this->db->insert('journal', $journField);
			$res = $this->db->query("SELECT * from journal WHERE title='".$this->input->post('titleXx')."' AND author_id='".$xxIDnw."'");
			foreach ($res->result() as $kb) {
				$this->db->query("UPDATE coauthors set authorTo='".$kb->j_id."',stat='done' WHERE memberto='".$xxIDnw."' AND stat='pending'");
				$this->db->query("UPDATE fileportal set attachedTo='".$kb->j_id."' WHERE ownerid='".$xxIDnw."' AND stat='pending'");
				break;
			}


			$sqladmn = $this->db->query("SELECT email from users WHERE admin=1");
			$sqlxx2 = $this->db->query("SELECT salutation, u_lname, u_fname from users WHERE userid='".$xxIDnw."'");
			$emailadmn = "";$sernder = "";
			foreach ($sqladmn->result() as $xadm) {
				$emailadmn = $xadm->email;
			}
			foreach ($sqlxx2->result() as $x2) {
				$sernder = "".$x2->salutation." ".$x2->u_fname." ".$x2->u_lname."";
			}

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
		}else if($cmd == 7){
			$register = array();
			$prtlIns = array();
			$thisIP = $this->x->get_client_ip();
			$userN = $this->input->post('usernNjj22');
			$userP = md5($this->input->post('passWjj22'));
			$sqlxx = $this->db->query("SELECT * from users WHERE username='$userN' AND password='$userP' AND statacc='accepted' LIMIT 1");
			if($sqlxx->num_rows() == 1){
				foreach ($sqlxx->result() as $x) {
					$register[0] = array(
						'thisIP' => $thisIP,
						'U_admin' => $x->admin,
						'U_reviewer' => $x->reviewer,
						'U_editor' => $x->editor,
						'U_author' => $x->author,
						'userID' => $x->userid,
						'userN' => $x->username,
						'passW' => $x->password,
						'uFN' => $x->u_fname,
						'uMN' => $x->u_mname,
						'uLN' => $x->u_lname
					);
					$tempsession = array(
						'ipaddress' => $this->x->get_client_ip(),
						'done' => 'no',
						'userid' => $x->userid
					);
					$this->db->insert('tempsession', $tempsession);
					return $register;
				}
				$register[0] = array(
					'U_admin' => "null",
					'U_reviewer' => "null",
					'U_editor' => "null",
					'U_author' => "null"
				);
				return $register;
			}
			$register[0] = array(
				'U_admin' => "null",
				'U_reviewer' => "null",
				'U_editor' => "null",
				'U_author' => "null"
			);
			return $register;
		}

		if($this->db->affected_rows() > 0){
			return true;
		}
		return false;
	}

	function getData($cmd){
		$onN = 0;
		//***** Date Area ******
		date_default_timezone_set('Africa/Nairobi');
		$t = strtotime("+15 hours");
		$xx = date('H:i:sa', $t);
		$yy = date('Y-m-d');
		$finalDT = "".$yy." ".$xx."";
		$AMPM = date('h:ia', $t);
		
		if($cmd == 1){
			$query = $this->db->query("SELECT * FROM country ORDER BY country_name ASC");
		}else if($cmd == 2){
			$xxIDnw = 0;
			$sqlTEmpSes = $this->db->query("SELECT * FROM tempsession WHERE ipaddress='".$this->x->get_client_ip()."' AND done='no'");
			foreach ($sqlTEmpSes->result() as $xX) {
				$xxIDnw = $xX->userid;
			}
			$register = array();
			$query = $this->db->query("SELECT * FROM fileportal WHERE ownerid='$xxIDnw' AND stat='pending'");
			foreach ($query->result() as $kb) {
				$register[0] = array('filename' => $kb->filename);
				return $register;
			}
			$register[0] = array('filename' => null);
			return $register;
		}else if($cmd == 3){
			$xxIDnw = 0;
			$sqlTEmpSes = $this->db->query("SELECT * FROM tempsession WHERE ipaddress='".$this->x->get_client_ip()."' AND done='no'");
			foreach ($sqlTEmpSes->result() as $xX) {
				$xxIDnw = $xX->userid;
			}
			$query = $this->db->query("SELECT * FROM coauthors WHERE stat='pending' AND memberto='$xxIDnw' ORDER BY journid DESC");
		}else if($cmd == 4){
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE journal.approvedpublished=1 ORDER BY journal.j_id DESC LIMIT 3");
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
					'vol_volume' => $k->vol_volume,
					'vol_number' => $k->vol_number,
					'vol_page' => $k->vol_page,
					'vol_year' => $k->vol_year,
					'aut' => $this->db->query("SELECT * FROM coauthors WHERE authorTo='".$k->j_id."'")->result(),
					'datetimeSub' => $k->datetime,
					'fileDatax' => $this->db->query("SELECT * from fileportal WHERE attachedTo='".$k->j_id."' AND taskidref=0 ORDER BY fileid DESC LIMIT 1")->result(),
					'realAuth' => "".$k->salutation." ".$k->u_fname." ".$k->u_lname."",
					'image' => $k->image,
					'datetimepublished' => $k->datetimepublished
				);
				$x++;
			}
			return $resData;
		}else if($cmd == 5){
			$query = $this->db->query("SELECT * FROM lanews ORDER BY id DESC");
		}else if($cmd == 6){
			$query = $this->db->query("SELECT * from facsection ORDER BY description ASC");
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
		}else if($cmd == 7){
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
					'vol_volume' => $k->vol_volume,
					'vol_number' => $k->vol_number,
					'vol_page' => $k->vol_page,
					'vol_year' => $k->vol_year,
					'aut' => $this->db->query("SELECT * FROM coauthors WHERE authorTo='".$k->j_id."'")->result(),
					'datetimeSub' => $k->datetime,
					'fileDatax' => $this->db->query("SELECT * from fileportal WHERE attachedTo='".$k->j_id."' AND taskidref=0 ORDER BY fileid DESC LIMIT 1")->result(),
					'realAuth' => "".$k->salutation." ".$k->u_fname." ".$k->u_lname."",
					'image' => $k->image,
					'datetimepublished' => $k->datetimepublished
				);
				$x++;
			}
			return $resData;
		}else if($cmd == 8){
			$data = $this->input->get('data');
			$query = $this->db->query("SELECT * FROM journal LEFT JOIN users ON users.userid=journal.author_id WHERE journal.approvedpublished=1  AND journal.title LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND users.u_lname LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND users.u_fname LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND journal.year LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND journal.month LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND journal.vol_volume LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND journal.vol_page LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND journal.vol_number LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND journal.vol_year LIKE '%".$data."%' OR 
				journal.approvedpublished=1 AND journal.datetimepublished LIKE '%".$data."%' 
				ORDER BY journal.j_id DESC");
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
					'vol_volume' => $k->vol_volume,
					'vol_number' => $k->vol_number,
					'vol_page' => $k->vol_page,
					'vol_year' => $k->vol_year,
					'aut' => $this->db->query("SELECT * FROM coauthors WHERE authorTo='".$k->j_id."'")->result(),
					'datetimeSub' => $k->datetime,
					'fileDatax' => $this->db->query("SELECT * from fileportal WHERE attachedTo='".$k->j_id."' AND taskidref=0 ORDER BY fileid DESC LIMIT 1")->result(),
					'realAuth' => "".$k->salutation." ".$k->u_fname." ".$k->u_lname."",
					'image' => $k->image,
					'datetimepublished' => $k->datetimepublished
				);
				$x++;
			}
			return $resData;
		}

		if($query->num_rows() > 0){
			return $query->result();
		}
		return false;
	}
}