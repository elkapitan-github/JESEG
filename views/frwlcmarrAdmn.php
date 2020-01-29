<div style="background:#aece71;padding:8px;box-shadow:1px 1px 1px rgba(0, 0, 0, .5)">
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font style="font-size:18">CSU Online Journal System</font> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	LOGGED-iN AS:  
	<select id="Utype" name="Utype" style="width:100px;padding:2px;padding-left:5px;cursor:pointer;">
        <?php
        if($adminSel == 1){
        	echo '<option name="Utype" value="4">Admin</option>';
        }
        if($editorSel == 1){
        	echo '<option name="Utype" value="3">Editor</option>';
        }
        ?>
    </select>
	<font style="float:right">
		<font id="showUlInfoProfile" class="btn btn-default animated fadeInUp" style="padding:4px;padding-left:10px;padding-right:10px;">
			<i class="fa fa-gears"></i>
		</font>
		<font id="showUlInfoProfile" class="btn btn-default animated fadeInUp" style="padding:4px;padding-left:10px;padding-right:10px;">
			<span style="position:absolute;border-radius:50%;padding:2px;font-size:8px;background:red;color:white;width:15px;margin-left:-5px;margin-top:-10px;">1</span>
			<i class="fa fa-bell"></i>
		</font>
		<font id="showUlInfoProfile" class="btn btn-default animated fadeInUp" style="padding:4px;padding-left:10px;padding-right:10px;">
			<i class="fa fa-user"></i>
		</font>
	</font>
