	<span id="noteArr" class="animated slideInRight" style="display:none;">...</span>

    <!-- Modal -->
    <div class="modal fade bs-changePhot-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="margin-top:7%;">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-file-photo-o" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Updating Photo
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;height:470px;">
                    <div class="col-md-12" id="">
                        <div class="col-md-6">
                            <div id="notDemo">
                                <?php
                                $varSTr = "";
                                foreach ($imageres as $xxPx) {
                                    $varSTr = "";
                                    $varSTr = $xxPx->image;
                                    if($varSTr == ""){
                                        echo '<img id="testImg" src="nwng/msicon.jpg" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:400px;height:400px;">';
                                    }else{
                                        echo '<img id="testImg" src="./userimage/'.$varSTr.'" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:400px;height:400px;">';
                                    }
                                }
                                ?>
                            </div>
                            <div id="image_demo" style="display:none;"></div>
                        </div>
                        <div class="col-md-6">
                            <center>
                            <div style="padding:20px">
                                <br><font style="font-size:22px;">Please use a valid Profile picture.</font><br><br>
                                <input type="file" name="insert_image" id="insert_image" class="btn btn-default" accept="image/gif, image/jpeg, image/png" style="line-height:90px">
                            </div>
                            <div id="submitBTTR" style="display:none">
                                <div style="padding:10px;font-size:18px;">
                                    Note: Uploading of image will be done once. Please make sure that the image you will upload is your professional image.
                                </div>
                                <br><br>
                                <button type="submit" value="submit" id="cropNowimg" class="btn btn-success" style="width:300px;">Upload photo</button>
                                <br><br><br>
                                <progress id="progxxxx012" value="0" max="100" style="width:100%;height:7px;display:none;"></progress>
                                <div id="psw1x1xxxx012" style="display:none;"></div>
                            </div>
                            </center>
                        </div>
                    </div>
                    <font style="font-size:1px">.</font>
                </div>
                <div style="background:#aece71;height:5px;"></div>
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
    <div class="modalTemp" style="">
        <div style="border-bottom:1px solid #dddddd;padding:3px;margin-top:4px;padding-left:6px;padding-right:6px;">
            Sending reply to <b>Reviewer</b><font style="float:right;color:#565656">Movable Area</font>
        </div>
        <div>
            <form id="task_formN">
                <input type="hidden" name="journalID4task">
                <input type="hidden" name="JournalIDlgt">
                <div id="messageResTake" class="fox3" style="height:70px;overflow:auto;padding:5px;border:1px solid #aeaeae;"></div>
                <div style="padding:3px">
                    <textarea id="messageforTaskofAut" name="messageforTaskofAut" rows="27" placeholder="Message here..." class="form-control" style="padding:3px;width:100%;line-height:110%;"></textarea>
                </div>
            </form>
        </div>
        <div style="height:50px;margin-top:20px;">
            <font id="sbmtNewTskN" class="btn btn-default" style="background:#9dc67f;float:right;margin-top:-10px;color:black">Submit Message</font>
            <font id="cancelsbmtNewTskN" class="btn btn-default" style="float:right;margin-top:-10px;color:black">Cancel</font>
            <span style="position:absolute;margin-top:-13px;">
                &nbsp&nbsp&nbsp <font style="color:#565656;font-size:11px;">Hold Shift + moveUp(<i class="fa fa-arrow-up"></i>) or moveDown(<i class="fa fa-arrow-down"></i>),</font><br>
                &nbsp&nbsp&nbsp <font style="color:#565656;font-size:11px;">Hold Ctrl + A to erase a field</font>
            </span>
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
    <div class="modal fade bs-viewPropAdminxx-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg" style="width:90.5%;">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-bookmark-o" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Researcher info
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                    <div class="col-md-12">
                        <div class="col-md-3" id="displAInfxx000011" style="border-right:1px solid #aeaeae;color:black"></div>
                        <div class="col-md-9">
                            <div class="fox3" id="journfromAtuDDs" style="padding:10px;height:50%;overflow:auto;">Loading...</div>
                        </div>
                    </div>
                    <font style="font-size:1px">...</font>
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
                                <textarea id="titleXx" name="titleXx" class="form-control" rows="5" placeholder="Type here... (Required...)" style="font-size:14px;line-height: 110%;"></textarea>
                                <br>Field or Area (ex. Science, Mathematics...):
                                <textarea id="areaXxF" name="areaXxF" class="form-control" rows="2" placeholder="Type here... (Required...)" style="font-size:14px;line-height: 110%;"></textarea>
                                <br>Abstract:
                                <textarea id="abstractXx" name="abstractXx" class="form-control" rows="10" placeholder="Type here... (Required...)" style="font-size:14px;line-height: 110%;"></textarea>
                                <br>Keywords:
                                <textarea id="keywordsXx" name="keywordsXx" class="form-control" rows="4" placeholder="Type here... (Required...)" style="font-size:14px;line-height: 110%;"></textarea>
                                <br>References:
                                <textarea id="references" name="references" class="form-control" rows="4" placeholder="Type here... (Required...)" style="font-size:14px;line-height: 110%;"></textarea>
                                <font id="rqUireF" style="display:none;color:red;position:absolute;margin-top:20px;"><i class="fa fa-warning"></i> These fields are required...</font>
                            </form>
                        </div>
                        <div class="col-md-6" style="font-size:11px;">
                            <h4><b>Step 2:</b> File Reference (PDF / MS Word format)</h4>
                            <div style="padding:15px;background:#dddddd;box-shadow:inset 0 0 4px rgba(0, 0, 0, .23)">
                                <form method="POST" action="<?php echo base_url('gtReglr/sbmtFileDat');?>" id="uploadfile" enctype="multipart/form-data">
                                    <input type="file" name="file" id="file" style="-webkit-appearance:button;padding:5px;width:100%;cursor:pointer;background:#96d19b" required="">
                                    <button id="SBmitFF" type="submit" class="submit" style="margin-top:5px;">Attach File</button>
                                    <br>
                                    <div id="psw1x1"></div>
                                    <progress id="prog" value="0" max="100" style="width:90%;height:7px;"></progress> <font id="percentageCMP">0%</font>
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
    <div class="modal fade bs-modifyxPartArtMod-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg" style="width:80%;">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-edit" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp  Modifying Article
                    </h4>
                </div>
                <div class="modal-body" style="font-size:16px;color:black;padding:12px;">
                    <div class="col-md-12">
                        <div>
                            <h5><b>Step 1:</b> Basic Information</h5>
                            <form method="POST" id="journalFFsb-form_mod">
                                <input type="hidden" name="journIDklklxx">
                                <input type="hidden" name="titleCptyaskjdbawxx2">
                                <input type="hidden" name="journalIdforBbse2">
                                <div style="padding:5px;font-size:12px;">
                                    Title:
                                    <textarea id="titleXx_mod" name="titleXx_mod" class="form-control" rows="4" placeholder="Type here... (Required...)" style="font-size:11px;line-height: 110%;"></textarea>
                                </div>
                                <div style="padding:5px;font-size:12px;">
                                    <font class="btn btn-default" id="viewFullAVsssStract" style="float:right;padding:0px;padding-left:10px;padding-right:10px;font-size:12px;" data-toggle="modal" data-target=".bs-viewFullABss-modal-lg">Preview Abstract</font>
                                    Abstract:
                                    <textarea id="abstractXx_mod" name="abstractXx_mod" class="form-control" rows="7" placeholder="Type here... (Required...)" style="font-size:11px;line-height: 110%;"></textarea>
                                </div>
                                <div style="padding:5px;font-size:12px;">
                                    Keywords:
                                    <textarea id="keywordsXx_mod" name="keywordsXx_mod" class="form-control" rows="4" placeholder="Type here... (Required...)" style="font-size:11px;line-height: 110%;"></textarea>
                                </div>
                                <div style="padding:5px;font-size:12px;">
                                    References:
                                    <textarea id="ReferencesXx_mod" name="ReferencesXx_mod" class="form-control" rows="20" placeholder="Type here... (Required...)" style="font-size:11px;line-height: 110%;"></textarea>
                                </div>
                                <font id="rqUireF_mod" style="display:none;color:red;position:absolute;margin-top:20px;"><i class="fa fa-warning"></i> These fields are required...</font>
                            </form>
                            <h5><b>Step 2:</b> File Reference (PDF/pdf format)</h5>
                            <div style="padding:15px;background:#dddddd;box-shadow:inset 0 0 4px rgba(0, 0, 0, .23);font-size:11px;">
                                <div id="part1askArtBase"></div>
                                <div id="part2askArtBase" style="display:none;">
                                    <form method="POST" action="<?php echo base_url('gtReglr/sbmtFileDat2');?>" id="uploadfile_mod" enctype="multipart/form-data">
                                        <input type="hidden" name="journIDklklxx2forFile2">
                                        <input type="hidden" name="titleCptyaskjdbawxx">
                                        <input type="hidden" name="journalIdforBbse">
                                        <input type="file" name="file_mod" id="file_mod" style="-webkit-appearance:button;padding:5px;width:100%;cursor:pointer;background:#96d19b;font-size:11px" required="">
                                        <button id="SBmitFF_mod" type="submit" class="submit_mod" style="margin-top:5px;font-size:11px">Attach File</button>
                                        <br>
                                        <div id="psw1x1_mod"></div>
                                        <progress id="prog_mod" value="0" max="100" style="width:90%;height:7px;"></progress> <font id="percentageCMP_mod">0%</font>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <font style="font-size:1px;">.</font>
                </div>
                <div class="modal-footer" style="background:#aece71;padding:10px;">
                    <button id="submitNWjourmnSCnnARt" type="button" class="btn btn-success" style="padding:2px;padding-right:10px;padding-left:10px;display:none;">Save Changes</button>
                    <button id="cancelBaseChangeFxxmd" type="button" class="btn btn-default" data-dismiss="modal" style="padding:2px;padding-right:10px;padding-left:10px;margin-top:-5px;">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-privaCheckUp-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-warning" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Privacy Checkup
                    </h4>
                </div>
                <div class="modal-body" style="font-size:16px;color:black;padding:12px;">
                    <form id="formSEtup_formPRiv">
                        <div class="col-md-12">
                            <div class="col-md-6" style="border-right:1px solid #aeaeae">
                                <b><font style="font-size:27px;">Advance Setup *</font></b><br><br>
                                Keep me visible to others:<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                <?php
                                foreach ($pI as $setUp) {
                                    if($setUp->visibleme == 0){
                                        echo '<input type="radio" name="visibleme" value="1" class="form-radio"> No  &nbsp&nbsp&nbsp
                                            <input type="radio" name="visibleme" value="0" class="form-radio" checked> Yes <br><br>';
                                    }else{
                                        echo '<input type="radio" name="visibleme" value="1" class="form-radio" checked> No  &nbsp&nbsp&nbsp
                                        <input type="radio" name="visibleme" value="0" class="form-radio"> Yes <br><br>';
                                    }
                                    echo 'Keep my profile picture visible to others:<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
                                    if($setUp->visibleprof == 0){
                                        echo '<input type="radio" name="visibleprof" value="1" class="form-radio"> No  &nbsp&nbsp&nbsp
                                            <input type="radio" name="visibleprof" value="0" class="form-radio" checked> Yes <br><br>';
                                    }else{
                                         echo '<input type="radio" name="visibleprof" value="1" class="form-radio" checked> No  &nbsp&nbsp&nbsp
                                            <input type="radio" name="visibleprof" value="0" class="form-radio"> Yes <br><br>';
                                    }
                                    echo 'Send notification:<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
                                    if($setUp->sendnote == 0){
                                        echo '<input type="radio" name="notesenme" value="1" class="form-radio"> No  &nbsp&nbsp&nbsp
                                            <input type="radio" name="notesenme" value="0" class="form-radio" checked> Yes <br><br>';
                                    }else{
                                        echo '<input type="radio" name="notesenme" value="1" class="form-radio" checked> No  &nbsp&nbsp&nbsp
                                        <input type="radio" name="notesenme" value="0" class="form-radio"> Yes <br><br>';
                                    }
                                    echo 'Show my article published:<br> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp';
                                    if($setUp->artview == 0){
                                        echo '<input type="radio" name="artview" value="1" class="form-radio"> No  &nbsp&nbsp&nbsp
                                            <input type="radio" name="artview" value="0" class="form-radio" checked> Yes <br><br>';
                                    }else{
                                        echo '<input type="radio" name="artview" value="1" class="form-radio" checked> No  &nbsp&nbsp&nbsp
                                        <input type="radio" name="artview" value="0" class="form-radio"> Yes <br><br>';
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-md-6">
                                <b><font style="font-size:27px;">User-account Setup *</font></b><br><br>
                                <?php
                                foreach ($pI as $setUp) {
                                    echo '<div style="padding:5px;"><i>Username *</i> <tt style="font-size:11px;"><i>You can change the username key</i></tt>
                                    <input type="text" id="usernameSetup" name="usernameSetup" value="'.$setUp->username.'" placeholder="Required..." class="form-control"></div>
                                    <div style="padding:5px;"><i>New Password *
                                    <input type="password" id="passwordSetup" name="passwordSetup" placeholder="Required..." class="form-control"></div>
                                    <div style="padding:5px;"><i>Re-type New Password *</i>
                                    <input type="password" id="retypepasswordSetup" name="retypepasswordSetup" placeholder="Required..." class="form-control"></div>';
                                }
                                ?>
                                <div style="padding-top:20px;">
                                    Old password * <tt style="font-size:11px;color:red"><i>To confirm this action</i></tt></i>
                                    <input type="password" id="confirmPasss" name="confirmPasss" placeholder="Required..." class="form-control">
                                </div>
                            </div>
                        </div>
                    </form>
                    <font style="font-size:1px;"> .</font>
                </div>
                <div class="modal-footer" style="background:#aece71;padding:10px;">
                    <button id="prosAnwy2xx" type="button" class="btn btn-success" style="padding:2px;padding-right:10px;padding-left:10px;">Save Changes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:2px;padding-right:10px;padding-left:10px;margin-top:-5px;">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-activityLogsPlxx-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-info-circle" style="color:yellow;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Activity Logs
                    </h4>
                </div>
                <div class="modal-body" style="font-size:16px;color:black;padding:12px;">
                   <div class="fox3" id="displayLogsInfoAreaxxP" style="height:50%;overflow:auto;border-bottom:1px solid #aeaeae;">
                   </div>
                   <div style="padding:10px;">
                       Please be guided. This is for evaluation pusposes only. 
                   </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-updatePeI-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-edit" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Updating Personal Information
                    </h4>
                </div>
                <div class="modal-body" style="font-size:16px;color:black;padding:12px;">
                    <form id="perSUpdate_formCs">
                        <div class="col-md-12">
                            <?php
                            foreach ($pI as $x) {
                                echo '<div class="col-md-6" style="font-size:19px;text-align:right">Affiliation:</div>
                                    <div class="col-md-6" style="font-size:17px;"><input id="affiliationEd" type="text" name="affiliationEd" value="'.$x->affiliation.'" style="padding-left:10px;box-shadow:inset -1px -1px 8px rgba(0, 0, 0, .42);color:#6c6c6d">
                                </div>';
                                echo '<div class="col-md-6" style="font-size:19px;text-align:right">Email:</div>
                                    <div class="col-md-6" style="font-size:17px;"><input id="emailEd" type="text" name="emailEd" value="'.$x->email.'" style="padding-left:10px;box-shadow:inset -1px -1px 8px rgba(0, 0, 0, .42);color:#6c6c6d">
                                </div>';
                                echo '<div class="col-md-6" style="font-size:19px;text-align:right">ORCID ID:</div>
                                    <div class="col-md-6" style="font-size:17px;"><input id="orcid_idEd" type="text" name="orcid_idEd" value="'.$x->orcid_id.'" style="padding-left:10px;box-shadow:inset -1px -1px 8px rgba(0, 0, 0, .42);color:#6c6c6d">
                                </div>';
                                echo '<div class="col-md-6" style="font-size:19px;text-align:right">Website URL:</div>
                                    <div class="col-md-6" style="font-size:17px;"><input id="urlEd" type="text" name="urlEd" value="'.$x->url.'" style="padding-left:10px;box-shadow:inset -1px -1px 8px rgba(0, 0, 0, .42);color:#6c6c6d">
                                </div>';
                                echo '<div class="col-md-6" style="font-size:19px;text-align:right">Phone/Mobile:</div>
                                    <div class="col-md-6" style="font-size:17px;"><input id="phoneEd" type="text" name="phoneEd" value="'.$x->phone.'" style="padding-left:10px;box-shadow:inset -1px -1px 8px rgba(0, 0, 0, .42);color:#6c6c6d">
                                </div>';
                                echo '<div class="col-md-6" style="font-size:19px;text-align:right">Fax:</div>
                                    <div class="col-md-6" style="font-size:17px;"><input id="faxEd" type="text" name="faxEd" value="'.$x->fax.'" style="padding-left:10px;box-shadow:inset -1px -1px 8px rgba(0, 0, 0, .42);color:#6c6c6d">
                                </div>';
                                echo '<div class="col-md-6" style="font-size:19px;text-align:right">Mailing Address:</div>
                                    <div class="col-md-6" style="font-size:17px;"><input id="mailingaddrssEd" type="text" name="mailingaddrssEd" value="'.$x->mailingaddrss.'" style="padding-left:10px;box-shadow:inset -1px -1px 8px rgba(0, 0, 0, .42);color:#6c6c6d">
                                </div>';
                                echo '<div class="col-md-6" style="font-size:19px;text-align:right">Country - Code:</div>
                                    <div class="col-md-6" style="font-size:19px;color:#6c6c6d">
                                        <font id="countryCOdePPLy">'.$x->country_name.' - '.$x->country_code.' &nbsp&nbsp&nbsp <font id="uipCodeCcntry" class="btn btn-default" style="padding:2px;padding-left:7px;padding-right:7px;">update</font></font>
                                        <font id="showCCntEdPPo" style="display:none;"><input type="hidden" name="identffklasPP0a1" value="0"><select id="RegCountryXp" name="RegCountryXp" class="foc" style="padding:4px;padding-left:7px;box-shadow:inset -1px -1px 8px rgba(0, 0, 0, .42);color:#6c6c6d;cursor:pointer;width:226px;font-size:13px;"></select></font>
                                    </div>
                                </div>';
                                echo '<div class="col-md-6" style="font-size:19px;text-align:right">Bio-state:</div>
                                    <div class="col-md-6" style="font-size:17px;"><input id="bio_stateEd" type="text" name="bio_stateEd" value="'.$x->bio_state.'" style="padding-left:10px;box-shadow:inset -1px -1px 8px rgba(0, 0, 0, .42);color:#6c6c6d">
                                </div>';
                            }
                            ?>
                        </div>
                        <font style="font-size:1px">.</font>
                    </form>
                    <div class="modal-footer" style="background:#aece71;padding:10px;">
                        <button id="prosUpdatePIXscscsc" type="button" class="btn btn-success" style="padding:2px;padding-right:10px;padding-left:10px;">Save Changes</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:2px;padding-right:10px;padding-left:10px;margin-top:-5px;">Cancel/Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-dlanyWYTX-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-warning" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Delete Confimation
                    </h4>
                </div>
                <div class="modal-body" style="font-size:16px;color:black;padding:12px;">
                    <input type="hidden" name="idd_BaseFile">
                    <center>The file as reference for an article (<b><font id="titleofJournBB"></font></b>) will be deleted. Would you like to proceed?</center>
                </div>
                <div class="modal-footer" style="background:#aece71;padding:10px;">
                    <button id="prosAnwy" type="button" class="btn btn-success" style="padding:2px;padding-right:10px;padding-left:10px;">Proceed anyway</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding:2px;padding-right:10px;padding-left:10px;margin-top:-5px;">Cancel/Reset</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-viewFullABss-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background:#aece71">
                    <h4 class="modal-title" id="myModalLabel2" style="color:black;">
                        <i class="fa fa-arrows-alt" style="color:red;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Abstract Full View
                    </h4>
                </div>
                <div class="modal-body fox3" style="font-size:16px;color:black;padding:12px;height:500px;overflow:auto;">
                    Abstract:
                    <textarea id="abstractXx_mod2x" name="abstractXx_mod2x" class="form-control" placeholder="Type here... (Required...)" style="font-size:14px;line-height: 110%;height:93%;"></textarea>
                </div>
                <div class="modal-footer" style="background:#aece71;padding:10px;">
                    <button id="doneEdAb" type="button" class="btn btn-default" data-dismiss="modal" style="padding:2px;padding-right:10px;padding-left:10px;margin-top:-5px;">Done</button>
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
                        <center><font style="font-size:12px;">Due to systems incompatibility, we accept<br> email account from Gmail / googlemail sources only</font></center>
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
	<script src="<?php echo base_url();?>../css_bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>../css_bootstrap/js/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url();?>../css_bootstrap/js/custom.js"></script>
</body>
</html>