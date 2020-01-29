<div style="background:#aece71;padding:8px;box-shadow:1px 1px 1px rgba(0, 0, 0, .5)">
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font style="font-size:18">CSU Online Journal System</font> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	LOGGED-iN AS:  
	<select id="Utype" name="Utype" style="width:100px;padding:2px;padding-left:5px;cursor:pointer;">
        <?php
        if($editorSel == 1){
        	echo '<option name="Utype" value="3">Editor</option>';
        }
        if($adminSel == 1){
        	echo '<option name="Utype" value="4">Admin</option>';
        }
        ?>
    </select>
	<font style="float:right">
		<a id="clickToDipsNote" data-toggle="modal" data-target=".bs-viewNoteds-modal-lg">
			<font class="btn btn-default animated fadeInUp" style="padding:4px;padding-left:10px;padding-right:10px;"><i class="fa fa-bell"></i></font>
			<font id="placeNoteHHre"></font>
		</a>
	</font>
</div>
<div class="col-md-12" style="padding:0px;">
	<div class="col-md-2" style="padding:0px;border-right:1px solid #aeaeae;">
		<div style="padding-top:10px;">
			<center><b>JAZ</b> Article Editor</center>
		</div>
		<div style="padding:10px;">
			<center>
				<?php
				$strImage = "";
				foreach ($imageXCnt as $x) {
					$strImage = $x->image;
				}
				if($strImage == ""){
					echo '<img src="nwng/user.png" style="width:80%;border:2px solid white;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)">';
				}else{
					echo '<img src="userimage/'.$strImage.'" style="width:80%;border:2px solid white;box-shadow:0px 0px 2px rgba(0, 0, 0, .5)">';
				}
				?>
			</center>
		</div>
		<center><?php echo "$ComName";?></center>
		<div style="padding:10px;">
			<center>
				<font id="E-btn-dashReviewer" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;border-left:3px solid #7aad40">Dashboard <i class="fa fa-dashboard" style="float:right;font-size:18px;margin-top:2px;margin-right:4px;"></i></font>
				<font id="E-btn-EditorsX" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Reviewers <i class="fa fa-check-square" style="float:right;font-size:18px;margin-top:2px;margin-right:4px;"></i></font>
				<font id="E-btn-ViewReserachrs" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Researchers <i class="fa fa-graduation-cap" style="float:right;font-size:18px;margin-top:2px;"></i></font>
				<font id="E-btn-ArticlesX" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Articles <i class="fa fa-book" style="float:right;font-size:18px;margin-top:2px;margin-right:2px;"></i></font>
				<a href="<?php echo base_url('gtEdtrRr?epr=dash');?>"><font class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Phone <i class="fa fa-mobile" style="float:right;font-size:18px;margin-top:2px;margin-right:2px;"></i></font></a>
				<!--<font id="E-btn-Messagex" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Messages <i class="fa fa-paper-plane" style="float:right;font-size:18px;margin-top:2px;margin-right:4px;"></i></font>-->
				<a href="<?php echo base_url('gtEdtrRr/lcklc');?>"><font id="lockBase" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Logout <i class="fa fa-lock" style="float:right;font-size:18px;margin-top:2px;margin-right:4px;"></i></font></a>
			</center>
		</div>
		<div class="" style="padding:10px;">
			<center>
				<img src="<?php echo base_url('nwng/csulogo.png');?>" style="width:60%;border:2px solid white;box-shadow:0px 0px 2px rgba(0, 0, 0, .5);border-radius:50%;">
				<br><br><font style="font-size:8px;">&copy Copyright <?php echo date('Y');?></font>
			</center>
		</div>
		<div style="padding:10px;">.<br>.<br>.</div>
	</div>
	<div class="col-md-10" style="padding:0px;">
		<div style="padding:10px;border-bottom:1px solid #aeaeae;">
			<font id="srchCntxxXed" style="float:right;margin-top:-3px;display:none;">Search: <input id="dataSEarchSErSEr" type="text" name="dataSEarchSErSEr" placeholder="Type here..." style="padding-left:4px;width:200px;border-radius:5px;"> 
				<font id="clicktoSSSer" class="btn btn-default" style="padding:1px;padding-right:7px;padding-left:7px;box-shadow:none;">Go</font>
				<font id="resetSSSer" class="btn btn-default" style="padding:1px;padding-right:7px;padding-left:7px;box-shadow:none;">Reset</font>
			</font>
			<a href="<?php echo base_url('cmendwll');?>" style="text-decoration:none;color:black">
			<span style="padding:5px;border:1px solid #aeaeae;border-radius:47%;cursor:pointer;">
				<i class="fa fa-dashboard" style="font-size:16px;"></i>
			</span></a> &nbsp&nbsp <i class="fa fa-angle-double-right"></i> &nbsp <font id="paginationCnt">Admin Dashboard</font>
		</div>
		<div style="padding:10px;">
			<div id="E-AmessageArea" style="display:none;">
				Active Message Area
			</div>
			<div id="E-articlesArea" style="display:none;">
				<div>
					<font id="srchCntxxXed2" style="float:right;margin-top:-3px;display:none;">Search: <input id="artDAtaPol" type="text" name="artDAtaPol" placeholder="Type here..." style="padding-left:4px;width:200px;border-radius:5px;"> 
						<font id="artDAtaPolGo" class="btn btn-default" style="padding:1px;padding-right:7px;padding-left:7px;box-shadow:none;">Go</font>
						<font id="artDAtaPolRset" class="btn btn-default" style="padding:1px;padding-right:7px;padding-left:7px;box-shadow:none;">Reset</font>
					</font>
					<div>
						<button id="artOnew" class="btn btn-default" style="padding:2px;padding-left:8px;padding-right:8px;border-bottom:2px solid red;">New</button>
						<button id="artOpubL" class="btn btn-default" style="padding:2px;padding-left:8px;padding-right:8px;">Published</button>
						<button id="artORef" class="btn btn-default" style="padding:2px;padding-left:8px;padding-right:8px;">Refused</button>
					</div>
				</div>
				<div id="displayMyJournalx" style="padding:2px;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;box-shadow:inset 0 -0.5px 7px rgba(0, 0, 0, .3);margin-top:12px;font-size:11px;height:75%;background:#dddddd;overflow:auto;"><Br><font style="margin-left:10px;">No Article submitted...</font></div>
				<div id="displayMyJournalx2" style="padding:2px;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;box-shadow:inset 0 -0.5px 7px rgba(0, 0, 0, .3);margin-top:12px;font-size:11px;height:75%;background:#dddddd;overflow:auto;display:none;"><Br><font style="margin-left:10px;">No Article submitted...</font></div>
				<div id="displayMyJournalx3" style="padding:2px;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;box-shadow:inset 0 -0.5px 7px rgba(0, 0, 0, .3);margin-top:12px;font-size:11px;height:75%;background:#dddddd;overflow:auto;display:none;"><Br><font style="margin-left:10px;">No Article submitted...</font></div>
				<font id="warnMeed" style="font-size:14px;color:#b21010"></font>
				<font style="float:right;font-size:17px;">Total: <font id="artclxNfo"></font></font>
			</div>
			<div id="E-editorsArea" style="display:none;">
				<div style="padding:10px;">
					<font style="float:right">Total: <font id="bhgInf2"></font></font>
					Reviewers Area
				</div>
				<div style="height:500px;overflow:auto;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;" id="fox2">
					<table width="100%">
						<tbody id="cntntBsdRvwr"></tbody>
					</table>
				</div>
			</div>
			<div id="E-ResearchrsArea" style="display:none;">
				<div style="padding:10px;">
					<font style="float:right">Total: <font id="bhgInf3"></font></font>
					Researchers Area
				</div>
				<div style="height:500px;overflow:auto;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;" id="fox2">
					<table width="100%">
						<tbody id="cntntBsdRsearchrs"></tbody>
					</table>
				</div>
			</div>
			<div id="E-homeAreaAdmn">
				<div class="col-md-12">
					<div id="artView-btxpol" class="col-md-3 animated fadeInRight" style="cursor:pointer;">
						<div class="tile-stats" style="padding:10px;background:#93af5d;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)">
                            <div class="icon" style="margin-top:24px;color:white;"><i class="fa fa-plug" style="text-shadow:1px 1px 3px rgba(0, 0, 0, .3)"></i></div>
                            <div class="count" id="newARtPPxx001">Loading...</div>
                            <h3 style="color:white;">New Articles</h3>
                            <p>Waiting for your approval.</p>
                        </div>
					</div>
					<div id="artViewPub-btxpol2xx" class="col-md-3 animated fadeInRight" style="cursor:pointer;">
						<div class="tile-stats" style="padding:10px;background:#93af5d;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)">
                            <div class="icon" style="margin-top:24px;color:white;"><i class="fa fa-thumbs-up" style="text-shadow:1px 1px 3px rgba(0, 0, 0, .3)"></i></div>
                            <div class="count" id="popppaaxx67">Loading...</div>
                            <h3 style="color:white;">Approved Articles</h3>
                            <p>List of Approved Articles through you.</p>
                        </div>
					</div>
					<div class="col-md-3 animated fadeInRight" style="cursor:pointer;">
						<div class="tile-stats" style="padding:10px;background:#93af5d;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)">
                            <div class="icon" style="margin-top:24px;color:white;"><i class="fa fa-bullhorn" style="text-shadow:1px 1px 3px rgba(0, 0, 0, .3)"></i></div>
                            <div class="count" id="dispAnnCnt">Loading...</div>
                            <h3 style="color:white;">Announcements</h3>
                            <p>Related announcements for Org.</p>
                        </div>
					</div>
					<a href="#" style="text-decoration:none;" data-toggle="modal" data-target=".bs-viewLogsMyAll-modal-lg"><div class="col-md-3 animated fadeInRight" style="cursor:pointer;">
						<div class="tile-stats" style="padding:10px;background:#93af5d;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);color:black">
                            <div class="icon" style="margin-top:24px;color:white;"><i class="fa fa-list-ul" style="text-shadow:1px 1px 3px rgba(0, 0, 0, .3)"></i></div>
                            <div class="count" id="totalLogsmmy">Loading...</div>
                            <h3 style="color:white;">Reviewer Logs</h3>
                            <p>Your Activity Logs.</p>
                        </div>
					</div></a>
				</div>
				<font style="font-size:1px;">...</font>