</div>
<div class="col-md-12" style="padding:0px;">
	<div class="col-md-2" style="padding:0px;border-right:1px solid #aeaeae;">
		<div style="padding-top:10px;">
			<center><b>JAZ</b> Administrator</center>
		</div>
		<div style="padding:10px;">
			<center>
				<?php
					$varSTr = "";
					foreach ($imageres as $xxPx) {
						$varSTr = "";
						$varSTr = $xxPx->image;
						if($varSTr == ""){
							echo '<img src="nwng/user.png" style="width:80%;border:2px solid white;box-shadow:0px 0px 2px rgba(0, 0, 0, .5);cursor:pointer;">';
						}else{
							echo '<font id="sappPPLxx2"><img src="'.$varSTr.'" style="width:80%;margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);cursor:pointer;"></font>';
						}
					}
				?>
				
			</center>
		</div>
		<center><?php echo "$ComName";?></center>
		<div style="padding:10px;">
			<center>
				<font id="btnToHomeArea" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;border-left:3px solid #dd9221">Dashboard <i class="fa fa-dashboard" style="float:right;font-size:18px;margin-top:2px;margin-right:4px;"></i></font>
				<font id="btnToNewResearchers" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">New Researchers <i class="fa fa-graduation-cap" style="float:right;font-size:18px;margin-top:2px;"></i></font>
				<font id="btnREsearchrsArea" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Researchers <i class="fa fa-coffee" style="float:right;font-size:18px;margin-top:2px;margin-right:2px;"></i></font>
				<font id="btnJournalsArea" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Articles <i class="fa fa-book" style="float:right;font-size:18px;margin-top:2px;margin-right:3px;"></i></font>
				<font id="btnAnnPPl" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Announcements and Posts <i class="fa fa-bullhorn" style="float:right;font-size:18px;margin-top:2px;margin-right:3px;"></i></font>
				<a href="<?php echo base_url('cmendwll?epr=dash');?>"><font class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Phone <i class="fa fa-mobile" style="float:right;font-size:18px;margin-top:2px;margin-right:3px;"></i></font></a>
				<!--<font id="btnACtiveMes" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Messages <i class="fa fa-paper-plane" style="float:right;font-size:18px;margin-top:2px;margin-right:4px;"></i></font>-->
				<a href="<?php echo base_url('cmendwll/lcklc');?>"><font id="lockBase" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Logout <i class="fa fa-lock" style="float:right;font-size:18px;margin-top:2px;margin-right:4px;"></i></font></a>
			</center>
		</div>
		<div class="" style="padding:10px;">
			<center>
				<img src="<?php echo base_url('nwng/csulogo.png');?>" style="width:60%;border:2px solid white;box-shadow:0px 0px 2px rgba(0, 0, 0, .5);border-radius:50%;">
				<br><br><font style="font-size:8px;">&copy Copyright <?php echo date('Y');?></font>
			</center>
		</div>
	</div>
	<div class="col-md-10" style="padding:0px;">
		<div style="padding:10px;border-bottom:1px solid #aeaeae;">
			<a href="<?php echo base_url('cmendwll');?>" style="text-decoration:none;color:black">
			<span style="padding:5px;border:1px solid #aeaeae;border-radius:47%;cursor:pointer;">
				<i class="fa fa-dashboard" style="font-size:16px;"></i>
			</span></a> &nbsp&nbsp <i class="fa fa-angle-double-right"></i> &nbsp <font id="paginationCnt">Admin Dashboard</font>
		</div>
		<div style="padding:10px;">
			<div id="AnnPPlviewAreax" style="display:none;height:84%;">
				<div class="col-md-12" style="font-size:13px;border-bottom:1px solid #aeaeae;">
					<div id="clickLiliAnn" class="col-md-2" style="background:white;padding:5px;margin-left:5px;cursor:pointer;border-bottom:2px solid red">
						Announcements
					</div>
					<div id="clickLiliPosts" class="col-md-2" style="background:white;padding:5px;margin-left:5px;cursor:pointer;">
						Posts
					</div>
					<div class="col-md-8"></div>
				</div>
				<div id="liliViewAnn" style="padding:10px;padding-top:15px;">
					<div class="col-md-12">
						<div class="col-md-4">
							<center>
								<form id="setAnnouncementLIk_form">
									<br><h2 style="padding:10px;border-bottom:1px solid #aeaeae;width:95%;">Create new announcement</h2>
									<input type="text" name="dateStrat" id="single_cal5" placeholder="Date Start of Display" aria-describedby="inputSuccess2Status4" style="padding:5px;width:90%;border:none;cursor:pointer;" readonly="">
									<br><br><input type="text" name="dateEndDspNMe" id="single_cal6" placeholder="Date End of Display" aria-describedby="inputSuccess2Status4" style="padding:5px;width:90%;border:none;cursor:pointer;" readonly="">
									<br><br><textarea id="foxMEsARea2" name="annSubject" style="padding:5px;height:100px;width:90%;line-height: 110%;border:none;" placeholder="Subject"></textarea>
									<br><br><textarea id="foxMEsARea3" name="annMessage" style="padding:5px;height:150px;width:90%;line-height: 110%;border:none;" placeholder="Message"></textarea>
									<br><br><font id="setAnnBTTTffx" class="btn btn-default" style="width:80%;">Set Announcement</font>
								</form>
							</center>
						</div>
						<div class="col-md-8">
							<span style="float:right;margin-top:26px;">
								<font id="shwActvve" class="btn btn-default" style="border-bottom:2px solid red;">Active</font>
								<font id="shwActvveNonAct" class="btn btn-default">Non-active</font>
							</span>
							<br><h2 style="padding:10px;border-bottom:1px solid #aeaeae;">General List</h2>
							<div id="searhchss110" style="padding:1px;border-bottom:1px solid #aeaeae;display:none;height:25px;">
								<font class="btn btn-default" style="padding:1px;padding-right:7px;padding-left:7px;float:right"><i class="fa fa-trash"></i></font>
							</div>
							<div class="klikkxxPop fox3" style="height:75%;border-bottom:1px solid #aeaeae;"></div>
							<div class="klikkxxPop202 fox3" style="height:75%;border-bottom:1px solid #aeaeae;display:none;"></div>
						</div>
					</div>
				</div>
				<div id="liliViewPosts" style="padding:10px;padding-top:15px;display:none;height:90%;border-bottom:1px solid #aeaeae;padding-top:30px;overflow:auto;">
					<center>
						Slider 1 &nbsp&nbsp&nbsp<font id="btn-Slider1" class="btn btn-primary" data-toggle="modal" data-target=".bs-UploadXpli-modal-lg" style="padding:2px;padding-right:7px;padding-left:7px;">Update post</font>
						<div id="slider1xxx"><img src="nwng/slider/1.jpg"></div>
						<br><br>
						Slider 2 &nbsp&nbsp&nbsp<font id="btn-Slider2" class="btn btn-primary" data-toggle="modal" data-target=".bs-UploadXpli-modal-lg" style="padding:2px;padding-right:7px;padding-left:7px;">Update post</font>
						<div id="slider2xxx"><img src="nwng/slider/2.jpg"></div>
						<br><br>
						Slider 3 &nbsp&nbsp&nbsp<font id="btn-Slider3" class="btn btn-primary" data-toggle="modal" data-target=".bs-UploadXpli-modal-lg" style="padding:2px;padding-right:7px;padding-left:7px;">Update post</font>
						<div id="slider3xxx"><img src="nwng/slider/3.jpg"></div>
						<br><br>
						Slider 4 &nbsp&nbsp&nbsp<font id="btn-Slider4" class="btn btn-primary" data-toggle="modal" data-target=".bs-UploadXpli-modal-lg" style="padding:2px;padding-right:7px;padding-left:7px;">Update post</font>
						<div id="slider4xxx"><img src="nwng/slider/4.jpg"></div>
						<br><br>
						Slider 5 &nbsp&nbsp&nbsp<font id="btn-Slider5" class="btn btn-primary" data-toggle="modal" data-target=".bs-UploadXpli-modal-lg" style="padding:2px;padding-right:7px;padding-left:7px;">Update post</font>
						<div id="slider5xxx"><img src="nwng/slider/5.jpg"></div>
					</center>
				</div>
			</div>
			<div id="AmessageArea" style="display:none;">
				<div style="padding:10px;padding-left:10px;">
					Active Message Area
				</div>
				<div class="col-md-12" style="height:100%;font-size:13px;">
					<div class="col-md-8" style="height:80%;background:#f2f2f2;border-bottom:1px solid #aeaeae;box-shadow:inset 1px 1px 4px rgba(0, 0, 0, .23)">
						<div style="border-bottom:1px solid #aeaeae;">
							<font style="float:right;">Search: <input type="text" name="" placeholder="Type here..." style="width:280px;padding:3px;padding-left:8px;box-shadow:inset 0px 0px 4px rgba(0, 0, 0, .3)"></font>
							<font style=""><h4 id="contentHintKLdd">Inbox</h4></font>
						</div>
						<div class="fox3" id="keepILSMS" style="padding:5px;height:80%;overflow:auto;border-bottom:1px solid #aeaeae;"></div>
					</div>
					<div class="col-md-4" style="height:100%;">
						<span style="float:right;margin-top:3px;">
							<font id="createMes" class="btn btn-default" style="font-size:13px;padding:2px;padding-left:7px;padding-right:7px;"><i class="fa fa-twitch"></i> &nbsp&nbsp Create</font> 
							<!--<font id="draftMes" class="btn btn-default" style="font-size:13px;padding:2px;padding-left:7px;padding-right:7px;"><i class="fa fa-file"></i> &nbsp&nbsp Draft</font>-->
							<font id="sendMes" class="btn btn-default" style="font-size:13px;padding:2px;padding-left:7px;padding-right:7px;"><i class="fa fa-paper-plane"></i> &nbsp&nbsp Sent</font>
						</span>
						<h4>Create Message</h4>
						<div id="SendMesArea" style="display:none;">
							<font style="float:right">Search: <input type="text" name="" placeholder="Type here..." style="width:150px;padding:3px;padding-left:8px;box-shadow:inset 0px 0px 4px rgba(0, 0, 0, .3)"></font>
							<div style="font-size:16px;padding:5px;">Total: <font id="contenttotalofSEntmesM" style="font-weight:bold"></font></div>
							<div id="contentMesSent0911" class="fox3" style="border-top:1px solid #aeaeae;height:60%;overflow:auto;border-bottom:1px solid #aeaeae;padding-bottom:10px;"></div>
						</div>
						<!--<div id="DraftMesArea">
							Drafts
						</div>-->
						<div id="createAreaMes001">
							<form method="POST" action="<?php echo base_url('cmendwll/sbmtFileDat22');?>" id="uploadfile_mod2" enctype="multipart/form-data">
								<div style="padding:4px">
									<center>
										<select id="listOFadmxxn" name="listOFadmxxn" class="" style="cursor:pointer;width:86%;padding:6px;box-shadow:inset 0px 0px 4px rgba(0, 0, 0, .3)"></select>
										<font id="shhsowklADmnxx" class="btn btn-default" data-toggle="modal" data-target=".bs-viewPropAdminxx-modal-lg"><i class="fa fa-eye"></i></font>
									</center>
								</div>
								<div style="padding:4px">
									<div style="border:1px solid #aeaeae;box-shadow:inset 0px 0px 4px rgba(0, 0, 0, .3);padding:3px;background:white;">
										<textarea id="foxMEsARea1" name="foxMEsARea" style="padding:5px;height:200px;width:100%;line-height: 110%;border:none;" placeholder="Type your message here..."></textarea>
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
										<button id="SBmitFF2x2" type="submit" class="btn btn-default" style="background:#75a583;font-size:13px;padding:2px;padding-left:7px;padding-right:7px;color:white;">Send</button>
										<font id="SBmitFF2x22321" type="submit" class="btn btn-default" style="background:#75a583;font-size:13px;padding:2px;padding-left:7px;padding-right:7px;color:white;">Send</font>
										<font id="resEMmes" class="btn btn-default" style="font-size:13px;padding:2px;padding-left:7px;padding-right:7px">Cancel / Clear</font>
									</div>
									<div id="PartAsendingNNe2" style="padding-top:10px;display:none;">
										<div id="psw1x1xxxx01"></div>
									</div>
								</div>
							</form>
						</div>
						<div id="Idenfry019" style="padding-left:10px;font-size:16px;"></div>
					</div>
				</div>
			</div>
			<div id="JournalxArea" style="display:none;">
				<div>
					<font style="float:right;margin-top:2px;">
						<select style="width:130px;cursor:pointer;padding:3px">
							<option>Select Year</option>
						</select>
						<select style="width:130px;cursor:pointer;padding:3px">
							<option>Select Volume</option>
						</select> &nbsp&nbsp&nbsp&nbsp&nbsp
						Search: <input type="text" name="" placeholder="Type here..." style="padding-left:4px;width:200px;border-radius:5px;"> 
						<font class="btn btn-default" style="padding:1px;padding-right:7px;padding-left:7px;box-shadow:none;">Go</font> 
					</font>
					<div>
						<button id="artOnew" class="btn btn-default" style="padding:2px;padding-left:8px;padding-right:8px;border-bottom:2px solid red;">New</button>
						<button id="artOpubL" class="btn btn-default" style="padding:2px;padding-left:8px;padding-right:8px;">Published</button>
						<button id="artORef" class="btn btn-default" style="padding:2px;padding-left:8px;padding-right:8px;">Refused</button>
					</div>
				</div>
				<div id="displayOfartORef" style="padding:2px;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;box-shadow:inset 0 -0.5px 7px rgba(0, 0, 0, .3);margin-top:12px;font-size:11px;height:75%;background:#dddddd;overflow:auto;display:none;">
					sada
				</div>
				<div id="displayOfartOpubL" style="padding:2px;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;box-shadow:inset 0 -0.5px 7px rgba(0, 0, 0, .3);margin-top:12px;font-size:11px;height:75%;background:#dddddd;overflow:auto;display:none;">
					sada
				</div>
				<div id="displayMyJournalx" style="padding:2px;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;box-shadow:inset 0 -0.5px 7px rgba(0, 0, 0, .3);margin-top:12px;font-size:11px;height:75%;background:#dddddd;overflow:auto;"><Br><font style="margin-left:10px;">No Article submitted...</font></div>
				<font style="font-weight:bold">Total: <font id="artclxNfo" style="font-size:16px;"></font></font>
			</div>
			<div id="ResearchrsArea" style="display:none;">
				<div class="col-md-12" style="padding:0px;font-size:12px;">
					<div id="generalActvResearchrs1" class="col-md-2 topMenu1" style="border-bottom:2px solid #f77b67;">
						Author Only &nbsp&nbsp(<font id="ggInf1"></font>)<i class="fa fa-copy" style="float:right;font-size:16px;"></i>
					</div>
					<div id="generalActvResearchrs2" class="col-md-2 topMenu1">
						Editor &nbsp&nbsp(<font id="ggInf2"></font>) <i class="fa fa-gavel" style="float:right;font-size:16px;"></i>
					</div>
					<div id="generalActvResearchrs3" class="col-md-2 topMenu1">
						Reviewer &nbsp&nbsp(<font id="ggInf3"></font>) <i class="fa fa-check-square-o" style="float:right;font-size:16px;"></i>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4" style="text-align:right">
						<font style="float:right;margin-top:2px;">Search: <input type="text" name="" placeholder="Type here..." style="padding-left:4px;width:200px;border-radius:5px;"> <font class="btn btn-default" style="padding:1px;padding-right:7px;padding-left:7px;box-shadow:none;">Go</font></font>
					</div>
				</div>
				<font style="font-size:1px;">...</font>
				<div class="fox" style="height:70%;overflow:auto;margin-left:2px;border-bottom:1px solid #aeaeae;">
					<div id="reSearchErsArea1">
						<table width="100%">
							<tbody id="contentResearchersxX"></tbody>
						</table>
					</div>
					<div id="reSearchErsArea2" style="display:none;">
						<table width="100%">
							<tbody id="contentResearchersxX2"></tbody>
						</table>
					</div>
					<div id="reSearchErsArea3" style="display:none;">
						<table width="100%">
							<tbody id="contentResearchersxX3"></tbody>
						</table>
					</div>
				</div>
			</div>
			<div id="newResearchersAdmn" style="display:none;">
				<div class="col-md-12" style="padding:0px;font-size:12px;">
					<div id="primaMenu" class="col-md-2 topMenu1" style="border-bottom:2px solid #f77b67;">
						Primary &nbsp&nbsp(<font id="bhgInf1"></font>)<i class="fa fa-unlink" style="float:right;font-size:16px;"></i>
					</div>
					<div id="forRevMenu" class="col-md-2 topMenu1">
						Ignored &nbsp&nbsp(<font id="bhgInf2"></font>)<i class="fa fa-sort-amount-asc" style="float:right;font-size:16px;"></i>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-2"></div>
					<div class="col-md-4" style="text-align:right">
						<font style="float:right;margin-top:2px;">Search: <input type="text" name="" placeholder="Type here..." style="padding-left:4px;width:200px;border-radius:5px;"> <font class="btn btn-default" style="padding:1px;padding-right:7px;padding-left:7px;box-shadow:none;">Go</font></font>
					</div>
				</div>
				<font style="font-size:1px;">...</font>
				<div class="fox" style="height:70%;overflow:auto;margin-left:2px;border-bottom:1px solid #aeaeae;">
					<div id="forPrimaryArea">
						<table width="100%">
							<tbody id="displayPrimaryList"></tbody>
						</table>
					</div>
					<div id="forReviewArea" style="display:none;">
						<table width="100%">
							<tbody id="displayPrimaryList2"></tbody>
						</table>
					</div>
				</div>
			</div>
			<div id="homeAreaAdmn">
				<div class="col-md-12">
					<div class="col-md-3 animated fadeInRight" style="cursor:pointer;">
						<div id="newSignUps" class="tile-stats" style="padding:10px;background:#93af5d;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)">
                            <div class="icon" style="margin-top:24px;color:white;"><i class="fa fa-check-square-o" style="text-shadow:1px 1px 3px rgba(0, 0, 0, .3)"></i></div>
                            <div class="count" id="xxggbg121">Loading...</div>
                            <h3 style="color:white;">New Sign ups</h3>
                            <p>Waiting for Administrator's approval.</p>
                        </div>
					</div>
					<div class="col-md-3 animated fadeInRight" style="cursor:pointer;">
						<div id="newARcctcles" class="tile-stats" style="padding:10px;background:#93af5d;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)">
                            <div class="icon" style="margin-top:24px;color:white;"><i class="fa fa-puzzle-piece" style="text-shadow:1px 1px 3px rgba(0, 0, 0, .3)"></i></div>
                            <div class="count" id="olowpwp9011xx">Loading...</div>
                            <h3 style="color:white;">New Articles</h3>
                            <p>Under validation</p>
                        </div>
					</div>
					<div class="col-md-3 animated fadeInRight" style="cursor:pointer;">
						<div class="tile-stats" style="padding:10px;background:#93af5d;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)">
                            <div class="icon" style="margin-top:24px;color:white;"><i class="fa fa-bullhorn" style="text-shadow:1px 1px 3px rgba(0, 0, 0, .3)"></i></div>
                            <div class="count" id="oasoaosd">Loading...</div>
                            <h3 style="color:white;">Announcements</h3>
                            <p>Related announcements for Org.</p>
                        </div>
					</div>
					<div class="col-md-3 animated fadeInRight" style="cursor:pointer;">
						<div class="tile-stats" style="padding:10px;background:#93af5d;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)">
                            <div class="icon" style="margin-top:24px;color:white;"><i class="fa fa-list-ul" style="text-shadow:1px 1px 3px rgba(0, 0, 0, .3)"></i></div>
                            <div class="count">179</div>
                            <h3 style="color:white;">Recent Posts</h3>
                            <p>New Published articles!</p>
                        </div>
					</div>
				</div>
				<font style="font-size:1px;">...</font>
				<div class="col-md-12">
					<div class="col-md-6">
						<div id="annBasedArea">
							<div style="border-bottom:1px solid #aeaeae;"><b>Recent Announcements</b></div>
							<div class="klikkxxPop2 fox3" style="height:400px;overflow:auto;"></div>
						</div>
					</div>
					<div class="col-md-6">
						<div id="annBasedArea">
							<div style="border-bottom:1px solid #aeaeae;"><b>Recent Posts (Articles)</b>
								<font style="float:right;cursor:pointer;">View Journals</font>
							</div>
							<div class="fox3" style="height:400px;overflow:auto;">
								<div style="font-size:11px;padding:2px;margin-top:4px;background:#dce5df;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)">
			                    	<font class="pointPDF" style="float:right;font-size:11px;cursor:pointer;margin-top:2px;margin-right:2px;"><i class="fa fa-hand-o-right"></i> view PDF</font>
				                    <div style="padding:2px;margin-top:12">
				                      <font class="articlesCCc"><b>=> Best Practices in Developing Reading Proficiency in the Mother-Tongue Among Public Schools in Butuan City</b></font><Br>
				                      <font style="font-size:9px;">&nbsp&nbsp&nbsp<i>Miraluna L. Herrera,  Bryan M. Luzon</i></font>
				                    </div>
				                </div>
				                <div style="font-size:11px;padding:2px;margin-top:4px;background:#dce5df;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)">
			                    	<font class="pointPDF" style="float:right;font-size:11px;cursor:pointer;margin-top:2px;margin-right:2px;"><i class="fa fa-hand-o-right"></i> view PDF</font>
				                    <div style="padding:2px;margin-top:12">
				                      <font class="articlesCCc"><b>=> Best Practices in Developing Reading Proficiency in the Mother-Tongue Among Public Schools in Butuan City</b></font><Br>
				                      <font style="font-size:9px;">&nbsp&nbsp&nbsp<i>Miraluna L. Herrera,  Bryan M. Luzon</i></font>
				                    </div>
				                </div>
				                <div style="font-size:11px;padding:2px;margin-top:4px;background:#dce5df;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)">
			                    	<font class="pointPDF" style="float:right;font-size:11px;cursor:pointer;margin-top:2px;margin-right:2px;"><i class="fa fa-hand-o-right"></i> view PDF</font>
				                    <div style="padding:2px;margin-top:12">
				                      <font class="articlesCCc"><b>=> Best Practices in Developing Reading Proficiency in the Mother-Tongue Among Public Schools in Butuan City</b></font><Br>
				                      <font style="font-size:9px;">&nbsp&nbsp&nbsp<i>Miraluna L. Herrera,  Bryan M. Luzon</i></font>
				                    </div>
				                </div>
				                <div style="font-size:11px;padding:2px;margin-top:4px;background:#dce5df;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)">
			                    	<font class="pointPDF" style="float:right;font-size:11px;cursor:pointer;margin-top:2px;margin-right:2px;"><i class="fa fa-hand-o-right"></i> view PDF</font>
				                    <div style="padding:2px;margin-top:12">
				                      <font class="articlesCCc"><b>=> Best Practices in Developing Reading Proficiency in the Mother-Tongue Among Public Schools in Butuan City</b></font><Br>
				                      <font style="font-size:9px;">&nbsp&nbsp&nbsp<i>Miraluna L. Herrera,  Bryan M. Luzon</i></font>
				                    </div>
				                </div>
				                <div style="font-size:11px;padding:2px;margin-top:4px;background:#dce5df;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)">
			                    	<font class="pointPDF" style="float:right;font-size:11px;cursor:pointer;margin-top:2px;margin-right:2px;"><i class="fa fa-hand-o-right"></i> view PDF</font>
				                    <div style="padding:2px;margin-top:12">
				                      <font class="articlesCCc"><b>=> Best Practices in Developing Reading Proficiency in the Mother-Tongue Among Public Schools in Butuan City</b></font><Br>
				                      <font style="font-size:9px;">&nbsp&nbsp&nbsp<i>Miraluna L. Herrera,  Bryan M. Luzon</i></font>
				                    </div>
				                </div>
				                <div style="font-size:11px;padding:2px;margin-top:4px;background:#dce5df;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)">
			                    	<font class="pointPDF" style="float:right;font-size:11px;cursor:pointer;margin-top:2px;margin-right:2px;"><i class="fa fa-hand-o-right"></i> view PDF</font>
				                    <div style="padding:2px;margin-top:12">
				                      <font class="articlesCCc"><b>=> Best Practices in Developing Reading Proficiency in the Mother-Tongue Among Public Schools in Butuan City</b></font><Br>
				                      <font style="font-size:9px;">&nbsp&nbsp&nbsp<i>Miraluna L. Herrera,  Bryan M. Luzon</i></font>
				                    </div>
				                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>