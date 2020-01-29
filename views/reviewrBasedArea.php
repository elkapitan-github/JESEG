<div style="background:#aece71;padding:8px;box-shadow:1px 1px 1px rgba(0, 0, 0, .5)">
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <font style="font-size:18">CSU Online Journal System</font> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	LOGGED-iN AS:  
	<select id="Utype" name="Utype" style="width:100px;padding:2px;padding-left:5px;cursor:pointer;">
        <?php
        if($reviewerSel == 1){
        	echo '<option name="Utype" value="2">Reviewer</option>';
        }
        if($editorSel == 1){
        	echo '<option name="Utype" value="3">Editor</option>';
        }
        if($adminSel == 1){
        	echo '<option name="Utype" value="4">Admin</option>';
        }
        if($authorSel == 1 && $adminSel == 0){
        	echo '<option name="Utype" value="1">Author</option>';
        }
        ?>
    </select>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <?php
    foreach ($lastLog as $xLastLog) {
    	echo "Last Visit: " . $xLastLog->datein . " " . $xLastLog->timeout;
    }
    ?>
	<font style="float:right">
		<font id="showUlInfoProfile" class="btn btn-default animated fadeInUp" style="padding:4px;padding-left:10px;padding-right:10px;">
			<i class="fa fa-gears"></i>
		</font>
		<font id="clickToDipsNote" data-toggle="modal" data-target=".bs-viewNoteds-modal-lg" class="btn btn-default animated fadeInUp" style="padding:4px;padding-left:10px;padding-right:10px;">
			<font id="dsipNoteBell"></font>
			<i class="fa fa-bell"></i>
		</font>
		<a href="<?php echo base_url('gtReviewrRr/lcklc');?>"><font id="showUlInfoProfile" class="btn btn-default animated fadeInUp" style="padding:4px;padding-left:10px;padding-right:10px;">
			<i class="fa fa-lock"></i>
		</font></a>
	</font>