<!--  start Meter -->

				<div style="height:65%;overflow:auto;border-bottom:1px solid #aeaeae;border-top:1px solid #aeaeae;padding-top:10px;background:#f4f4f4;box-shadow:inset 2px 2px 5px rgba(0, 0, 0, .22)">
					<div class="col-md-12">
						<div class="col-md-6">
							<div id="myCarousel" class="carousel slide" data-ride="carousel" style="border:5px solid white;box-shadow:0px 1px 1px 2px rgba(0, 0, 0, .21);">
				                <!-- Indicators -->
				                <ol class="carousel-indicators">
				                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				                  <li data-target="#myCarousel" data-slide-to="1"></li>
				                  <li data-target="#myCarousel" data-slide-to="2"></li>
				                  <li data-target="#myCarousel" data-slide-to="3"></li>
				                  <li data-target="#myCarousel" data-slide-to="4"></li>
				                </ol>

				                <!-- Wrapper for slides -->
				                <div class="carousel-inner">
				                  <div class="item active">
				                    <img src="<?php echo base_url('nwng/slider/1.jpg');?>" alt="" style="width:100%">
				                  </div>
				                  <div class="item">
				                    <img src="<?php echo base_url('nwng/slider/2.jpg');?>" alt="" style="width:100%">
				                  </div>
				                  <div class="item">
				                    <img src="<?php echo base_url('nwng/slider/3.jpg');?>" alt="" style="width:100%">
				                  </div>
				                  <div class="item">
				                    <img src="<?php echo base_url('nwng/slider/4.jpg');?>" alt="" style="width:100%">
				                  </div>
				                  <div class="item">
				                    <img src="<?php echo base_url('nwng/slider/5.jpg');?>" alt="" style="width:100%">
				                  </div>
				                </div>
				                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev" style="background:#679645;height:70px;width:70px;margin-top:24%;margin-left:-5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .55)">
				                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				                  <span class="sr-only">Previous</span>
				                </a>
				                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next" style="background:#679645;height:70px;width:70px;margin-top:24%;margin-right:-5px;box-shadow:1px 1px 1px rgba(0, 0, 0, .55)">
				                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				                  <span class="sr-only">Next</span>
				                </a>
				            </div>
						</div>
						<div class="col-md-6">
							<div id="annBasedArea">
								<div style="border-bottom:1px solid #aeaeae;"><b>Announcements</b></div>
								<div id="fox" class="annBasedAreaDisp" style="height:305px;overflow:auto;"></div>
							</div>
						</div>
					</div>
					<font style="font-size:1px">...</font>
					<div style="padding:5px;font-size:17px;text-align:left;font-family:calibri">
						<div style="padding:5px;">
				          <h4 style="font-weight:bold">ANNALS OF STUDIES IN SCIENCE AND HUMANITIES</h4>
				        </div>
				        <div>
				          The Journal Annals of Studies in Science and Humanities is a peer-reviewed open-access journal, which publishes quality papers to promote scholarly discussion across a broad range of academic disciplines. It accepts submissions in any area within natural and applied sciences, engineering, mathematics, education and social sciences with main focus on fishery, agri-forestry, minerals and eco-tourism. The journal is in English and published annually in both online and print versions. ASSH is an official research publication of the Caraga State University published by the University itself through the efforts of the Office of the Vice President and Extension.<br><br>
				          Online Edition: ISSN 02408-3631<br>
				          Print Edition: ISSN 2408-3623<Br><br>
				          Journal Annals of Studies in Science and Humanities. Volume 1 Number 1 May 2015.<br><br>
				          Articles published in this journal may be quoted without permission in other scholarly writing and in popular writing, as long as credit is given to the source. However, no article may be published in its entirely without written permission from ASSH.<Br><br>
				          <b>Editorial correspondence should be addressed to:</b> The Editor in-Chief, Journal Annals of Studies in Science and Humanities, c/o Caraga State University, Ampayon, Butuan City, 8600 Philippines, or e-mail at csu_assh@carsu.edu.ph<br><br>
				          <b>Subscription rates:</b> Annual subscription for printed copies, rates are as follows: Institution (USD 40); Individual (USD 20). Rates are exclusive of mailing cost. To subscribe, kindly send your name and complete mailing address to: Research Publication Unit, Office of the Vice President of Research and Extension, Caraga State University, Ampayon, Butuan City, 8600 Philippines, or e-mail at jparcede@carsu.edu.ph.
				        </div>
				    </div>
			        <div style="font-family:calibri;padding:5px;font-size:12px;border-top:1px solid #aeaeae;">
				        <div style="padding:5px;">
				          <h4 style="font-weight:bold">ABOUT THE SITE</h4>
				          <center><img src="<?php echo base_url('nwng/team.jpg');?>" style="width:50%;"></center>
				        </div>
				        <div style="padding-bottom:10px;font-size:16px;font-weight:bold;text-align:center">
				          The official Journal of Caraga State University "Journal Annals of Studies in Science and Humanities(ASSH)" is now online.<br>
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
				              <a href="#" data-toggle="modal" data-target=".bs-viewPicRuleArt-modal-lg"><img src="<?php echo base_url('nwng/edprocesslarge.png');?>" style="width:100%;height:100%;box-shadow:0px 0px 4px rgba(0, 0, 0, .42)"></a>
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
				              <font class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Focus and Scope</font><br>
				              <font class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Section Policies</font><br>
				              <font class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Peer Review Process</font><br>
				              <font class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Publication Frequency</font><br>
				              <font class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Open Access Policy</font><br>
				              <font class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Archiving</font><br>
				              <font class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Advertising Policy</font><br>
				            </div><br>
				            <b>SUBMISSIONS</b><br>
				            <div style="padding-left:20px;color:#167560">
				              <font class="abJ" data-toggle="modal" data-target=".bs-submission-modal-lg">>> Online Submissions</font><br>
				              <font class="abJ" data-toggle="modal" data-target=".bs-submission-modal-lg">>> Author Guidelines</font><br>
				              <font class="abJ" data-toggle="modal" data-target=".bs-submission-modal-lg">>> Submission Preparation Checklist</font><br>
				              <font class="abJ" data-toggle="modal" data-target=".bs-submission-modal-lg">>> Copyright Notice</font><br>
				              <font class="abJ" data-toggle="modal" data-target=".bs-submission-modal-lg">>> Privacy Statement</font>
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
				</div>
			</div>
		</div>
	</div>
</div>