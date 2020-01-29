  <div class="modal fade bs-submissionDataFinal-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
            <div class="modal-header" style="background:#679645;box-shadow:1px 1px 4px rgba(0, 0, 0, .22);width:100.2%;">
                <font style="color:white;text-shadow:1px 1px 1px rgba(0, 0, 0, .33)">
                    <font id="JASSHPart1Header" style="">Online Submission</font>
                    <font id="JASSHPart2Header" style="display:none;">Online Submission Policies</font>
                    <font id="JASSHPart3Header" style="display:none;">Registration Form</font>
                    <font id="JASSHPart4Header" style="display:none;">Temporary Article Submission</font>
                </font>
                <font id="uponClckIfno" style="display:none;color:black">
                    <br>Upon clicking "<font style="color:darkblue;">I have read and accept policies</font>", you agreed to the terms and policies of this Journal System for your article submission.
                </font>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body scrolldisp" style="font-size:12px;color:black;padding:0px;height:500px;overflow:auto;">
                <div style="padding:10px;">
                    <div id="zeroPartSumission" style="font-size:25px;display:;">
                        <center>
                            <div style="font-size:35px;padding:30px;margin-top:120px;">
                                New to JASSH online article submission?
                            </div>
                            <div style="padding:30px;border-top:0.5px solid #aeaeae;width:550px;">
                                <font id="clckYesSub" class="btn btn-default" style="background:#679645;color:white;">YES</font> <font id="clckNoSub" class="btn btn-default">NO</font>
                            </div>
                        </center>
                    </div>
                    <div id="fifthPartSumission" style="display:none;">
                        <center>
                            <div style="font-size:25px;padding:30px;margin-top:40px;">
                              We will send notification as confirmation that serves as your invitation to the Journal system. Your access to the journal will help you be updated to the status of your article/s. Notification will be brought to your e-mail page after a day.<br><br>
                              Do you have another article that you want to submit?
                            </div>
                            <div style="padding:30px;border-top:0.5px solid #aeaeae;width:550px;">
                                <font id="anothrUes" class="btn btn-success">YES</font> <font id="anothrUNo" class="btn btn-default CancelsubmitNWjourmnBase">NO</font>
                            </div>
                        </center>
                    </div>
                    <div id="fourthPartSumission" style="display:none;">
                      <div class="row">
                          <div class="col-lg-6">
                            <h4><b>Step 1:</b> Basic Information</h4>
                            <form method="POST" id="journalFFsb-form">
                                Title:
                                <textarea id="titleXx" name="titleXx" class="form-control" rows="4" placeholder="Type here... (Required...)"></textarea>
                                Field or Area (ex. Science, Mathematics...):
                                <textarea id="areaXxF" name="areaXxF" class="form-control" rows="2" placeholder="Type here... (Required...)" style="font-size:14px;line-height: 110%;"></textarea>
                                Abstract:
                                <textarea id="abstractXx" name="abstractXx" class="form-control" rows="7" placeholder="Type here... (Required...)"></textarea>
                                Keywords:
                                <textarea id="keywordsXx" name="keywordsXx" class="form-control" rows="3" placeholder="Type here... (Required...)"></textarea>
                            </form>
                          </div>
                          <div class="col-lg-6" style="font-size:11px;">
                              <h4><b>Step 2:</b> File Reference (PDF/pdf format)</h4>
                              <div style="padding:15px;background:#dddddd;box-shadow:inset 0 0 4px rgba(0, 0, 0, .23)">
                                  <form method="POST" action="<?php echo base_url('Strt/sbmtFileDat');?>" id="uploadfile" enctype="multipart/form-data">
                                      <input type="file" name="file" id="file" style="-webkit-appearance:button;padding:5px;width:100%;cursor:pointer;background:#96d19b" required="">
                                      <button id="SBmitFF" type="submit" name="submit" class="submit" style="margin-top:5px;">Attach File</button>
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
                                  <div id="fox2" style="height:270px;overflow:auto;border-top:1px solid #c4c5c6;border-bottom:1px solid #c4c5c6;background:#dddddd;padding:2px;box-shadow:inset 0 0 4px rgba(0, 0, 0, .23)">
                                      <font style="color:#aeaeae">No Author</font>
                                  </div>
                              </div>
                          </div>
                      </div>
                    </div>
                    <div id="thirdPartSumission" style="display:none;padding:10px;">
                      <center>
                        <div style="font-size:25px;padding:30px;margin-top:60px;">
                          <font style="font-size:30px;">Thank You!</font><br>
                          We are pleased to serve you. After the validation of your account by our administrator, a link will be sent to your E-mail account that will serve as your invitation for the JASSH login. Then, you will be having the priviledge to use and enjoy some features of this Journal System. 
                          <div style="text-align:left;font-size:16px;width:60%;padding-top:10px;">
                            <li> Submit an articles</li>
                            <li> View published articles of other authors</li>
                            <li> Be the most updated one for our events and conferences</li>
                            <li> Benchmark your ideas</li>
                            <br><br>
                            <center><font id="cont10you" class="btn btn-primary">Continue... >></font></center>
                          </div>
                        </div>
                      </center>
                    </div>
                    <div id="sixthPartSumission" style="display:none;padding:10px;">
                      <center>
                        <div style="font-size:25px;padding:30px;margin-top:10px;">
                          <font style="font-size:30px;">Journal System Login</font><br>
                          Since you're not new to this Journal System, we recommend that you allow us to identify you as part of this Journal System for article tracking.
                          <br><br><div style="width:60%;font-size:14px;">
                            <form id="userlogged_frm22">
                              <table width="100%">
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">USERNAME/Email:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;">
                                      <input id="usernNjj22" type="text" name="usernNjj22" style="padding:5px;width:250px;padding-left:10px;margin-top:-5px;box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);" placeholder="Required...">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">PASSWORD:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;">
                                      <input id="passWjj22" type="password" name="passWjj22" style="padding:5px;width:250px;padding-left:10px;margin-top:-5px;box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);" placeholder="Required...">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;"></div>
                                  </td></form>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;">
                                      <font id="btn-loggedin22" class="btn btn-default" style="padding:4px;padding-left:10px;padding-right:10px;background:#96cdea;"><b>Login</b></font> <font class="bottomIns">Not a user? <font id="clckYesSub2x" style="cursor:pointer;color:darkblue;">Register Now!</font></font>
                                      <br><br><font class="bottomIns">Forgot password?</font>
                                      <br><br><font class="bottomIns" style="color:blue;">
                                        <a onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=1000,height=640,directories=no,location=no'); return false;" rel="nofollow" href="http://journal.carsu.edu.ph/index.php/index/help" target="__blank" style="text-decoration:none;color:darkblue;cursor:pointer;"><i class="fa fa-mail-forward"></i> Help</a>
                                      </font>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                          </div>
                        </div>
                      </center>
                    </div>
                    <div id="secondPartSumission" style="display:none;padding:10px;">
                        <div id="" style="font-family:calibri;padding:5px;font-size:12px;">
                        <div style="padding:5px;">
                          <div style="padding:10px;border-bottom:1px solid #aeaeae">
                            <center style="">
                              <font style="font-size:17px">Fill in this form to register with this site.</font><br>
                              For you to get the most updates of your article, we recommend that you fill-in the following inputs. Your personal informations are safe with us.
                              
                            </center>
                          </div>
                          <center><br>
                          <div style="width:80%;">
                            <table width="100%">
                              <form action="" method="POST" id="formRegister_ff2">
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;height:140px;">
                                      <font style="font-size:19px;margin-top:5px;">ORCID iD:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;height:60px;">
                                    <div style="padding:5px;height:140px;">
                                      <input id="nx_RegORCIDiD" type="text" name="nx_RegORCIDiD" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;" placeholder="Required..."><font id="handWarnfirstUserN" style="color:red;display:none;">&nbsp&nbsp&nbsp<i class="fa fa-hand-o-left"></i> Start here...</font>
                                      <br>ORCID iDs can only be assigned by the ORCID Registry. You must conform to their standards for expressing ORCID iDs, and include the full URI (eg. http://orcid.org/0000-0002-1825-0097).<br>
                                      No ORCID ID?: <a href="http://www.orcid.org/" style="color:blue;" target="__blank">Create One</a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;height:80px;">
                                      <font style="font-size:19px;margin-top:5px;">USERNAME:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;height:80px;">
                                      <input id="nx_RegUsername" type="text" class="nx_foc" name="nx_RegUsername" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;" placeholder="Required...">
                                      <br>The username must contain only lowercase letters, numbers, and hyphens/underscores.
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;height:60px">
                                      <font style="font-size:19px;margin-top:5px;">PASSWORD:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;height:60px">
                                      <input id="nx_RegPassW" class="nx_foc" type="password" name="nx_RegPassW" onCopy="return false" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;" placeholder="Required..."> 
                                      <font id="passFFxx" class="btn btn-default" style="margin-top:-7px;"><i class="fa fa-eye"></i></font>
                                      <br>The password must be at least 6 characters.
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">Repeat Password:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;">
                                      <input id="nx_ReTypeRegPassW" class="nx_foc" type="password" name="nx_ReTypeRegPassW" onCopy="return false" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;" placeholder="Required...">
                                        <font id="passFFxx2" class="btn btn-default" style="margin-top:-7px;"><i class="fa fa-eye"></i></font>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">Salutation:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;">
                                      <input id="nx_RegSalute" type="text" class="nx_foc" name="nx_RegSalute" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;" placeholder="Optional...">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">First Name:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;">
                                      <input id="nx_RegFirstName" type="text" class="nx_foc" name="nx_RegFirstName" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;" placeholder="Required...">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">Middle Name:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;">
                                      <input id="nx_RegMiddleName" type="text" class="nx_foc" name="nx_RegMiddleName" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;" placeholder="Required...">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">Last Name:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;">
                                      <input id="nx_RegLastName" type="text" class="nx_foc" name="nx_RegLastName" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;" placeholder="Required...">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;height:60px;">
                                      <font style="font-size:19px;margin-top:5px;">Initials:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;height:60px;">
                                      <input id="nx_RegInitials" type="text" class="nx_foc" name="nx_RegInitials" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;" placeholder="Optional...">
                                      <br>Joan Alice Smith = JAS
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">Gender:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;">
                                      <select id="nx_RegGend" name="nx_RegGend" class="nx_foc" style="padding:5px;width:250px;padding-left:10px;margin-top:-5px;cursor: pointer;">
                                        <option name="nx_RegGend" value="">Select Gender</option>
                                        <option name="nx_RegGend" value="Male">MALE</option>
                                        <option name="nx_RegGend" value="Female">FEMALE</option>
                                        <option name="nx_RegGend" value="Other">Other</option>
                                      </select>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;height:130px;">
                                      <font style="font-size:19px;margin-top:5px;">Affiliation:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;height:130px;">
                                      <textarea class="nx_foc" name="nx_RegAffiliation" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;height:90px;"></textarea>
                                      <br>(Your institution, e.g. "Simon Fraser University")
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;height:60px;">
                                      <font style="font-size:19px;margin-top:5px;">Email:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;height:60px;">
                                      <input id="nx_RegEmail" type="text" class="nx_foc" name="nx_RegEmail" onCopy="return false" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;" placeholder="Required...">
                                      <br>The Email must be from &nbsp&nbsp<a href="http://www.gmail.com" target="__blank"><font style="color:red"><i class="fa fa-google-plus-square"></i> Gmail</font></a>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">Confirm Email:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;">
                                      <input id="nx_RegConfEmail" type="text" class="nx_foc" name="nx_RegConfEmail" onCopy="return false" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;" placeholder="Required...">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">URL:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;">
                                      <input type="text" class="nx_foc" name="nx_RegURL" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;" placeholder="">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">Phone:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;">
                                      <input type="text" class="nx_foc" name="nx_RegPhone" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;" placeholder="">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">Fax:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;">
                                      <input type="text" class="nx_foc" name="nx_RegFax" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;" placeholder="">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">Mailing Address:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;">
                                      <input type="text" class="nx_foc" name="nx_RegMailAdd" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;" placeholder="">
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">Country:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;">
                                      <select id="nx_RegCountry" name="nx_RegCountry" class="nx_foc" style="padding:5px;width:250px;padding-left:10px;margin-top:-5px;cursor: pointer;"></select>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;height:110px;">
                                      <font style="font-size:19px;margin-top:5px;">Bio Statement (E.g., department and rank):</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;height:110px;">
                                      <textarea class="nx_foc" name="nx_RegBioStatement" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:250px;padding-left:10px;margin-top:-5px;height:90px;"></textarea>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">Confirmation:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;border-bottom:1px solid #aeaeae">
                                      <font style="font-size:18px;"><b>Send me a confirmation email</b> including my username and password</font><br>
                                      <input type="radio" class="nx_foc" name="nx_SendMeEmail" value="yes" style="width:20px;height:20px;margin-top:1px;cursor:pointer;color:green" checked="checked"><font style="padding:10px;">Yes</font> &nbsp&nbsp
                                      <input type="radio" class="nx_foc" name="nx_SendMeEmail" value="no" style="width:20px;height:20px;margin-top:1px;cursor:pointer;color:green"> <font style="padding:10px;">No</font>
                                    </div>
                                  </td>
                                </tr>
                                <tr style="">
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;">Register as:</font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;border-bottom:1px solid #aeaeae">
                                      <font style="font-size:18px;"><b>Reader:</b> Notified by email on publication of an issue of the journal.</font><br>
                                      <input type="radio" class="nx_foc" name="nx_RegRegAs" value="yes" style="width:20px;height:20px;margin-top:1px;cursor:pointer;color:green" checked="checked"><font style="padding:10px;">Yes</font> &nbsp&nbsp
                                      <input type="radio" class="nx_foc" name="nx_RegRegAs" value="no" style="width:20px;height:20px;margin-top:1px;cursor:pointer;color:green"> <font style="padding:10px;">No</font>
                                    </div>
                                  </td>
                                </tr>
                                <tr style="">
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;"></font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;border-bottom:1px solid #aeaeae;color:red">
                                      By default, you will be an author or a publisher of any article.
                                    </div>
                                  </td>
                                </tr>
                                <tr style="">
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;">
                                      <font style="font-size:19px;margin-top:5px;"></font>
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td align="right" style="width:37%;">
                                    <div style="padding:5px;height:110px;">
                                      <font style="font-size:19px;margin-top:5px;"></font>
                                    </div>
                                  </td>
                                  <td align="left" style="width:63%;">
                                    <div style="padding:5px;height:110px;">
                                      <textarea class="nx_foc" name="nx_RegRemarks" style="box-shadow:inset 0 0 8px rgba(0, 0, 0, .3);padding:5px;width:70%;padding-left:10px;margin-top:-5px;height:90px;"></textarea>
                                    </div>
                                  </td>
                                </tr>
                              </form>
                            </table>
                          </div>
                        </center>
                        </div>
                      </div>
                    </div>
                    <div id="firstPartSubmission" style="display:none;">
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
                        <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp Plagiarism should be at most 5%.<br><br>
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
                </div>
            </div>
            <div id="" class="modal-footer" style="background:#bdd8a9;padding:10px;width:100.1%;">
                <div id="JASSHsubFooter3" style="display:none;">
                  <font class="CancelsubmitNWjourmnBase"><button type="button" class="btn btn-default" data-dismiss="modal" style="padding:2px;padding-right:10px;padding-left:10px;margin-top:-1px;">Cancel/Reset</button></font>
                  <button id="submitNWjourmn" type="button" class="btn btn-default" style="padding:2px;padding-right:10px;padding-left:10px;background:#679645;color:white;">Submit Article</button>
                </div>
                <div id="JASSHsubFooter2" style="display:none;">
                    <font class="CancelsubmitNWjourmnBase"><button type="button" class="btn btn-default" data-dismiss="modal" style="padding:2px;padding-right:10px;padding-left:10px;">Cancel/Reset</button></font>
                    <font id="PWjasshff2"><button class="btn btn-default proceedPart101" type="button" style="padding:2px;padding-right:10px;padding-left:10px;background:#679645;color:white;">Proceed</button></font>
                </div>
                <div id="JASSHsubFooter1" style="display:none;">
                    <font class="CancelsubmitNWjourmnBase"><button type="button" class="btn btn-default" data-dismiss="modal" style="padding:2px;padding-right:10px;padding-left:10px;">Cancel/Reset</button></font>
                    <button id="accpetforSubmissionAR" type="button" class="btn btn-default" style="padding:2px;padding-right:10px;padding-left:10px;background:#679645;color:white;">I have read and accept policies</button>
                </div>
            </div>
        </div>
    </div>
    </div>

  <script src="<?php echo base_url();?>prof_Boot/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url();?>prof_Boot/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url();?>prof_Boot/js/jquery-ui.js"></script>
  <script src="<?php echo base_url();?>prof_Boot/js/popper.min.js"></script>
  <script src="<?php echo base_url();?>prof_Boot/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>prof_Boot/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url();?>prof_Boot/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url();?>prof_Boot/js/jquery.countdown.min.js"></script>
  <script src="<?php echo base_url();?>prof_Boot/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url();?>prof_Boot/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url();?>prof_Boot/js/aos.js"></script>
  <script src="<?php echo base_url();?>prof_Boot/js/jquery.fancybox.min.js"></script>
  <script src="<?php echo base_url();?>prof_Boot/js/jquery.sticky.js"></script>
  <script src="<?php echo base_url();?>prof_Boot/js/jquery.mb.YTPlayer.min.js"></script>

  <script src="<?php echo base_url();?>prof_Boot/js/main.js"></script>
</body>

</html>