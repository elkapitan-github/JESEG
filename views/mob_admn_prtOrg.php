    <div class="container body">

        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <center><a href="#" class="site_title" style="margin-top:-5px;">
                            <h1 style="color:#558732"> <span><img src="nwng/csulogo.png" style="width:40px;height:40px;margin-left:-18px;"> j</span><span style="color:#d3b719">ASSH</span></h1></a>
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
                                    echo '<font id="sappPPLxx"><img src="nwng/msicon.jpg" style="width:90%;"></font>';
                                }else{
                                    echo '<font id="sappPPLxx"><img src="./userimage/'.$varSTr.'" style="width:90%;"></font>';
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
                                        <li><a href="cmendwll?epr=dash">Dashboard</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-book"></i> Article Manager <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="Cmendwll?epr=artcl">Articles</a>
                                        </li>
                                        <li><a href="Cmendwll?epr=newRes">New Authors</a>
                                        </li>
                                        <li><a href="Cmendwll?epr=regsterd">Registered</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-wrench"></i> Page Control <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="cmendwll?epr=mainslider">Main Sliders</a>
                                        </li>
                                        <li><a href="cmendwll?epr=lanews">Lastest News</a>
                                        </li>
                                        <li><a href="cmendwll?epr=activit">Activities</a>
                                        </li>
                                        <li><a href="cmendwll?epr=downLdDa">Downloadables</a>
                                        </li>
                                        <li><a href="cmendwll?epr=prtOrg">Partner Organization</a>
                                        </li>
                                    </ul>
                                </li>
                                <li style="cursor:pointer;"><a href="<?php echo base_url('cmendwll/lcklc');?>"><i class="fa fa-lock"></i> Logout </a></li>
                            </ul>
                            <center><br>
                                <img src="<?php echo base_url('nwng/csulogo.png');?>" style="width:40%;border:2px solid #397547;box-shadow:0px 0px 2px rgba(0, 0, 0, .5);border-radius:50%;">
                                <br><font style="font-size:8px;color:white;">&copy Copyright <?php echo date('Y');?></font>
                            </center>
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
                                                echo '<font id="sappPPLxx"><img src="nwng/msicon.jpg" alt=""></font>';
                                            }else{
                                                echo '<font id="sappPPLxx"><img src="./userimage/'.$varSTr.'" alt=""></font>';
                                            }
                                        }
                                        ?><font id="pp"><?php echo $ComName?> &nbsp<span class=" fa fa-angle-down"></span></font>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li>
                                        <a onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=1000,height=640,directories=no,location=no'); return false;" rel="nofollow" href="http://journal.carsu.edu.ph/index.php/index/help" target="__blank" style="text-decoration:none;color:blue;cursor:pointer;"><i class="fa fa-info-circle pull-right"></i> Help</a>
                                    </li>
                                    <li><a href="<?php echo base_url('cmendwll/lcklc');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"> 
                                    <div>Logged-in As: <font style="font-size:25px;">Administrator</font></div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col" role="main">
                <div style="padding:10px;border-bottom:1px solid #aeaeae;">
                    <font class="btn btn-primary" style="float:right;margin-top:5px;" data-toggle="modal" data-target=".bs-addprtOrgzz-modal-lg">+ &nbsp Add Partner Organization</font>
                    <h1>Partner Organization </h1>
                </div>
                <div style="padding:10px;">
                    <font id="TopclAS" style="float:right;font-size:20px;">Loading...</font>
                    <h5>No modification for this area.. Validate your entry before the submission.</h5>
                    <style type="text/css">
                        .opxlx{background:none;}
                        .opxlx:hover{cursor:pointer;background:#b9cae5}
                    </style>
                    <div id="partOrgAreee" style="padding:10px;border-top:1px solid #aeaeae;">
                        <div class="col-md-12" style="border-bottom:1px solid #aeaeae;background:white;">
                            <div class="col-md-2" style="text-align:center;">
                                <b>Logo</b>
                            </div>
                            <div class="col-md-3">
                                <b>Name</b>
                            </div>
                            <div class="col-md-3">
                                <b>Description</b>
                            </div>
                            <div class="col-md-2">
                                <b>Website Link</b>
                            </div>
                            <div class="col-md-2">
                                <center><b>Controls</b></center>
                            </div>
                        </div>
                        <div id="POlxxowOgPrt"></div>
                        <font style="font-size:1px;">.</font>
                    </div>
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
