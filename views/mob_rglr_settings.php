    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <center><a href="#" class="site_title" style="margin-top:-5px;">
                            <h1 style="color:#558732"> <span><img src="../nwng/csulogo.png" style="width:40px;height:40px;margin-left:-18px;"> j</span><span style="color:#d3b719">ESEG</span></h1></a>
                        </center>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div style="background:#fff;margin-right:5px;margin-left:5px;padding-top:10px;padding-bottom:10px;">
                            <center>
                            <?php
                            $varSTr = "";
                            foreach ($imageres as $xxPx) {
                                $varSTr = "";
                                $varSTr = $xxPx->image;
                                if($varSTr == ""){
                                    echo '<font id="sappPPLxx"><img src="'.base_url().'../nwng/msicon.jpg" style="width:90%;"></font>';
                                }else{
                                    echo '<font id="sappPPLxx"><img src="'.base_url().'../userimage/'.$varSTr.'" style="width:90%;"></font>';
                                }
                            }
                            ?>
                            </center>
                        </div>
                        <div style="padding:10px;color:white;">
                            <span>Welcome,</span>
                            <h5><?php echo $ComName?></h5>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu" style="margin-top:-8px;">
                        <div class="menu_section">
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="GtReglr?epr=about">About jASSH</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-book"></i> Publication <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="GtReglr?epr=articles">My Articles</a>
                                        </li>
                                        <li><a href="GtReglr?epr=settings">Settings</a>
                                        </li>
                                        <li><a onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=1000,height=640,directories=no,location=no'); return false;" rel="nofollow" href="http://journal.carsu.edu.ph/index.php/index/help" target="__blank" style="text-decoration:none;color:blue;cursor:pointer;">Help <i class="fa fa-mail-forward" style="float:right"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- /sidebar menu -->
                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">

                <div class="nav_menu">
                    <nav class="" role="navigation">
                        <div class="nav toggle">
                            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                        </div>

                        <ul class="nav navbar-nav navbar-right">
                            <li class="">
                                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div>
                                        <?php
                                        $varSTr = "";
                                        foreach ($imageres as $xxPx) {
                                            $varSTr = "";
                                            $varSTr = $xxPx->image;
                                            if($varSTr == ""){
                                                echo '<font id="sappPPLxx"><img src="'.base_url().'../nwng/msicon.jpg" alt=""></font>';
                                            }else{
                                                echo '<font id="sappPPLxx"><img src="'.base_url().'../userimage/'.$varSTr.'" alt=""></font>';
                                            }
                                        }
                                        ?><font id="pp"><?php echo $ComName?> &nbsp<span class=" fa fa-angle-down"></span></font>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li><a href="javascript:;" data-toggle="modal" data-target=".bs-viewNoteds-modal-lg"><i class="fa fa-bell pull-right"></i>  Notifications</a>
                                    </li>
                                    <li>
                                        <a href="gtReglr?epr=settings">
                                            <i class="fa fa-gears pull-right"></i>
                                            <span>Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=1000,height=640,directories=no,location=no'); return false;" rel="nofollow" href="http://journal.carsu.edu.ph/index.php/index/help" target="__blank" style="text-decoration:none;color:blue;cursor:pointer;"><i class="fa fa-info-circle pull-right"></i> Help</a>
                                    </li>
                                    <li><a href="<?php echo base_url('GtReglr/lcklc');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"> 
                                    <div style="width:200px;">Logged-in As:
                                        <select id="Utype" name="Utype" style="width:100px;padding:2px;padding-left:5px;cursor:pointer;">
                                            <?php
                                            if($authorSel == 1){
                                                echo '<option name="Utype" value="1">Researcher</option>';
                                            }
                                            if($reviewerSel == 1){
                                                echo '<option name="Utype" value="2">Reviewer</option>';
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col" role="main">
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
                                            echo '<font id="sappPPLxx2"><img src="'.base_url().'../nwng/msicon.jpg" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22)"></font>
                                            <br><font id="clickFphoto" class="btn btn-default crop_image" data-toggle="modal" data-target=".bs-changePhot-modal-lg">Change Photo</font>';
                                        }else{
                                            echo '<font id="sappPPLxx2"><img src="'.base_url().'../userimage/'.$varSTr.'" height="200" width="200" style="margin-top:8px;box-shadow:0px 1px 4px rgba(0, 0, 0, .22);width:200px;height:200px;"></font>
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
            <!-- /page content -->

        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
