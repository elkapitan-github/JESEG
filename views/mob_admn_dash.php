    <div class="container body">
        <?php echo '<input type="hidden" name="userid" value="'.$userid.'">';?>
        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <center><a href="#" class="site_title" style="margin-top:-5px;">
                            <h1 style="color:#558732"> <span><img src="img/jeseg.png" style="width:40px;height:40px;margin-left:-18px;"> j</span><span style="color:#d3b719">ESEG</span></h1></a>
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
                                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu" style="display: none">
                                        <li><a href="Cmendwll?epr=dash">Dashboard</a>
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
                                        <li><a href="Cmendwll?epr=mainslider">Main Sliders</a>
                                        </li>
                                        <li><a href="Cmendwll?epr=lanews">Lastest News</a>
                                        </li>
                                        <li><a href="Cmendwll?epr=facilities">Facilities</a>
                                        </li>
                                        <li><a href="Cmendwll?epr=downLdDa">Downloadables</a>
                                        </li>
                                    </ul>
                                </li>
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
                                                echo '<font id="sappPPLxx"><img src="'.base_url().'../nwng/msicon.jpg" alt=""></font>';
                                            }else{
                                                echo '<font id="sappPPLxx"><img src="'.base_url().'../userimage/'.$varSTr.'" alt=""></font>';
                                            }
                                        }
                                        ?><font id="pp"><?php echo $ComName?> &nbsp<span class=" fa fa-angle-down"></span></font>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                                    <li>
                                        <a onclick="window.open(this.href,'win2','status=no,toolbar=no,scrollbars=yes,titlebar=no,menubar=no,resizable=yes,width=1000,height=640,directories=no,location=no'); return false;" rel="nofollow" href="http://journal.carsu.edu.ph/index.php/index/help" target="__blank" style="text-decoration:none;color:blue;cursor:pointer;"><i class="fa fa-info-circle pull-right"></i> Help</a>
                                    </li>
                                    <li><a href="<?php echo base_url('Cmendwll/lcklc');?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
                <!-- top tiles -->
                <div class="row tile_count">
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top" style="color:#525252"><i class="fa fa-user"></i>&nbsp&nbsp Users</span>
                            <div class="count" id="Poxl1" style="color:#525252"><font style="font-size:10px;">Loading...</font></div>
                            <span class="count_bottom">Resrchr. /Edtor. /Rviewr.</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top" style="color:#525252"><i class="fa fa-book"></i>&nbsp&nbsp Articles</span>
                            <div class="count" id="Poxl2" style="color:#525252"><font style="font-size:10px;">Loading...</font></div>
                            <span class="count_bottom">Undr Rview / <font style="color:#1abb9c;text-shadow:0.2px 0.2px 0.2px black">Pblshed</font></span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top" style="color:#525252"><i class="fa fa-file"></i>&nbsp&nbsp Files</span>
                            <div class="count" id="Poxl3" style="color:#525252"><font style="font-size:10px;">Loading...</font></div>
                            <span class="count_bottom">Dnwladable & Artcle Base</span>
                        </div>
                    </div>
                    <!-- data-toggle="modal" data-target=".bs-viewNoteds-modal-lg"-->
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count Poxlx888xx"  href="#" style="text-decoration:none;cursor:pointer;">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top" style="color:#525252">
                                <i class="fa fa-bell"></i>&nbsp&nbsp User Notifications
                                <!--<font id="ditp22ne"></font>-->
                            </span>
                            <div class="count" id="Poxl4" style="color:#525252"><font style="font-size:10px;">Loading...</font></div>
                            <span class="count_bottom">Users actvty</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top" style="color:#525252"><i class="fa fa-clock-o"></i>&nbsp&nbsp Logs</span>
                            <div class="count" id="Poxl5" style="color:#525252"><font style="font-size:10px;">Loading...</font></div>
                            <span class="count_bottom">Noted Activity</span>
                        </div>
                    </div>
                    <div class="animated flipInY col-md-2 col-sm-4 col-xs-4 tile_stats_count">
                        <div class="left"></div>
                        <div class="right">
                            <span class="count_top" style="color:#525252"><i class="fa fa-paw"></i>&nbsp&nbsp Active Users</span>
                            <div class="count" id="Poxl6" style="color:#525252"><font style="font-size:10px;">Loading...</font></div>
                            <span class="count_bottom">Recorded Loggedin Attmpt</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="padding-top:10px;">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Administrator Logs</h2>
                                    <font style="float:right;"><a class="collapse-link"><i class="fa fa-chevron-up" style="color:#c2c3c4"></i></a></font>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="dashboard-widget-content" style="height:400px;overflow:auto;">
                                        <ul id="POxl121238x" class="list-unstyled timeline widget"></ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /top tiles -->
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
