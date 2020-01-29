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
                                        <li><a href="GtReglr?epr=backgrnd">Background</a>
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
                                    <div>Logged-in As:
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
                Currently no background...
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