</div>
<div class="col-md-12" style="padding:0px;">
	<div class="col-md-2" style="padding:0px;border-right:1px solid #aeaeae;">
		<div style="padding-top:10px;">
			<center><b>JAZ</b> Article Reviewer</center>
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
				<font id="btn-dashReviewer" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;border-left:3px solid #7aad40">Dashboard <i class="fa fa-dashboard" style="float:right;font-size:18px;margin-top:2px;margin-right:4px;"></i></font>
				<font id="btn-ViewReserachrs" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Researchers <i class="fa fa-graduation-cap" style="float:right;font-size:18px;margin-top:2px;"></i></font>
				<font id="btn-ArticlesX" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Task for Articles <i class="fa fa-pied-piper-alt" style="float:right;font-size:18px;margin-top:2px;margin-right:2px;color:blue;"></i></font>
				<a href="<?php echo base_url('gtReviewrRr?epr=dash');?>"><font id="btn-ArticlesX" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Phone </font></a>
				<!--<font id="btn-AccompX" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Accomplishments <i class="fa fa-thumb-tack" style="float:right;font-size:18px;margin-top:2px;margin-right:4px;"></i></font>-->
				<!--<font id="btn-Messagex" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Messages <i class="fa fa-paper-plane" style="float:right;font-size:18px;margin-top:2px;margin-right:4px;"></i></font>-->
				<a href="<?php echo base_url('gtReviewrRr/lcklc');?>"><font id="lockBase" class="btn btn-default animated fadeInUp" style="text-align:left;width:100%;padding:2px;padding-left:10px;">Logout <i class="fa fa-lock" style="float:right;font-size:18px;margin-top:2px;margin-right:4px;"></i></font></a>
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
			<a href="<?php echo base_url('cmendwll');?>" style="text-decoration:none;color:black">
			<span style="padding:5px;border:1px solid #aeaeae;border-radius:47%;cursor:pointer;">
				<i class="fa fa-dashboard" style="font-size:16px;"></i>
			</span></a> &nbsp&nbsp <i class="fa fa-angle-double-right"></i> &nbsp <font id="paginationCnt">Admin Dashboard</font>
		</div>
		<div style="padding:10px;">
			<div id="AmessageArea" style="display:none;">
				Active Message Area
			</div>
			<div id="accompArea" style="display:none;">
				My Complishments
			</div>
			<div id="articlesArea" style="display:none;">
				<div class="col-md-12" style="padding:0px;font-size:12px;">
					<div id="newAssignedARtx" class="col-md-2 topMenu1" style="border-bottom:2px solid #f77b67;">
						New Assigned &nbsp&nbsp(<font id="partAreaVG1">0</font>)<i class="fa fa-unlink" style="float:right;font-size:16px;"></i>
					</div>
					<div id="AcceptdArtx" class="col-md-2 topMenu1">
						Accepted - for Review &nbsp&nbsp(<font id="partAreaVG2">0</font>)<i class="fa fa-sort-amount-asc" style="float:right;font-size:16px;"></i>
					</div>
					<div id="publishableXXart" class="col-md-2 topMenu1">
						Approved - Publishable &nbsp&nbsp(<font id="partAreaVG3">0</font>)<i class="fa fa-newspaper-o" style="float:right;font-size:16px;"></i>
					</div>
					<div id="IgnredArt4Rev" class="col-md-2 topMenu1">
						Disapproved Article/s &nbsp&nbsp(<font id="partAreaVG4">0</font>)<i class="fa fa-external-link" style="float:right;font-size:16px;"></i>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4" style="text-align:right">
						<font style="float:right;margin-top:2px;">Search: <input type="text" id="SearchINFnwGETart" name="SearchINFnwGETart" placeholder="Type here..." style="padding-left:4px;width:200px;border-radius:5px;"> 
							<font id="SEarArrelationsxx" class="btn btn-default" style="padding:1px;padding-right:3px;padding-left:3px;box-shadow:none;">Go</font>
							<font id="SEarArrelationsxxReset" class="btn btn-default" style="padding:1px;padding-right:3px;padding-left:3px;box-shadow:none;">Reset</font>
						</font>
					</div>
				</div>
				<font style="font-size:1px;">...</font>
				<div id="cntArtAreax1-cnt" >
					<div id="fox2" style="height:500px;overflow:auto;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;">
						<table width="100%">
							<tbody id="cntArtAreax1"></tbody>
						</table>
					</div>
					<div style="padding:10px;">
						<font style="float:right;">Total: <font id="nkllaax1"></font></font>
						New task for article validation will be considered ignored after 2 days of non-acceptance from you.
					</div>
				</div>
				<div id="cntArtAreax2-cnt" style="display:none">
					<div id="fox2" style="height:500px;overflow:auto;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;">
						<table width="100%">
							<tbody id="cntArtAreax2"></tbody>
						</table>
					</div>
					<font style="float:right;margin-right:10px;margin-top:10px;">Total: <font id="nkllaax2"></font></font>
				</div>
				<div id="cntArtAreax3-cnt" style="display:none">
					<div id="fox2" style="height:500px;overflow:auto;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;">
						<table width="100%">
							<tbody id="cntArtAreax3"></tbody>
						</table>
					</div>
					<font style="float:right;margin-right:10px;margin-top:10px;">Total: <font id="nkllaax3"></font></font>
				</div>
				<div id="cntArtAreax4-cnt" style="display:none">
					<div id="fox2" style="height:500px;overflow:auto;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;">
						<table width="100%">
							<tbody id="cntArtAreax4"></tbody>
						</table>
					</div>
					<font style="float:right;margin-right:10px;margin-top:10px;">Total: <font id="nkllaax4"></font></font>
				</div>
			</div>
			<div id="editorsArea" style="display:none;">
				Editors Area
			</div>
			<div id="ResearchrsArea" style="display:none;">
				<div style="padding:10px;">
					<font id="OriginSearch" style="float:right;margin-top:-3px;display:none;">Search: <input type="text" id="searchForREsmmmx" name="searchForREsmmmx" placeholder="Type here..." style="padding-left:4px;width:200px;border-radius:5px;"> <font id="searchREkkl" class="btn btn-default" style="padding:1px;padding-right:7px;padding-left:7px;box-shadow:none;">Go</font><font id="searchREkklshwAAAl" class="btn btn-default" style="padding:1px;padding-right:7px;padding-left:7px;box-shadow:none;">Show All</font></font> 
					Researchers Area
				</div>
				<div style="height:500px;overflow:auto;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;" id="fox2">
					<table width="100%">
						<tbody id="cntntBsdRsearchrs"></tbody>
					</table>
				</div>
				<font style="float:right;margin-right:10px;margin-top:10px;">Total result(s): <font id="bhgInf3"></font></font>
			</div>
			<div id="homeAreaAdmn">
				<div class="col-md-12">
					<a href="#" id="clickPEndingShowxx1" style="text-decoration:none;"><div class="col-md-3 animated fadeInRight" style="cursor:pointer;">
						<div class="tile-stats" style="padding:10px;background:#93af5d;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)">
                            <div class="icon" style="margin-top:24px;color:white;"><i class="fa fa-plug" style="text-shadow:1px 1px 3px rgba(0, 0, 0, .3)"></i></div>
                            <div class="count" id="dataforPend">Loading...</div>
                            <h3 style="color:white;">Pending Articles</h3>
                            <p>Waiting for approval.</p>
                        </div>
					</div></a>
					<a href="#" id="showApprvListAll9011x" style="text-decoration:none;"><div class="col-md-3 animated fadeInRight" style="cursor:pointer;">
						<div class="tile-stats" style="padding:10px;background:#93af5d;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)">
                            <div class="icon" style="margin-top:24px;color:white;"><i class="fa fa-thumbs-up" style="text-shadow:1px 1px 3px rgba(0, 0, 0, .3)"></i></div>
                            <div class="count" id="approvedArctx2">Loading...</div>
                            <h3 style="color:white;">Approved Articles</h3>
                            <p>List of Approved Articles.</p>
                        </div>
					</div></a>
					<a href="#" style="text-decoration:none;"><div class="col-md-3 animated fadeInRight" style="cursor:pointer;">
						<div class="tile-stats" style="padding:10px;background:#93af5d;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)">
                            <div class="icon" style="margin-top:24px;color:white;"><i class="fa fa-bullhorn" style="text-shadow:1px 1px 3px rgba(0, 0, 0, .3)"></i></div>
                            <div class="count" id="dispAnnCnt">Loading...</div>
                            <h3 style="color:white;">Announcements</h3>
                            <p>Related announcements for Org.</p>
                        </div>
					</div></a>
					<a href="#" style="text-decoration:none;" data-toggle="modal" data-target=".bs-viewLogsMyAll-modal-lg"><div class="col-md-3 animated fadeInRight" style="cursor:pointer;">
						<div class="tile-stats" style="padding:10px;background:#93af5d;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)">
                            <div class="icon" style="margin-top:24px;color:white;"><i class="fa fa-list-ul" style="text-shadow:1px 1px 3px rgba(0, 0, 0, .3)"></i></div>
                            <div class="count" id="totalLogsmmy">Loading...</div>
                            <h3 style="color:white;">Reviewer Logs</h3>
                            <p>Your Activity Logs.</p>
                        </div>
					</div></a>
				</div>
				<font style="font-size:1px;">...</font>

