	<span id="noteArr" class="animated slideInRight" style="display:none;">...</span>

    <!-- Modal -->
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
    <div class="modal fade bs-viewPicRuleArt-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg" style="width:80%;">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-gears" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp OJS Editorial and Publishing Process
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <img src="<?php echo base_url('nwng/edprocesslarge.png');?>" style="box-shadow:0px 0px 4px rgba(0, 0, 0, .42);width:100%;height:120%;">
                </div>
                <div style="background:#aece71;height:5px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-assignReView-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg" style="width:90%;">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-briefcase" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Assigning Reviewers
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <div class="col-md-12">
                        <div class="col-md-8" style="border-right:1px solid #aeaeae;">
                            <div id="jsjsdalww" class="fox3" style="height:270px;overflow:auto;padding-right:10px;"></div>
                            <div style="border-top:1px solid #aeaeae;margin-top:10px;">
                                <font style="float:right;font-size:15px;margin-top:7px;">Total: <font id="tttXg2"></font>&nbsp&nbsp&nbsp</font>
                                <h4>Assigned Reviewers</h4>
                                <div id="klikaas" style="height:200px;overflow:auto;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;">
                                    <table width="100%">
                                        <tbody id="cntntBsdRvwrxx212"></tbody>
                                    </table>
                                </div>
                                <div style="padding:2px;">
                                   <font class="btn btn-default" style="background:#669b76;color:white;" data-toggle="modal" data-target=".bs-viewAllTRKSxxrev-modal-lg">Manage Activity</font> 
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="klikaas">
                                <font style="float:right">Total: <font id="tttXg"></font>&nbsp&nbsp&nbsp</font>
                                <h4>Researchers</h4>
                                <div id="fox2" style="height:470px;overflow:auto;border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;">
                                    <table width="100%">
                                        <tbody id="vgvaxxx12sx"></tbody>
                                    </table>
                                </div>
                                <font class="btn btn-default" style="float:right;margin-top:8px;background:#669b76;color:white;" data-toggle="modal" data-target=".bs-advanceModeXxx1-modal-lg">Advance View</font>
                                <tt>Close to reset</tt>
                            </div>
                        </div>
                    </div>
                    <font style="font-size:1px;">.</font>
                </div>
                <div style="background:#aece71;height:5px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-assignReViewOpxx101-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg" style="width:70%;">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-warning" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Admin Confirmation
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <form id="contentxRevDecFinl_form">
                        <input type="hidden" name="idJournalPPmm">
                        <input type="hidden" name="titLeJournalPPmm">
                        <font id="contentxRevDecFinl" style="font-size:35px;"></font>
                        <CENTER>
                            <select id="seleJournalPPmm" name="seleJournalPPmm" style="padding:5px;cursor:pointer;font-size:35px;width:400px;">
                                <option name="seleJournalPPmm" value="0" selected="selected">Select your decision:</option>
                                <option name="seleJournalPPmm" value="1">Published</option>
                                <option name="seleJournalPPmm" value="2">Refused</option>
                            </select>
                        </CENTER>
                    </form>
                </div>
                <div style="background:#aece71;padding:8px;">
                    <center>
                        <button class="btn btn-default" id="procDec001" style="padding:1px;padding-left:8px;padding-right:8px;">Proceed</button> 
                        <button class="btn btn-success" data-dismiss="modal" style="padding:1px;padding-left:8px;padding-right:8px;">Cancel</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-advanceModeXxx1-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg" style="width:98%;">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button id="closeThisModal2" type="button" class="close" aria-label="Close" style="border-radius:50%;border:1px solid white;padding:2px;padding-left:10px;padding-right: 10px;margin-top:-6px;"><span aria-hidden="true" style="font-size:35px;">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-coffee" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Advance View
                    </h4>
                </div>
                <div class="modal-body fox3" style="color:black;padding:12px;height:550px;overflow:auto;">
                    <div>
                        <font style="float:right">
                            <form id="formView_arc"><input type="hidden" name="idofAuth"><input type="hidden" name="idofJournx">Search: <input id="searchRevAll" type="text" name="searchRevAll" style="padding-left:8px;" placeholder="Type reviewer info here...">&nbsp<font class="btn btn-default" id="searchNowBrxxAllRVxx" style="padding:2px;padding-left:7px;padding-right:7px;background:#c7d4e8">GO</font><font class="btn btn-default" id="cancelSrchPlexx1" style="padding:2px;padding-left:7px;padding-right:7px;background:#cbe8c7">Reset</font></form>
                        </font>
                        <div style="padding:10px;">
                            Complete info for all reviewers
                        </div>
                    </div>
                    <div style="border-top:1px solid #aeaeae">
                        <table width="100%">
                            <thead>
                                <tr style="background:#669b76;color:white;font-size:12px;">
                                    <td style="padding:2px">Salutation</td>
                                    <td style="padding:2px"><i id="sort1" class="fa fa-sort" style="cursor:pointer;"></i> Surname</td>
                                    <td style="width:1%;padding:2px">,</td>
                                    <td style="padding:2px"><i id="sort2" class="fa fa-sort" style="cursor:pointer;"></i> Firstname</td>
                                    <td style="padding:2px"><i id="sort3" class="fa fa-sort" style="cursor:pointer;"></i> Middle Name</td>
                                    <td style="padding:2px"><i id="sort4" class="fa fa-sort" style="cursor:pointer;"></i> Gender</td>
                                    <td style="padding:2px"><i id="sort5" class="fa fa-sort" style="cursor:pointer;"></i> Affiliation</td>
                                    <td style="padding:2px"><i id="sort6" class="fa fa-sort" style="cursor:pointer;"></i> Bio State</td>
                                    <td style="padding:2px"><i id="sort7" class="fa fa-sort" style="cursor:pointer;"></i> Country</td>
                                    <td style="padding:2px">Email</td>
                                    <td style="padding:2px"><i id="sort8" class="fa fa-sort" style="cursor:pointer;"></i> ORCID ID</td>
                                    <td style="padding:2px">URL</td>
                                    <td style="padding:2px">Phone</td>
                                    <td style="padding:2px">Fax</td>
                                    <td style="padding:2px">Mailing Address</td>
                                    <td style="padding:2px" align="center">Controls</td>
                                </tr>
                            </thead>
                            <tbody id="viewAllRevGetNZZsw"></tbody>
                        </table>
                    </div>
                </div>
                <div style="background:#aece71;height:8px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-xxssaasd-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-warning" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Sending Invitation for Review
                    </h4>
                </div>
                <div class="modal-body" style="color:black;padding:12px;">
                    <form id="submitAccptRevwr_frm">
                        <input type="hidden" name="j_idCopied">
                        <input type="hidden" name="userIDcopied">
                        <input type="hidden" name="realAuthIDxx">
                        <input type="hidden" name="emailhhgg">
                        <input type="hidden" name="ttleOloxxxx">
                        <font id="msgCntXX1122ppppppppp" style="font-size:25px;"></font>
                        <div style="padding-top:15px;padding-bottom:7px;text-align:center;">
                            Confirmation is Valid until (Optional)
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-5" style="text-align:right;font-size:18px;">
                                Date:<br>
                                Time:
                            </div>
                            <div class="col-md-7">
                                <input name="dueDate" type="text" data-inputmask="'mask': '99 - 99 - 9999'" placeholder="MM - DD - YYYY" style="padding-left:5px;"><br>
                                <input name="dueTime" type="text" data-inputmask="'mask': '99 : 99 : 99'" placeholder="HH : MM : SS" style="padding-left:5px;">
                            </div>
                        </div>
                    </form>
                </div>
                <div style="background:#aece71;padding:8px;">
                    <center>
                        <button class="btn btn-default" id="confirmRevAssgnmnt" style="padding:1px;padding-left:8px;padding-right:8px;">Confirm</button> 
                        <button class="btn btn-success" data-dismiss="modal" style="padding:1px;padding-left:8px;padding-right:8px;">Cancel</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-xxssaas2d-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-check-square-o" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Assignment Modification
                    </h4>
                </div>
                <div class="modal-body" style="color:black;padding:12px;">
                    <form id="sModRev_frm2xx2xnb4">
                        <input type="hidden" name="userIDRevLsixx">
                        <input type="hidden" name="journalID2xxggt">
                        <input type="hidden" name="TitleJournxxXcpoyx">
                        <input type="hidden" name="authorDIbasdallxx">
                        <font id="msgCntXX11" style="font-size:25px;"></font>
                        <div style="padding-top:15px;padding-bottom:7px;text-align:center;">
                            Submission Date and Time (Optional)
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-5" style="text-align:right;font-size:18px;">
                                Date <font id="xf1" style="display:none;">(MM-DD-YYYY)</font>:<br>
                                Time <font id="xf2" style="display:none;">(HH:Min:Sec)</font>:
                            </div>
                            <div class="col-md-7">
                                <input id="dueDatexx2" name="dueDatexx2" type="text" data-inputmask="'mask': '99 - 99 - 9999'" placeholder="MM - DD - YYYY" style="padding-left:5px;"><br>
                                <input id="dueTimexx2" name="dueTimexx2" type="text" data-inputmask="'mask': '99 : 99 : 99'" placeholder="HH : MM : SS" style="padding-left:5px;">
                            </div>
                        </div>
                    </form>
                </div>
                <div style="background:#aece71;padding:8px;">
                    <center>
                        <button class="btn btn-default" id="confirmRevAssgnmnt2" style="padding:1px;padding-left:8px;padding-right:8px;">Confirm</button> 
                        <button class="btn btn-success" data-dismiss="modal" style="padding:1px;padding-left:8px;padding-right:8px;">Cancel</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-xxssaas2d2x3-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-info-circle" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Assignment details
                    </h4>
                </div>
                <div class="modal-body" style="color:black;padding:12px;">
                    <div id="baseContDetofRevLLp" style="font-size:20px;"></div>
                    <div class="col-md-12">
                        <div id="personLLp" class="col-md-6" style="padding:20px;padding-left:50px;font-size:20px;"></div>
                        <div id="personLLp2" class="col-md-6" style="padding:20px;padding-left:50px;font-size:20px;"></div>
                    </div>
                    <font style="font-size:1px">.</font>
                    <div style="border-top:1px solid #aeaeae;border-bottom:1px solid #aeaeae;"></div>
                </div>
                <div style="background:#aece71;height:4px;"></div>
            </div>
        </div>
    </div>
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
    <div class="modal fade bs-editorialPolicies-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
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
                <div style="background:#aece71;height:5px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-editorialTeam-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
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
                <div style="background:#aece71;height:5px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-viewContact-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
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
                <div style="background:#aece71;height:5px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-ADdMyJJournal-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-dropbox" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Adding New Journal
                    </h4>
                </div>
                <div class="modal-body" style="font-size:16px;color:black;padding:12px;">
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <h4><b>Step 1:</b> Basic Information</h4>
                            <form method="POST" id="journalFFsb-form">
                                <?php echo "<input type='hidden' name='usridfrAut2' value='$userID'>";?>
                                Title:
                                <textarea id="titleXx" name="titleXx" class="form-control" rows="4" placeholder="Type here... (Required...)"></textarea>
                                Abstract:
                                <textarea id="abstractXx" name="abstractXx" class="form-control" rows="5" placeholder="Type here... (Required...)"></textarea>
                                Keywords:
                                <textarea id="keywordsXx" name="keywordsXx" class="form-control" rows="2" placeholder="Type here... (Required...)"></textarea>
                                <font id="rqUireF" style="display:none;color:red;position:absolute;margin-top:20px;"><i class="fa fa-warning"></i> These fields are required...</font>
                            </form>
                        </div>
                        <div class="col-md-6" style="font-size:11px;">
                            <h4><b>Step 2:</b> File Reference (PDF/pdf format)</h4>
                            <div style="padding:15px;background:#dddddd;box-shadow:inset 0 0 4px rgba(0, 0, 0, .23)">
                                <form method="POST" action="<?php echo base_url('gtReglr/sbmtFileDat');?>" id="uploadfile" enctype="multipart/form-data">
                                    <input type="file" name="file" id="file" style="-webkit-appearance:button;padding:5px;width:100%;cursor:pointer;background:#96d19b" required="">
                                    <button id="SBmitFF" type="submit" class="submit" style="margin-top:5px;">Attach File</button>
                                    <div id="message"></div>
                                    <br>
                                    <div id="psw1x1" style="height:10px;"></div>
                                    <center><progress id="prog" value="0" max="100" style="width:92%;height:7px;"></progress> <font id="percentageCMP">0%</font></center>
                                </form>
                                <font><i>Document: </i><font id="duscxx"><font style="color:#aeaeae">No file</font></font></font>
                            </div>
                            <div>
                                <div style="padding:1px;">
                                    <button id="addAut" class="btn btn-default" data-toggle="modal" data-target=".bs-ADdAut0hor-modal-sm" style="padding:2px;padding-right:10px;padding-left:10px;float:right;margin-top:5px;"><i class="fa fa-plus" style="color:#6b9975"></i> Add Author</button>
                                    <h4><b>Step 3:</b> Authors List</h4>
                                </div>
                                <div id="fox2" style="height:300px;overflow:auto;border-top:1px solid #c4c5c6;border-bottom:1px solid #c4c5c6;background:#dddddd;padding:2px;box-shadow:inset 0 0 4px rgba(0, 0, 0, .23)">
                                    <font style="color:#aeaeae">No Author</font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <font style="font-size:1px;">.</font>
                </div>
                <div class="modal-footer" style="background:#aece71;padding:10px;">
                    <button id="submitNWjourmn" type="button" class="btn btn-success" style="padding:2px;padding-right:10px;padding-left:10px;">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:2px;padding-right:10px;padding-left:10px;margin-top:-5px;">Cancel/Reset</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-ADdAut0hor-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-user" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Adding New Author
                    </h4>
                </div>
                <div class="modal-body" style="font-size:16px;color:black;padding:12px;">
                    <form method="POST" id="form-SaveAuthor">
                        <?php echo "<input type='hidden' name='usridfrAut' value='$userID'>";?>
                        Name:<input id="authorName" type="text" name="authorName" class="form-control" placeholder="surname, firstname middle initial">
                        Institution/Company:<input id="insComp" type="text" name="insComp" class="form-control" placeholder="Required...">
                        Contact # (Mobile / Telephone No.):<input id="contNunbe" type="text" name="contNunbe" class="form-control" placeholder="Optional...">
                        Email Address:<br>
                        <center><font style="font-size:12px;">Due to systems incompatibility, we accept<br> email account from Gmail / googlemail only</font></center>
                        <input id="autEmail" type="email" name="autEmail" class="form-control" placeholder="Required...                               @gmail.com">
                    </form>
                </div>
                <div class="modal-footer" style="background:#aece71;padding:10px;">
                    <button id="addThsAut" type="button" class="btn btn-success" style="padding:2px;padding-right:10px;padding-left:10px;">Add</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:2px;padding-right:10px;padding-left:10px;margin-top:-5px;">Cancel/Reset</button>
                </div>
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
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <div class="col-md-12" style="font-size:21px;">
                        <div class="col-md-6" style="text-align:right">Name (Lastname, Firstname Middlename): <br>Initials: <br>Gender: <br>Affilitation: <br>Email: <br>Orcid ID: <br>Url: <br>Phone: <br>Fax: <br>Mailing Address: <br>Country: <br>Bio-state: <br>Remarks: <br>Date Signed: </div>
                        <div class="col-md-6" id="infoP2xhrhr"></div>
                    </div>
                    <font style="font-size:1px">...</font>
                    <div style="padding:10px;border-top:1px solid #aeaeae;text-align:center;">
                        You can email the person if the data does'nt matched his/her true identity.
                    </div>
                </div>
                <div style="background:#aece71;height:5px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-viewAllTRKSxxrev-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
                <div class="modal-header" style="background:#aece71;width:100.1%;box-shadow:1px 1px 4px rgba(0, 0, 0, .22);">
                    <button id="closeThisModal1" type="button" class="close" aria-label="Close" style="border-radius:50%;border:1px solid white;padding:2px;padding-left:10px;padding-right: 10px;margin-top:-6px;"><span aria-hidden="true" style="font-size:35px;">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-info-circle" style="color:#f2d21d;font-size:27px;text-shadow:1px 1px 1px black;"></i>&nbsp&nbsp General Activity
                    </h4>
                </div>
                <div class="modal-body fox3" style="font-size:12px;color:black;padding-left:5px;height:50%;overflow:auto;">
                    <div id="listofGeneralTaskHere"></div>
                </div>
                <div style="background:#aece71;height:52px;padding-top:10px;">
                    <font id="newT" data-toggle="modal" data-target=".bs-azasadawasasdasdasdawad-modal-lg" class="btn btn-default" style="float:right;margin-right:10px;">Set New Task &nbsp<i class="fa fa-envelope"></i></font>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-azscasasdklisd-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-warning" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Approved Confirmations
                    </h4>
                </div>
                <div class="modal-body" style="color:black;padding:50px;">
                    <input type="hidden" name="idOFWORtaslxx">
                    <input type="hidden" name="ttxxxxBoard">
                    <input type="hidden" name="titleOfflf">
                    <input type="hidden" name="emailofaut4444">
                    <input type="hidden" name="idofAut4444">
                    <div id="Speationasd" style="font-size:27px;"></div>
                </div>
                <div class="modal-footer" style="background:#aece71;padding:8px;">
                    <button class="btn btn-default" id="yesConfirmProccssx212" style="padding:1px;padding-left:8px;padding-right:8px;">Proceed</button> 
                    <button class="btn btn-success" data-dismiss="modal" style="padding:1px;padding-left:8px;padding-right:8px;">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-azscasasdklisd2-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-warning" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Approved Confirmation
                    </h4>
                </div>
                <div class="modal-body" style="color:black;padding:50px;">
                    <input type="hidden" name="idOFWORtaslxx2">
                    <div id="Speationasd2" style="font-size:27px;"></div>
                </div>
                <div class="modal-footer" style="background:#aece71;padding:8px;">
                    <button class="btn btn-default" id="yesConfirmProccssx2122" style="padding:1px;padding-left:8px;padding-right:8px;">Proceed</button> 
                    <button class="btn btn-success" data-dismiss="modal" style="padding:1px;padding-left:8px;padding-right:8px;">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-azasadawasasdasdasdawad-modal-lg" style="" tabindex="-1" role="dialog" aria-hidden="true">
        <div id="modalTemp">
            <div style="border-bottom:1px solid #dddddd;padding:3px;margin-top:4px;padding-left:6px;padding-right:6px;">
                Assigning Task<font style="float:right;color:#565656">Movable Area</font>
            </div>
            <div style="padding:3px">
                <form method="POST" action="<?php echo base_url();?>gtEdtrRr/sbmtFileDat" id="uploadfile222022" enctype="multipart/form-data">
                    <input type="hidden" name="journalID4task">
                    <input type="hidden" name="idofAuthorPPOx">
                    <textarea id="messageforTaskofAut" name="messageforTaskofAut" placeholder="Message here..." style="padding:3px;width:100%;height:140px;line-height: 110%;"></textarea>
                    <div style="padding:15px;background:#dddddd;box-shadow:inset 0 0 4px rgba(0, 0, 0, .23);height:35%;">
                        <div id="firstContextBes21">
                            <input type="file" name="file" id="filePjh" style="-webkit-appearance:button;padding:5px;width:100%;cursor:pointer;background:#96d19b" required="">
                            <button id="SBmitFF" type="submit" class="submit" style="margin-top:5px;">Attach File</button>
                            <br>
                            <div id="psw1x12"></div>
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
            </div><br>
            <div style="height:30px;">
                <button id="sbmtNewTskN" class="btn btn-default" style="background:#9dc67f;float:right;margin-top:5px;color:black">Submit Task</button>
                <font id="cancelsbmtNewTskN" class="btn btn-default" style="float:right;margin-top:5px;color:black">Cancel</font>
                <span style="position:absolute;margin-top:-13px;">
                    &nbsp&nbsp&nbsp <font style="color:#565656;font-size:11px;">Hold Shift + moveUp(<i class="fa fa-arrow-up"></i>) or moveDown(<i class="fa fa-arrow-down"></i>),</font><br>
                    &nbsp&nbsp&nbsp <font style="color:#565656;font-size:11px;">Hold Ctrl + A to erase a field</font>
                </span>
            </div>
        </div>
            
    </div>
	<script src="<?php echo base_url();?>../css_bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>../css_bootstrap/js/custom.js"></script>
    <script src="<?php echo base_url();?>../css_bootstrap/js/nicescroll/jquery.nicescroll.min.js"></script>
	</body>
</html>