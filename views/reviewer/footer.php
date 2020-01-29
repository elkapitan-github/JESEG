	<span id="noteArr" class="animated slideInRight" style="display:none;">...</span>
    <div class="modal fade bs-confirmBan-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                    	<i class="fa fa-warning" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Admin Confirmation
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                	<center>
                        <i style="color:green">Accepting...</i>
                        <div id="InfoDAtaofNwUsr" style="width:350px;text-align:left;padding:10px;border-bottom:1px solid #aeaeae"></div>
                		<div style="padding:10px;"><font style="font-size:21px;">To confirm this action, please fill the following...</font></div>
                    </center>
                    <form id="requestAcc_frm">
                        <input type="hidden" name="useridCred">
                        <div class="col-md-12" style="padding:0px;">
                            <div class="col-md-6" style="text-align:right">
                                <font style="font-size:17px;">User Type:</font> 
                            </div>
                            <div class="col-md-6">
                                <select name="Utype" style="width:240px;padding:4px;padding-left:5px;cursor:pointer;">
                                    <option name="Utype" value="1">Author Only</option>
                                    <option name="Utype" value="2">Editor & Author</option>
                                    <option name="Utype" value="3">Reviewer, Editor & Author</option>
                                    <option name="Utype" value="4">Admin & Author</option>
                                    <option name="Utype" value="5">Admin, Reviewer, Editor & Author</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-12" style="padding:0px;">
                            <div class="col-md-6" style="text-align:right">
                                <font style="font-size:17px;">Your Password:</font> 
                            </div>
                            <div class="col-md-6">
                                <input id="inpTTdConfpassword" type="password" name="inpTTdConfpassword" style="width:240px;padding:2px;padding-left:5px;" placeholder="Type here...">
                            </div>
                        </div>
                    </form>
                    <?php echo '<input type="hidden" name="getPassWRD" value="'.$getPassWord.'">';?>
                    <div id="invalidMes" style="padding:3px;color:red;text-align:center;"></div>
                </div>
                <div style="background:#aece71;padding:10px;">
                	<center>
                		<button id="submitNewEmployee" type="button" class="btn btn-success" style="padding:2px;padding-right:10px;padding-left:10px;">Submit</button><font id="changeBtn" style="display:none;">Please wait...</font>
                    	<button type="button" class="btn btn-default" data-dismiss="modal" style="padding:2px;padding-right:10px;padding-left:10px;">Cancel/Reset</button>
                	</center>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade bs-history-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-line-chart" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Journal History
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    The Journal of Annals of Studies in Science and Humanities was started in 2015. The main goal were publication and dissemination of researches in the Caraga region and beyond to a wider audience. 
                </div>
                <div style="background:#aece71;height:5px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-sponsorSHP-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-gears" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Journal Sponsorship
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <h3>PUBLISHER &nbsp&nbsp&nbsp<font id="sponShand1" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    The Annals of Studies in Science and Humanities is published by the Caraga State University<br><br>
                    <font style="color:blue" class="bottomIns"><a href="http://www.carsu.edu.ph/" style="text-decoration:none;" target="__blank">Caraga State University</a></font><br><br>
                    <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                    <h3>SPONSORS &nbsp&nbsp&nbsp<font id="sponShand2" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    The Journal of Annals of Studies in Science and Humanities is generously sponsored by the following organizations:<br><br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> <font style="color:blue" class="bottomIns"><a href="http://www.carsu.edu.ph/" style="text-decoration:none;" target="__blank">Caraga State University</a></font><br><br>
                    <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                    <h3>SOURCES OF SUPPORT &nbsp&nbsp&nbsp<font id="sponShand3" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    We would like to thank the following organizations for their support:<br><br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> <font style="color:blue" class="bottomIns"><a href="http://19.46.1.19/?q=ict-center/ict-team" style="text-decoration:none;" target="__blank">Information and Communication Technology Center</a></font><br><br>
                </div>
                <div style="background:#aece71;height:5px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-viewNoteds-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-file" style="color:white;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Notifications
                    </h4>
                </div>
                <div class="modal-body" style="font-size:16px;color:black;padding:12px;">
                    <div class="fox3" id="displatNotexAA" style="height:50%;overflow:auto;border-bottom:1px solid #aeaeae;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-submission-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-clipboard" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Submissions
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <h3>ONLINE SUBMISSIONS &nbsp&nbsp&nbsp<font id="subhand1" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    Already have a Username/Password for Annals of Studies in Science and Humanities?<br>
                    GO TO LOGIN<br><br>
                    Need a Username/Password?<br>
                    GO TO REGISTRATION<br><br>
                    Registration and login are required to submit items online and to check the status of current submissions.<br><br>
                    <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                    <h3>AUTHOR GUIDELINES &nbsp&nbsp&nbsp<font id="subhand2" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    Set out for authors the bibliographic and formatting standards used for items submitted to the journal (e.g., <i>Publication Manual of the American Psychological Association</i>, 5th edition, 2001). It is often helpful to provide examples of the common citation formats for journals and books to be used in submissions. Also identify the types of appropriate Supplementary Files (e.g., data-sets, research instruments, etc.) which authors should be encouraged to upload, in addition to their submission, to enhance readers' engagement with their work. <br><br>
                    <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                    <h3>SUBMISSION PREPARATION CHECKLIST &nbsp&nbsp&nbsp<font id="subhand3" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    As part of the submission process, authors are required to check off their submission's compliance with all of the following items, and submissions may be returned to authors that do not adhere to these guidelines.<br><br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp1. The submission has not been previously published, nor is it before another journal for consideration (or an explanation has been provided in Comments to the Editor).<br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp2. The submission file is in OpenOffice, Microsoft Word, RTF, or WordPerfect document file format.<br><font id="handSDown2" style="padding:10px;font-size:35px;position:absolute;margin-left:90%;display:none;" class="animated bounceInDown"><i class="fa fa-hand-o-down" style="text-shadow:1px 1px 1px rgba(0, 0, 0, .45);color:red"></i></font>
                    &nbsp&nbsp&nbsp&nbsp&nbsp3. Where available, URLs for the references have been provided.<br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp4. The text is single-spaced; uses a 12-point font; employs italics, rather than underlining (except with URL addresses); and all illustrations, figures, and tables are placed within the text at the appropriate points, rather than at the end.<br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp5. The text adheres to the stylistic and bibliographic requirements outlined in the Author Guidelines, which is found in About the Journal.<br>
                    &nbsp&nbsp&nbsp&nbsp&nbsp6. If submitting to a peer-reviewed section of the journal, the instructions in Ensuring a Blind Review have been followed.<br><br>
                    <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                    <h3>COPYRIGHT NOTICE &nbsp&nbsp&nbsp<font id="subhand4" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    Submission of an original manuscript to the Journal of Annals of Studies in Science and Humanities will be taken to mean that it represents original work not previously published, that it is not being considered elsewhere for publication; that the author is willing to assign copyright to the journal as per a contract that will be sent to the author just priuor to publication and, if accepted for publication, it will be published in print and online and it will not be published elsewhere in the same form, for commercial purposed, in any language, withour the consent of the publisher........<br><br>
                    <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                    <h3>PRIVACY STATEMENT &nbsp&nbsp&nbsp<font id="subhand5" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    The names and email addresses entered in this journal site will be used exclusively for the stated purposes of this journal and will not be made available for any other purpose or to any other party.
                </div>
                <div style="background:#aece71;height:5px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-viewLogsMyAll-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
                <div class="modal-header" style="background:#aece71;width:100.1%;box-shadow:1px 1px 4px rgba(0, 0, 0, .22);">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-history" style="color:#f2d21d;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Reviewer Logs
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <div id="contentLogsPste" class="fox3" style="height:50%;overflow:auto;border-bottom:1px solid #aeaeae;"></div>
                    <div style="padding:10px;font-size:14px;">
                       Please be guided. This is for evaluation pusposes only. 
                   </div> 
                </div>
                <div style="background:#aece71;height:5px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-viewPersonalRec-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
                <div class="modal-header" style="background:#aece71;width:100.1%;box-shadow:1px 1px 4px rgba(0, 0, 0, .22);">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-info-circle" style="color:#f2d21d;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp General information
                    </h4>
                </div>
                <div class="modal-body" style="color:black;padding:12px;">
                    <div id="infoP2xhrhr"></div>
                    <div style="padding:10px;border-top:1px solid #aeaeae;text-align:center;">
                        You can view published articles at your author area.
                    </div>
                </div>
                <div style="background:#aece71;height:5px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-controlsValidPaper-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
                <div class="modal-header" style="background:#aece71;width:100.1%;box-shadow:1px 1px 4px rgba(0, 0, 0, .22);">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-info-circle" style="color:#f2d21d;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Article Response Confirmation
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <center><font id="ACmes" style="font-size:25px;"></font></center>
                    <form id="form_reponse" style="font-size:25px;">
                        <input type="hidden" name="idofArticleXx">
                        <input type="hidden" name="titleOfthisJourn">
                        <div class="col-md-12" style="padding-top:10px;">
                            <div class="col-md-5" style="text-align:right">Decision: </div>
                            <div class="col-md-7">
                                <select name="controlRepnseArt" id="controlRepnseArt" style="padding:2px;cursor:pointer;width:250px;">
                                    <option name="controlRepnseArt" value="accepted">Agree to Review</option>
                                    <option name="controlRepnseArt" value="ignored">Refuse</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div style="background:#aece71;padding:10px;">
                    <center>
                        <button id="sbmitrespnseArti" type="button" class="btn btn-success" style="padding:2px;padding-right:10px;padding-left:10px;">Submit</button><font id="changeBtnRepsnseARt" style="display:none;">Please wait...</font>
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:2px;padding-right:10px;padding-left:10px;">Cancel/Reset</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-tasksListsArt-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg" style="width:90%">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52);">
                <div class="modal-header" style="background:#aece71;width:100.1%;box-shadow:1px 1px 4px rgba(0, 0, 0, .22);">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-tasks" style="color:#f2d21d;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Task for Articles
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <div class="col-md-12">
                        <div class="col-md-6" style="border-right:1px solid #aeaeae;">
                            <div id="jsjsdalww" class="fox3" style="height:350px;overflow:auto;font-size:15px;border-bottom:1px solid #dedede;padding-bottom:20px;border-top:1px solid #dedede"></div>
                            <input type="hidden" name="JournalUIDXKLxx">
                            <div style="padding:5px;">
                                Set Vindication:
                            </div>
                            <div style="padding-top:10px;">
                                <center>
                                    <font id="finalApprovRevJNjr" class="btn btn-success" style="font-size:17px;margin-top:2px;" data-toggle="modal" data-target=".bs-reviewAppJrnxNNx-modal-lg">Accept as it is</font>
                                    <font id="finalApprovRevJNjr2" class="btn btn-primary" style="font-size:17px;margin-top:2px;" data-toggle="modal" data-target=".bs-reviewAppJrnxNNx2-modal-lg">Accept with Minor revision</font>
                                    <font id="finalApprovRevJNjr3" class="btn btn-warning" style="font-size:17px;margin-top:2px;" data-toggle="modal" data-target=".bs-reviewAppJrnxNNx3-modal-lg">Accept with Major revision</font>
                                    <font id="finalApprovRevJNjr4" class="btn btn-danger" style="font-size:17px;margin-top:2px;" data-toggle="modal" data-target=".bs-reviewAppJrnxNNx4-modal-lg">Reject</font>
                                </center>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div id="klikaas" style="width:100%;">
                                <font id="" class="btn btn-default" data-toggle="modal" data-target=".bs-baseReplyXXp1-modal-lg" style="float:right;background:#9dc67f;color:black;padding:0px;padding-right:8px;padding-left:8px;">Set New Task &nbsp <i class="fa fa-file"></i></font>
                                <h4>Task to Author</h4>
                                <div id="resListofTaskConv" class="fox3" style="height:350px;overflow:auto;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;padding-top:10px;padding-right:5px;"></div>
                            </div>
                            <font id="viewARtkllUpddte" class="btn btn-default" data-toggle="modal" data-target=".bs-articleUpdatesX01-modal-lg" style="float:right;background:#9dc67f;margin-top:5px;color:black">Article Updates</font>
                            <font class="btn btn-default" data-toggle="modal" data-target=".bs-baseforGeneralTasklst-modal-lg" style="float:right;background:#9dc67f;margin-top:5px;color:black">Approved General tasks to author</font>
                            Total: <font id="tttXg"></font>&nbsp&nbsp&nbsp
                        </div>
                    </div><font style="font-size:1px;">.</font>
                </div>
                <div style="background:#aece71;padding:10px;height:5px;">
            </div>
        </div>
    </div>
    <div class="modal fade bs-reviewAppJrnxNNx-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
                <div class="modal-header" style="background:#aece71;width:100.1%;box-shadow:1px 1px 4px rgba(0, 0, 0, .22);">
                    <button type="button" class="close clickFxx"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-warning" style="color:#e02c14;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Reviewer Confirmation
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <div id="contentLogsPste2xxtwe" style="font-size:25px;text-align:center;"></div>
                </div>
                <div style="background:#aece71;padding:10px;height:50px;">
                    <button type="button" class="btn btn-default jasdjldx" style="padding:2px;padding-right:10px;padding-left:10px;float:right">Close</button>
                    <button type="button" id="prosPropSbmtArccx" class="btn btn-default" style="padding:2px;padding-right:10px;padding-left:10px;float:right;background:#4d7bb7;color:white;">Proceed</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-reviewAppJrnxNNx2-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
                <div class="modal-header" style="background:#aece71;width:100.1%;box-shadow:1px 1px 4px rgba(0, 0, 0, .22);">
                    <button type="button" class="close clickFxx"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-warning" style="color:#e02c14;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Reviewer Confirmation
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <div id="contentLogsPste2xxtwe2" style="font-size:25px;text-align:center;"></div>
                </div>
                <div style="background:#aece71;padding:10px;height:50px;">
                    <button type="button" class="btn btn-default jasdjldx2" style="padding:2px;padding-right:10px;padding-left:10px;float:right">Close</button>
                    <button type="button" id="prosPropSbmtArccx2" class="btn btn-default" style="padding:2px;padding-right:10px;padding-left:10px;float:right;background:#4d7bb7;color:white;">Proceed</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-reviewAppJrnxNNx3-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
                <div class="modal-header" style="background:#aece71;width:100.1%;box-shadow:1px 1px 4px rgba(0, 0, 0, .22);">
                    <button type="button" class="close clickFxx"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-warning" style="color:#e02c14;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Reviewer Confirmation
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <div id="contentLogsPste2xxtwe3" style="font-size:25px;text-align:center;"></div>
                </div>
                <div style="background:#aece71;padding:10px;height:50px;">
                    <button type="button" class="btn btn-default jasdjldx3" style="padding:2px;padding-right:10px;padding-left:10px;float:right">Close</button>
                    <button type="button" id="prosPropSbmtArccx3" class="btn btn-default" style="padding:2px;padding-right:10px;padding-left:10px;float:right;background:#4d7bb7;color:white;">Proceed</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-reviewAppJrnxNNx4-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
                <div class="modal-header" style="background:#aece71;width:100.1%;box-shadow:1px 1px 4px rgba(0, 0, 0, .22);">
                    <button type="button" class="close clickFxx"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-warning" style="color:#e02c14;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Reviewer Confirmation
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <div id="contentLogsPste2xxtwe4" style="font-size:25px;text-align:center;"></div>
                </div>
                <div style="background:#aece71;padding:10px;height:50px;">
                    <button type="button" class="btn btn-default jasdjldx4" style="padding:2px;padding-right:10px;padding-left:10px;float:right">Close</button>
                    <button type="button" id="prosPropSbmtArccx4" class="btn btn-default" style="padding:2px;padding-right:10px;padding-left:10px;float:right;background:#4d7bb7;color:white;">Proceed</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-articleUpdatesX01-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
                <div class="modal-header" style="background:#aece71;width:100.1%;box-shadow:1px 1px 4px rgba(0, 0, 0, .22);">
                    <button type="button" class="close clickFxx"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-info-circle" style="color:#f2d21d;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Article Updates
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <div id="contentLogsPste2" class="fox3" style="height:70%;overflow:auto"></div>
                </div>
                <div style="background:#aece71;padding:10px;height:50px;">
                    <button type="button" class="btn btn-default clickFxx" style="padding:2px;padding-right:10px;padding-left:10px;float:right">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-baseforGeneralTasklst-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
                <div class="modal-header" style="background:#aece71;width:100.1%;box-shadow:1px 1px 4px rgba(0, 0, 0, .22);">
                    <button id="closeThisModal1" type="button" class="close" aria-label="Close" style="border-radius:50%;border:1px solid white;padding:2px;padding-left:10px;padding-right: 10px;margin-top:-6px;"><span aria-hidden="true" style="font-size:35px;">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-info-circle" style="color:#f2d21d;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Approved General Reviewers Tasks
                    </h4>
                </div>
                <div class="modal-body fox3" style="font-size:12px;color:black;padding-left:5px;height:500px;overflow:auto;">
                    <div id="listofGeneralTaskHere" style="padding-left:10px;"></div>
                </div>
                <div style="background:#aece71;height:5px;">
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-baseReplyXXp2-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        Sending reply as <b>Reviewer</b>
                    </h4>
                </div>
                <div class="modal-body fox3" style="font-size:12px;color:black;padding-left:5px;">
                    <form id="task_formN2">
                        <input type="hidden" name="journalID4task2">
                        <input type="hidden" name="JournalIDlgt2">
                        <div id="messageResTake" class="fox3" style="height:70px;overflow:auto;padding:5px;"></div>
                        <div style="padding:3px">
                            <textarea id="messageforTaskofAut2" name="messageforTaskofAut2" placeholder="Click to start a Message here..." class="form-control" style="padding:3px;width:100%;height:200px;line-height: 110%;"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="background:#aece71;">
                    <button id="sbmtNewTskN2" class="btn btn-default" style="background:#9dc67f;float:right;margin-top:-10px;color:black">Submit Message</button>
                    <button id="cancelsbmtNewTskN2" class="btn btn-default" data-dismiss="modal" style="float:right;margin-top:-10px;color:black">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-baseReplyXXp1-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        Sending task to <b>Researcher</b>
                    </h4>
                </div>
                <div class="modal-body fox3" style="font-size:12px;color:black;padding-left:5px;">
                    <form method="POST" action="<?php echo base_url();?>gtReviewrRr/sbmtFileDat" id="uploadfile" enctype="multipart/form-data">
                        <input type="hidden" name="journalID4task">
                        <input type="hidden" name="cpyRowIDofNEWFLLE">
                        <textarea id="messageforTaskofAut" name="messageforTaskofAut" placeholder="Message here..." class="form-control" style="padding:3px;width:100%;height:200px;line-height: 110%;"></textarea>
                        <div style="padding:15px;background:#dddddd;box-shadow:inset 0 0 4px rgba(0, 0, 0, .23);">
                            <div id="firstContextBes21">
                                <input type="file" name="file" id="file" style="-webkit-appearance:button;padding:5px;width:100%;cursor:pointer;background:#96d19b" required="">
                                <button id="SBmitFF" type="submit" class="submit" style="margin-top:5px;">Attach File</button>
                                <br>
                                <div id="psw1x1"></div>
                                <progress id="prog" value="0" max="100" style="width:90%;height:7px;"></progress> <font id="percentageCMP">0%</font>
                                <font><i>Document: </i><font id="duscxx"><font style="color:#aeaeae">No file</font></font></font>
                            </div>
                            <div id="firstContextBes22">
                                <table width="100%">
                                    <tbody id="basedspFileNNd"></tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer" style="background:#aece71;">
                    <button id="sbmtNewTskN" class="btn btn-default" style="background:#9dc67f;float:right;margin-top:5px;color:black">Submit Task</button>
                    <font id="cancelsbmtNewTskN" class="btn btn-default" data-dismiss="modal" style="float:right;margin-top:5px;color:black">Cancel</font>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="modalTemp2" style="">
        <div style="border-bottom:1px solid #dddddd;padding:3px;margin-top:4px;padding-left:6px;padding-right:6px;">
            Sending reply to <b>Reviewer</b><font style="float:right;color:#565656">Movable Area</font>
        </div>
        <div>
            <form id="task_formN2">
                <input type="hidden" name="journalID4task2">
                <input type="hidden" name="JournalIDlgt2">
                <div id="messageResTake" class="fox3" style="height:70px;overflow:auto;padding:5px;border:1px solid #aeaeae;"></div>
                <div style="padding:3px">
                    <textarea id="messageforTaskofAut2" name="messageforTaskofAut2" placeholder="Message here..." class="form-control" style="padding:3px;width:100%;height:75%;line-height: 110%;"></textarea>
                </div>
            </form>
        </div>
        <div style="height:50px;">
            <font id="sbmtNewTskN2" class="btn btn-default" style="background:#9dc67f;float:right;margin-top:-10px;color:black">Submit Message</font>
            <font id="cancelsbmtNewTskN2" class="btn btn-default" style="float:right;margin-top:-10px;color:black">Cancel</font>
            <span style="position:absolute;margin-top:-13px;">
                &nbsp&nbsp&nbsp <font style="color:#565656;font-size:11px;">Hold Shift + moveUp(<i class="fa fa-arrow-up"></i>) or moveDown(<i class="fa fa-arrow-down"></i>),</font><br>
                &nbsp&nbsp&nbsp <font style="color:#565656;font-size:11px;">Hold Ctrl + A to erase a field</font>
            </span>
        </div>
    </div>-->
    
    <!--<div class="modalTemp" style="">
        <div style="border-bottom:1px solid #dddddd;padding:3px;margin-top:4px;padding-left:6px;padding-right:6px;">
            Assigning Task<font style="float:right;color:#565656">Movable Area</font>
        </div>
        <div style="padding:3px">
            <form method="POST" action="<?php echo base_url();?>gtReviewrRr/sbmtFileDat" id="uploadfile" enctype="multipart/form-data">
                <input type="hidden" name="journalID4task">
                <input type="hidden" name="cpyRowIDofNEWFLLE">
                <textarea id="messageforTaskofAut" name="messageforTaskofAut" placeholder="Message here..." class="form-control" style="padding:3px;width:100%;height:40%;line-height: 110%;"></textarea>
                <div style="padding:15px;background:#dddddd;box-shadow:inset 0 0 4px rgba(0, 0, 0, .23);height:35%;">
                    <div id="firstContextBes21">
                        <input type="file" name="file" id="file" style="-webkit-appearance:button;padding:5px;width:100%;cursor:pointer;background:#96d19b" required="">
                        <button id="SBmitFF" type="submit" class="submit" style="margin-top:5px;">Attach File</button>
                        <br>
                        <div id="psw1x1"></div>
                        <progress id="prog" value="0" max="100" style="width:90%;height:7px;"></progress> <font id="percentageCMP">0%</font>
                        <font><i>Document: </i><font id="duscxx"><font style="color:#aeaeae">No file</font></font></font>
                    </div>
                    <div id="firstContextBes22">
                        <table width="100%">
                            <tbody id="basedspFileNNd"></tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
        <div style="height:30px;">
            <button id="sbmtNewTskN" class="btn btn-default" style="background:#9dc67f;float:right;margin-top:5px;color:black">Submit Task</button>
            <font id="cancelsbmtNewTskN" class="btn btn-default" style="float:right;margin-top:5px;color:black">Cancel</font>
            <span style="position:absolute;margin-top:-13px;">
                &nbsp&nbsp&nbsp <font style="color:#565656;font-size:11px;">Hold Shift + moveUp(<i class="fa fa-arrow-up"></i>) or moveDown(<i class="fa fa-arrow-down"></i>),</font><br>
                &nbsp&nbsp&nbsp <font style="color:#565656;font-size:11px;">Hold Ctrl + A to erase a field</font>
            </span>
        </div>
    </div>-->
    <!-- inserted -->
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
    <script src="<?php echo base_url();?>../css_bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>../css_bootstrap/js/custom.js"></script>
    <script src="<?php echo base_url();?>../css_bootstrap/js/nicescroll/jquery.nicescroll.min.js"></script>
	</body>
</html>