<!--  start Meter -->

				<div style="height:65%;overflow:auto;border-bottom:1px solid #aeaeae;border-top:1px solid #aeaeae;padding-top:10px;background:#f4f4f4">
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
				              <img src="<?php echo base_url('nwng/edprocesslarge.png');?>" style="width:100%;height:100%;box-shadow:0px 0px 4px rgba(0, 0, 0, .42)">
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

	<!-- Modal -->
	<div class="modal fade bs-viewContact-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#ffcb8c">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-phone" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Journal Contact
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <h3>MAILING ADDRESS</h3>
                    Caraga State University<br>Ampayon, Butuan City Philippines<br>8600<br><br>
                    <h3>PRINCIPAL CONTACT</h3>
                    <b><font style="font-size:16px;">Dr. Jayrold P. Arcede</font></b><br>Editor-in-Chief<br>Caraga State University<br>Ampayon, Butuan City Philippines<br>8600<br>Phone: 341-2786<Br>Fax: 342-1079<br>Email: jparcede@carsu.edu.ph<br><br>
                    <h3>SUPPORT CONTACT</h3>
                    <b><font style="font-size:16px;">Dr. Romell A. Seronay</font></b><br>Phone: 085-341-6251<br>Email: romell.seronay@gmail.com
                </div>
                <div style="background:#ffdaad;height:5px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-editorialTeam-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#ffcb8c">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-android" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>
                        <i class="fa fa-android" style="color:red;font-size:22px;text-shadow:1px 1px 1px black;margin-left:-11px;"></i>
                        <i class="fa fa-android" style="color:red;font-size:22px;text-shadow:1px 1px 1px black;margin-left:-11px"></i>&nbsp&nbsp Editorial Team
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <h3>EDITOR-IN-CHIEF</h3>
                    <b>Jayrold P. Arcede</b>, Caraga State University, Philippines<br><br>
                    <h3>MANAGING EDITOR</h3>
                    <b>Romell A. Seronay</b>, Caraga State University, Philippines<br><br>
                    <h3>ASSOCIATE EDITORS</h3>
                    <b>Raquel M. Balanay</b>, Caraga State University, Philippines<br>
                    <b>Esamel M. Paluga</b>, Caraga State University, Philippines<br>
                    <b>Joycelyn C. Jumawan</b>, Caraga State University, Philippines<br>
                    <b>Dr. Teresita A. Atega</b>, Caraga State University, Philippines<br>
                    <b>Rey Yonson Capangpangan</b>, Caraga State University, Philippines<br>
                    <b>Rolyn C. Daguil</b>, Caraga State University, Philippines<br><br>
                    <h3>ASSOCIATE EDITORS</h3>
                    <b>Danilo S. Alterado</b>, Philosophy Department, Saint Louis University, Philippines<br>
                    <b>Ferdinand Jamil</b>, Mathematics Dept., MSU-Iligan Institute of Technology, Philippines<br>
                    <b>Hasan Hassanabadi</b>, Physics Dept., Shahrood University, Iran, Islamic Republic of<br>
                    <b>Henry Jordaan</b>, Department of Agricultural Economics University of the Free State, South Africa<br>
                    <b>Katta G. Murty</b>, Industrial and Operations engineering, The University of Michigan, Ann Arbor., United States<br>
                    <b>Ryan C. Urbano</b>, Department of Philosophy and Religious Studies, University of San Carlos<br>
                    <b>Asuncion De Guzman</b>, Gaia Resource and Environmental (GReEn) Consultancy Services, Philippines<br>
                    <b>Wilfredo H. Uy</b>, Institute of Fisheries Research and Development, Mindanao State University at Naawan, Philippines<br>
                    <b>Christopher C. Ambe</b>, Chemistry Dept. MSU-Iligan Institute of Technology<br>
                    <b>Christopher Ryan B. Maboloc</b>, Philosophy Division, Ateneo De Davao University, Philippines<br>
                    <b>Julius Benitez</b>, Mathematics Dept., MSU-Iligan Institute of Technology, Philippines<br><br>
                </div>
                <div style="background:#ffdaad;height:5px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-editorialPolicies-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#ffcb8c">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-check-square-o" style="color:red;font-size:22px;text-shadow:1px 1px 1px black;"></i>&nbsp&nbsp Editorial Policies
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <h3>FOCUS AND SCOPE &nbsp&nbsp&nbsp<font id="hand1" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    The Annals of Studies in Science and Humanities is a peer-reviewed open-access journal, which publishes quality papers to promote scholarly discussion across a broad range of academic disciplines. It accepts submissions in any area within natural and applied sciences, engineering, mathematics, education and social sciences with main focus on fishery, agri-forestry, minerals and eco-tourism. The journal is in English and published semi-annually both online and print versions.<br><br>
                    <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                    <h3>SECTION POLICIES &nbsp&nbsp&nbsp<font id="hand2" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    <h5><b>ARTICLES</b></h5>
                    <i class="fa fa-check-square-o" style="color:green"></i> Open Submissions &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <i class="fa fa-check-square-o" style="color:green"></i> Indexed &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <i class="fa fa-check-square-o" style="color:green"></i> Peer Reviewed
                    <h5><b>COMMENTARY</b></h5>
                    This section is for commentary purposes only!<br><br>
                    <i class="fa fa-check-square-o" style="color:green"></i> Open Submissions &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <i class="fa fa-check-square-o" style="color:green"></i> Indexed &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <i class="fa fa-check-square-o" style="color:green"></i> Peer Reviewed<Br><br>
                    <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                    <h3>PEER REVIEW PROCESS &nbsp&nbsp&nbsp<font id="hand3" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    Each submitted manuscript is evaluated on the following basis:<br>
                    <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp The originality of its contribution to the field of scholaly publishing;
                    <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp The soundness of its theory and methodology given the topic;
                    <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp The coherence of its analysis;
                    <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp Its ability to communicate to readers (grammar and style).
                    <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp Plagiarism should be at most 5%.<font id="handSDown" style="padding:10px;font-size:35px;position:absolute;margin-left:57%;" class="animated bounceInDown"><i class="fa fa-hand-o-down" style="text-shadow:1px 1px 1px rgba(0, 0, 0, .45);color:red"></i></font><br><br>
                    Normal turn-around time for evaluation of manuscripts is four to six months from the date of receipt.<br><br>
                    <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                    <h3>PUBLICATION FREQUENCY &nbsp&nbsp&nbsp<font id="hand4" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    This Journal is published 2 times per year.<br><br>
                    <h3>OPEN ACCESS POLICY &nbsp&nbsp&nbsp<font id="hand5" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    This journal provides immediate open access to its content on the principle that making research freely available to the public supports a greater global exchange of knowledge.<br><br>
                    <h3>ARCHIVING &nbsp&nbsp&nbsp<font id="hand6" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    This journal utilizes the LOCKSS system to create a distributed archiving system among participating libraries and permits those libraries to create permanent archives of the journal for purposes of preservation and restoration. <a href="https://www.lockss.org/" target="__blank" class="bottomIns" style="color:blue;">More...</a><br><br>
                    <h3>ADVERTISING POLICY &nbsp&nbsp&nbsp<font id="hand7" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    The Journal of Annals of Studies in Science and Humanities accepts online advertising.<br><br>
                </div>
                <div style="background:#ffdaad;height:5px;"></div>
            </div>
        </div>
    </div>