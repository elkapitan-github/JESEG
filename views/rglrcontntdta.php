<div style="font-family:arial">
	<center>
		<div id="topBaseS" style="background:white;box-shadow:inset -2px -40px 100px #aece71;padding-bottom:10px;">
			<div style="width:80%;border-bottom:3px solid #aeaeae;text-align:left">
				<span id="dataimg" style="float:right;">
					<?php
					$varSTr = "";
					foreach ($imageres as $xxPx) {
						$varSTr = "";
						$varSTr = $xxPx->image;
						if($varSTr == ""){
							echo '<font id="sappPPLxx"><img src="nwng/msicon.jpg" style="width:107px;height:110px;margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)"></font>';
						}else{
							echo '<font id="sappPPLxx"><img src="./userimage/'.$varSTr.'" style="width:107px;height:110px;margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)"></font>';
						}
					}
					?>
				</span>
				<br><br><font style="font-size:30px;"><?php echo $ComName?></font><br>
				<font style="font-family:arial">&nbspRegistered As: 
					<select id="Utype" name="Utype" style="width:100px;padding:2px;padding-left:5px;cursor:pointer;">
				        <?php
				        if($authorSel == 1){
				        	echo '<option name="Utype" value="1">Author</option>';
				        }
				        if($reviewerSel == 1){
				        	echo '<option name="Utype" value="2">Reviewer</option>';
				        }
				        if($editorSel == 1){
				        	echo '<option name="Utype" value="3">Editor</option>';
				        }
				        ?>
				    </select>
				    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				    <?php
				    foreach ($lastLog as $xLastLog) {
				    	echo "Last Visit: " . $xLastLog->datein . " " . $xLastLog->timeout;
				    }
				    ?>
				<br><font style="font-size:8.5px;">...</font>
			</div>
			<div style="width:80%;text-align:left;">
				<font style="font-size:17px;"><a href="http:\\www.carsu.edu.ph" target="__blank" style="text-decoration:none;color:black"><b>CARSU</b></a> Online Journal System</font>
			</div>
		</div>
		<div style="background:#dddfdd;padding:10px;border-top:1px solid #aeaeae;box-shadow:0px 0px 4px rgba(0, 0, 0, .3)">
			<font id="cclck0" class="btn btn-default" style="background:#cbe894;font-size:20px;"><i class="fa fa-home"></i></font>
			<!--<font id="cclckNoteX" class="btn btn-default">Notes and Announcements</font>-->
			<!--<font id="cclck1" class="btn btn-default">Personal Information</font>-->
			<font id="cclck2" class="btn btn-default">My Articles</font>
			<font id="cclck3" class="btn btn-default">Researchs and Articles</font>
			<!--<font id="cclck4" class="btn btn-default">Messages</font>-->
			<font id="cclck1" class="btn btn-default cclck1x">Settings</font>
			<a href="<?php echo base_url('gtReglr?epr=about');?>"><font class="btn btn-default"><i class="fa fa-mobile-phone" style="font-size:18px;"></i>&nbsp Phone User</font></a>
			<a onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=1000,height=640,directories=no,location=no'); return false;" rel="nofollow" href="http://journal.carsu.edu.ph/index.php/index/help" target="__blank" style="text-decoration:none;color:blue;cursor:pointer;"><font id="cclck6" class="btn btn-default">Journal <b style="color:blue;">Help</b></font></a>
			<font>
				<font id="placeNoteHHre"></font>
				<font id="clickToDipsNote" class="btn btn-default" data-toggle="modal" data-target=".bs-viewNoteds-modal-lg"><i class="fa fa-bell" style="font-size:21.3px;"></i></font>
			</font>
			<font id="cclck7" class="btn btn-default">
				<i class="fa fa-sort-asc" style="font-size:21px;"></i>
				<i class="fa fa-sort-desc" style="font-size:21px;display:none;"></i>
			</font>
			<font id="cclck8" class="btn btn-default" style="display:none;">
				<i class="fa fa-sort-desc" style="font-size:21px;"></i>
			</font>
			<a href="<?php echo base_url('gtReglr/lcklc');?>"><font id="cclck8" class="btn btn-default">
				Logout
			</font></a>
		</div>
	</center>
	<div id="fox" style="padding:10px;height:70%;background:white;overflow:auto">
		<div id="RRwr" style="display:none;padding-left:100px;padding-right:100px;">
			<CENTER><h3>Reviewed Journal</h3></CENTER>
		</div>
		<div id="forPublishedJourn" style="display:none;padding-left:0px;padding-right:0px;">
			<div class="col-md-12">
				<div class="col-md-8" style="border-right:1px solid #aeaeae;height:100%;margin-top:5px;">
					<font style="float:right;margin-top:-5px;">
						<input type="text" id="SearchBarArtAutxx01" name="SearchBarArtAutxx01" style="padding:5px;padding-left:8px;width:250px;box-shadow:inset 0 -0.5px 7px rgba(0, 0, 0, .3) " placeholder="Search your article..."> <font id="goSEarchpubArtViewAreaYYYYx" class="btn btn-default" style="padding:5px;padding-left:7px;padding-right:7px;">Go</font> <font id="sxjjwwAllshw" class="btn btn-default" style="padding:5px;padding-left:7px;padding-right:7px;">Show All</font>
					</font>
					<font id="click123art1" class="btn btn-default" style="padding:3px;padding-left:8px;padding-right:8px;border-bottom:2px solid red">New Articles</font> 
					<font id="click123art2" class="btn btn-default" style="padding:3px;padding-left:8px;padding-right:8px;">Published Articles</font>
					<font id="clickAddNwJJrxx" class="btn btn-default" data-toggle="modal" data-target=".bs-ADdMyJJournal-modal-lg" style="padding:2px;background:#3c78a3;color:white;padding-left:10px;padding-right:10px;">Add New Article &nbsp<i class="fa fa-plus"></i></font> 
					<div id="pubArtViewAreaYYYYx2" style="display:none;padding:2px;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;box-shadow:inset 0 -0.5px 7px rgba(0, 0, 0, .3);margin-top:10px;font-size:11px;height:85%;background:#dddddd;overflow:auto;">
						<Br><font style="margin-left:10px;font-size:35px;"><div style="padding:30px;">Click "Add new article" for review!</div></font>
					</div>
					<div id="newArtViewAreaYYYYx1">
						<div id="displayMyJournalx" style="padding:2px;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;box-shadow:inset 0 -0.5px 7px rgba(0, 0, 0, .3);margin-top:10px;font-size:11px;height:85%;background:#dddddd;overflow:auto;"><Br><font style="margin-left:10px;font-size:35px;"><div style="padding:30px;">Click "Add new article" for review!</div></font></div>
						&nbsp <font class="hjkllllddCont"></font>
					</div>
				</div>
				<div class="col-md-4">
					<div id="homeListDsplaasdaw" style="padding:5px;">
						<center>
							<a href="#" data-toggle="modal" data-target=".bs-viewPicRuleArt-modal-lg"><img src="<?php echo base_url('nwng/edprocesslarge.png');?>" style="box-shadow:0px 0px 4px rgba(0, 0, 0, .42);width:440px;"></a>
						</center>
					</div>
					<div id="base12bse1" style="display:none;">
						<div style="padding:10px;">
							<font id="xxxLIx" style="float:right"></font>
							<font style="font-size:18px;">Article Task Logs</font>
						</div>
						<div style="padding:3px;border:1px solid #aeaeae">
							<div id="showDAtaAdatr" class="fox3" style="height:10%;overflow:auto;"><b>Title:</b> <font id="cntainttInf"></font><br><b>Attached File:</b> <font id="cntainLstREv"></font></div>
						</div>
						<div id="displayMyJournalxxx33xx" class="fox3" style="border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;padding:5px;padding:2px;box-shadow:inset 0 -0.5px 7px rgba(0, 0, 0, .3);font-size:12px;height:76%;overflow:auto;padding-left:8px;">
							No Task...
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="notesAnnxx1" class="fox3" style="display:none;padding-left:100px;padding-right:100px;height:50%;overflow:auto">
			<CENTER><h3>Notes and Announcements</h3></CENTER>
		</div>
		<div id="forCoAuthors" style="display:none;">
			<div class="fox3" style="padding-left:10px;padding-right:10px;height:90%;border-bottom:1px solid #aeaeae;overflow:auto;">
				<center><div id="cnntOLDdoi1" style="color:black">Loading...</div></center>
			</div>
			<div style="padding:5px;">
				You can manage your information in the settings area. <u>Privacy Checkup</u> >> <u>Keep me visible to others</u>
			</div>
		</div>
		<div id="forMessages" style="display:none;padding-left:10px;padding-right:10px;">
			<div class="col-md-12" style="height:100%;font-size:13px;">
				<div class="col-md-8" style="height:100%;">
					<div style="border-bottom:1px solid #aeaeae;">
						<font style=""><h4 id="contentHintKLdd">Inbox</h4></font>
					</div>
					<div class="fox3" style="padding:5px;height:90%;overflow:auto;border-bottom:1px solid #aeaeae;">
						<div class="preMEsx1">
							<table width="100%">
								<tr style="font-size:13px;">
									<td style="width:5%;font-size:11px;color:#aeaeae" align="center"><i class="fa fa-user" style="font-size:22px;color:#aeaeae"></i><br>Admin</td>
									<td style="width:95%;">
										<div style="background:#d0e2ac;padding:5px;border-radius:5px;box-shadow:0px 1px 2px rgba(0, 0, 0, .55);cursor:pointer;">
											<font style="float:right"><small style="color:#7a7a7a">09/09/2018 | 09:09:09pm</small></font>
											From: <b>jparcede</b><Br><font style="font-size:16px;">Sample Message</font>
											<div style="padding-top:3px">
												Attached file: None
											</div>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-4" style="height:100%;">
					<span style="float:right;margin-top:3px;">
						<font class="btn btn-default" style="font-size:13px;padding:2px;padding-left:7px;padding-right:7px;"><i class="fa fa-twitch"></i> &nbsp&nbsp Create</font> 
						<font class="btn btn-default" style="font-size:13px;padding:2px;padding-left:7px;padding-right:7px;"><i class="fa fa-file"></i> &nbsp&nbsp Draft</font>
						<font class="btn btn-default" style="font-size:13px;padding:2px;padding-left:7px;padding-right:7px;"><i class="fa fa-paper-plane"></i> &nbsp&nbsp Sent</font>
					</span>
					<h5>Message for Admin</h5>
					<div>
						<form method="POST" action="<?php echo base_url('gtReglr/sbmtFileDat22');?>" id="uploadfile_mod2" enctype="multipart/form-data">
							<div style="padding:4px">
								<center>
									<select id="listOFadmxxn" name="listOFadmxxn" class="" style="cursor:pointer;width:86%;padding:6px;box-shadow:inset 0px 0px 4px rgba(0, 0, 0, .3)"></select>
									<font id="shhsowklADmnxx" class="btn btn-default" data-toggle="modal" data-target=".bs-viewPropAdminxx-modal-lg"><i class="fa fa-eye"></i></font>
								</center>
							</div>
							<div style="padding:4px">
								<div style="border:1px solid #aeaeae;box-shadow:inset 0px 0px 4px rgba(0, 0, 0, .3);padding:3px;">
									<textarea id="foxMEsARea" name="foxMEsARea" style="padding:5px;height:200px;width:100%;line-height: 110%;border:none;" placeholder="Type your message here..."></textarea>
									<div style="padding-left:4px;padding-top:5px;">
										<div id="kllklaaxxtyyy1">
											<font id="attdataFleSS" class="btn btn-default"><i class="fa fa-paperclip"></i></font> <font id="attnameFFLdd" style="color:#aeaeae">No attached file (1 file per message)</font>
										</div>
										<div id="kllklaaxxtyyy2" style="display:none;width:100%;">
											<input type="file" name="file_mod2xxx" id="file_mod2" class="btn btn-default" style="padding:5px;width:99.3%;cursor:pointer;font-size:11px" required="">
										</div>
									</div>
								</div>
								<progress id="progxxxx01" value="0" max="100" style="width:100%;height:7px;display:none;"></progress> <!--<font id="percentageCMPxxxx01">0%</font>-->
								<div id="PartAsendingNNe1" style="padding-top:10px;">
									<button id="SBmitFF2x2" type="submit" class="btn btn-default" style="background:#75a583;font-size:13px;padding:2px;padding-left:7px;padding-right:7px;color:white;display:none;">Send</button>
									<font id="SBmitFF2x22321" type="submit" class="btn btn-default" style="background:#75a583;font-size:13px;padding:2px;padding-left:7px;padding-right:7px;color:white;">Send</font>
									<font id="resEMmes" class="btn btn-default" style="font-size:13px;padding:2px;padding-left:7px;padding-right:7px">Cancel / Clear</font>
								</div>
								<div id="PartAsendingNNe2" style="padding-top:10px;display:none;">
									<div id="psw1x1xxxx01"></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div id="forSettings" style="display:none;padding-left:100px;padding-right:100px;">
			<CENTER><h3>Settings</h3></CENTER>
		</div>
		<div id="forPersonalInfo" style="display:none;padding-left:80px;padding-right:80px;font-family:arial">
			<div>
				<center>
					<div style="padding:10px;padding-bottom:15px;width:900px;border-bottom:1px solid #e0e0e0">
						<h1>Control and Protect your account in one place</h1>
						<font style="font-size:15px;color:#707070">A quick access to settings and tools will help JAZ work better for you.</font>
					</div>
				</center>
				<div style="padding:10px;"></div>
				<div class="col-md-12">
					<div class="col-md-8">
						<div class="col-md-12">
							<div class="col-md-6" style="padding:0px;margin-top:-12px;">
								<CENTER><h3>Personal Information</h3><a href="#" data-toggle="modal" data-target=".bs-updatePeI-modal-lg"><font class="btn btn-default" style="padding:3px;padding-right:17px;padding-left:17px;">Update</font></a></CENTER>
								<div class="fox3" style="height:50%;overflow:auto;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;margin-top:5px;">
									<?php
										$counterB = 0;
										foreach ($pI as $x) {
											if($x->affiliation == "" || $x->email == "" || $x->orcid_id == "" || $x->url == "" || $x->phone == "" || $x->fax == "" || $x->mailingaddrss == "" || $x->country_name == "" || $x->country_code == "" || $x->bio_state == ""){
												$counterB = 1;
											}
											echo "<div class='col-md-12' style='padding:0px;'><div class='col-md-6' style='text-align:right'>Given Name:</div><div class='col-md-6'><b>".$x->u_fname."</b></div></div>
												<div class='col-md-12' style='padding:0px;'><div class='col-md-6' style='text-align:right'>Middle Name:</div><div class='col-md-6'><b>".$x->u_mname."</b></div></div>
												<div class='col-md-12' style='padding:0px;'><div class='col-md-6' style='text-align:right'>Family Name/Surname:</div><div class='col-md-6'><b>".$x->u_lname."</b></div></div>
												<div class='col-md-12' style='padding:0px;'><div class='col-md-6' style='text-align:right'>Initials:</div><div class='col-md-6'><b>".$x->u_initials."</b></div></div>
												<div class='col-md-12' style='padding:0px;'><div class='col-md-6' style='text-align:right'>Gender:</div><div class='col-md-6'><b>".$x->u_gender."</b></div></div>
												<div class='col-md-12' style='padding:0px;'><div class='col-md-6' style='text-align:right'>Affiliation:</div><div class='col-md-6'><b>".$x->affiliation."</b></div></div>
												<div class='col-md-12' style='padding:0px;'><div class='col-md-6' style='text-align:right'>Email:</div><div class='col-md-6'><b>".$x->email."</b></div></div>
												<div class='col-md-12' style='padding:0px;'><div class='col-md-6' style='text-align:right'>ORCID ID:</div><div class='col-md-6'><b>".$x->orcid_id."</b></div></div>
												<div class='col-md-12' style='padding:0px;'><div class='col-md-6' style='text-align:right'>URL:</div><div class='col-md-6'><b>".$x->url."</b></div></div>
												<div class='col-md-12' style='padding:0px;'><div class='col-md-6' style='text-align:right'>Phone/Mobile:</div><div class='col-md-6'><b>".$x->phone."</b></div></div>
												<div class='col-md-12' style='padding:0px;'><div class='col-md-6' style='text-align:right'>Fax:</div><div class='col-md-6'><b>".$x->fax."</b></div></div>
												<div class='col-md-12' style='padding:0px;'><div class='col-md-6' style='text-align:right'>Mailing Address:</div><div class='col-md-6'><b>".$x->mailingaddrss."</b></div></div>
												<div class='col-md-12' style='padding:0px;'><div class='col-md-6' style='text-align:right'>Country (Code):</div><div class='col-md-6'><b>".$x->country_name." (".$x->country_code.")</b></div></div>
												<div class='col-md-12' style='padding:0px;'><div class='col-md-6' style='text-align:right'>Bio-State</div><div class='col-md-6'><b>".$x->bio_state."</b></div></div>
											";
										}
									?>
								</div>
								<?php
								if($counterB == 1){
									echo "<center><div style='padding:8px;'><font style='color:red'>Some information is/are missing.</font></div></center>";
								}
								?>
							</div>
							<div class="col-md-6" style="padding:0px;margin-top:-7px;">
								<center>
									<?php
									$varSTr = "";
									foreach ($imageres as $xxPx) {
										$varSTr = "";
										$varSTr = $xxPx->image;
										if($varSTr == ""){
											echo '<font id="sappPPLxx2"><img src="nwng/msicon.jpg" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)"></font>
											<br><font id="clickFphoto" class="btn btn-default crop_image" data-toggle="modal" data-target=".bs-changePhot-modal-lg">Change Photo</font>';
										}else{
											echo '<font id="sappPPLxx2"><img src="./userimage/'.$varSTr.'" height="200" width="200" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:200px;height:200px;"></font>
											<br><font id="clickFphoto" class="btn btn-default crop_image" data-toggle="modal" data-target=".bs-changePhot-modal-lg">Change Photo</font>';
										}
									}
									?>
								</center>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div style="box-shadow:0px 1px 4px rgba(0, 0, 0, .35)">
							<a href="#" data-toggle="modal" data-target=".bs-privaCheckUp-modal-lg"><div id="crossPrivacy" style="border-bottom:1px solid #e0e0e0;padding:10px;">
								<div class="col-md-12" style="padding:0px;">
									<div class="col-md-2" style="padding-top:5px;"><center><i class="fa fa-sliders" style="font-size:65px;color:#75a7e5;"></i></center></div>
									<div class="col-md-10" style="padding-left:18px;font-size:15px;color:#5a5b5b"><!-- 707070 -->
										<h3>Privacy Checkup</h3>
										<div style="color:#707070">
											Take a quick review on your privacy settings and adjust them based on your preferences
										</div>
									</div>
								</div>
								<font style="font-size:1px;">...</font>
							</div></a>
							<a href="#" data-toggle="modal" data-target=".bs-activityLogsPlxx-modal-lg"><div id="crossPrivacy" style="border-bottom:1px solid #e0e0e0;padding:10px;">
								<div class="col-md-12" style="padding:0px;">
									<div class="col-md-2" style="padding-top:5px;"><center><i class="fa fa-cubes" style="font-size:45px;color:#75a7e5;"></i></center></div>
									<div class="col-md-10" style="padding-left:18px;font-size:15px;color:#5a5b5b"><!-- 707070 -->
										<h3>General Activity Logs</h3>
										<div style="color:#707070">
											View your data that's created during the use of <b>JAZ</b> services
										</div>
									</div>
								</div>
								<font style="font-size:1px;">...</font>
							</div></a>
						</div>
					</div>
				</div>
				<font style="font-size:1px">...</font>	
			</div>
		</div>
		<div id="forHome">
			<div style="padding:5px;font-size:17px;text-align:left;font-family:calibri;padding-right:100px;padding-left:100px;">
		        <div style="padding:5px;">
		          <h4 style="font-weight:bold">ANNALS OF STUDIES IN SCIENCE AND HUMANITIES</h4>
		        </div>
		        <div>
		          The Annals of Studies in Science and Humanities is a peer-reviewed open-access journal, which publishes quality papers to promote scholarly discussion across a broad range of academic disciplines. It accepts submissions in any area within natural and applied sciences, engineering, mathematics, education and social sciences with main focus on fishery, agri-forestry, minerals and eco-tourism. The journal is in English and published annually in both online and print versions. ASSH is an official research publication of the Caraga State University published by the University itself through the efforts of the Office of the Vice President and Extension.<br><br>
		          Online Edition: ISSN 02408-3631<br>
		          Print Edition: ISSN 2408-3623<Br><br>
		          Annals of Studies in Science and Humanities. Volume 1 Number 1 May 2015.<br><br>
		          Articles published in this journal may be quoted without permission in other scholarly writing and in popular writing, as long as credit is given to the source. However, no article may be published in its entirely without written permission from ASSH.<Br><br>
		          <b>Editorial correspondence should be addressed to:</b> The Editor in-Chief, Annals of Studies in Science and Humanities, c/o Caraga State University, Ampayon, Butuan City, 8600 Philippines, or e-mail at csu_assh@carsu.edu.ph<br><br>
		          <b>Subscription rates:</b> Annual subscription for printed copies, rates are as follows: Institution (USD 40); Individual (USD 20). Rates are exclusive of mailing cost. To subscribe, kindly send your name and complete mailing address to: Research Publication Unit, Office of the Vice President of Research and Extension, Caraga State University, Ampayon, Butuan City, 8600 Philippines, or e-mail at jparcede@carsu.edu.ph.
		        </div>
		    </div>
		    <div style="font-family:calibri;padding:5px;font-size:12px;border-top:1px solid #aeaeae;padding-right:100px;padding-left:100px;">
		        <div style="padding:5px;">
		          <h4 style="font-weight:bold">ABOUT THE SITE</h4>
		          <center><img src="<?php echo base_url('nwng/team.jpg');?>" style="width:50%;"></center>
		        </div>
		        <div style="padding-bottom:10px;font-size:16px;font-weight:bold;text-align: center;">
		          The official Journal of Caraga State University "Annals of Studies in Science and Humanities(ASSH)" is now online.<br>
		          We are now accepting papers for Volume 1 No. 2 and Volume 2 Nos. 1 &2.<br>
		          Papers can be submitted to csu_assh@carsu.edu.ph or you may register and submit online. 
		        </div>
		        <div class="col-md-12">
		          <div class="col-md-6">
		            <center><h4 style="">About this Publishing System</h4>
		              This site uses Open Journal Systems 2.4.5.0, which is open source<br>
		              journal management and publishing software developed, supported, and freely<br>
		              distributed by the Public Knowledge Project under the<br>
		              GNU General Public License.<br><Br>
		              <a href="#" data-toggle="modal" data-target=".bs-viewPicRuleArt-modal-lg"><img src="<?php echo base_url('nwng/edprocesslarge.png');?>" style="width:100%;height:80%;box-shadow:0px 0px 4px rgba(0, 0, 0, .42)"></a>
		            </center>
		          </div>
		          <div class="col-md-6" style="text-align:left;font-size:14px;">
		            <center><h4 style="">About the Journal</h4></center><br>
		            <b>PEOPLE</b><br>
		            <div style="padding-left:20px;color:#167560">
		              <font class="abJ" data-toggle="modal" data-target=".bs-viewContact-modal-lg">>> Contact</font><br>
		              <font class="abJ" data-toggle="modal" data-target=".bs-editorialTeam-modal-lg">>> Editorial Team</font>
		            </div><Br>
		            <b>POLICIES</b><br>
		            <div style="padding-left:20px;color:#167560">
		              <font id="btnPol1" class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Focus and Scope</font><br>
		              <font id="btnPol2" class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Section Policies</font><br>
		              <font id="btnPol3" class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Peer Review Process</font><br>
		              <font id="btnPol4" class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Publication Frequency</font><br>
		              <font id="btnPol5" class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Open Access Policy</font><br>
		              <font id="btnPol6" class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Archiving</font><br>
		              <font id="btnPol7" class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Advertising Policy</font><br>
		            </div><br>
		            <b>SUBMISSIONS</b><br>
		            <div style="padding-left:20px;color:#167560">
		              <font id="btnSub1" class="abJ" data-toggle="modal" data-target=".bs-submission-modal-lg">>> Online Submissions</font><br>
		              <font id="btnSub2" class="abJ" data-toggle="modal" data-target=".bs-submission-modal-lg">>> Author Guidelines</font><br>
		              <font id="btnSub3" class="abJ" data-toggle="modal" data-target=".bs-submission-modal-lg">>> Submission Preparation Checklist</font><br>
		              <font id="btnSub4" class="abJ" data-toggle="modal" data-target=".bs-submission-modal-lg">>> Copyright Notice</font><br>
		              <font id="btnSub5" class="abJ" data-toggle="modal" data-target=".bs-submission-modal-lg">>> Privacy Statement</font>
		            </div><br>
		            <b>OTHER</b><br>
		            <div style="padding-left:20px;color:#167560">
		              <font class="abJ" data-toggle="modal" data-target=".bs-sponsorSHP-modal-lg">>> Journal Sponsorship</font><br>
		              <font class="abJ" data-toggle="modal" data-target=".bs-history-modal-lg">>> Journal History</font><br>
		            </div><br><br><br>
		            <img src="<?php echo base_url('nwng/licensed.png');?>"><br>
		            This work is licensed under a <a href="https://creativecommons.org/licenses/by/4.0/" target="__blank" style="text-decoration:none;"><font class="abJ" style="color:blue;">Creative Commons Attribution 4.0 International License.</font></a>
		          </div>
		        </div>
		        <font>...</font>
		    </div>
		    <div style="font-family:calibri;padding:5px;font-size:12px;border-top:1px solid #aeaeae;padding-right:100px;padding-left:100px;">
	            <br><h4><b>PRIVACY STATEMENT</b></h4>
	            <font style="font-size:16px;">
	              The names and email addresses entered in this journal site will be used exclusively for the stated purposes of this journal and will not be made available for any other purpose or to any other party.
	            </font>
	        </div>
		</div>
	</div>

</div>