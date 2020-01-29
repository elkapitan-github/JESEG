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
                                <li><a><i class="fa fa-laptop"></i> Reviews <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="GtEdtrRr?epr=mngr">Article Manager</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-book"></i> Publication <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="GtEdtrRr?epr=revlist">Reviewers List</a>
                                        </li>
                                        <li><a href="GtEdtrRr?epr=reslist">Researchers List</a>
                                        </li>
                                        <li><a onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=1000,height=640,directories=no,location=no'); return false;" rel="nofollow" href="http://journal.carsu.edu.ph/index.php/index/help" target="__blank" style="text-decoration:none;color:blue;cursor:pointer;">Help <i class="fa fa-mail-forward" style="float:right"></i></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <center><br>
                                <img src="<?php echo base_url('../nwng/csulogo.png');?>" style="width:40%;border:2px solid #397547;box-shadow:0px 0px 2px rgba(0, 0, 0, .5);border-radius:50%;">
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
                                        <img src="../nwng/msicon.jpg" alt="">
                                        <font id="pp"><?php echo $ComName?> &nbsp<span class=" fa fa-angle-down"></span></font>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li class="Pasdakwjna12"><a href="javascript:;" data-toggle="modal" data-target=".bs-viewNoteds-modal-lg"><i class="fa fa-bell pull-right"></i>  Notifications</a>
                                    </li>
                                    <li>
                                        <a onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=1000,height=640,directories=no,location=no'); return false;" rel="nofollow" href="http://journal.carsu.edu.ph/index.php/index/help" target="__blank" style="text-decoration:none;color:blue;cursor:pointer;"><i class="fa fa-info-circle pull-right"></i> Help</a>
                                    </li>
                                    <li><a href="<?php echo base_url('GtEdtrRr/lcklc');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"> 
                                    <div>Logged-in As: <font style="font-size:25px;">Editor</font></div>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

            </div>
            <!-- /top navigation -->


            <!-- page content -->
            <div class="right_col" role="main">
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
            <!-- /page content -->

        </div>

    </div>

    <div id="custom_notifications" class="custom-notifications dsp_none">
        <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
        </ul>
        <div class="clearfix"></div>
        <div id="notif-group" class="tabbed_notifications"></div>
    </div>
