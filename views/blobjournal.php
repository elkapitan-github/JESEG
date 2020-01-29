  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area" style="box-shadow:1px 3px 4px rgba(0, 0, 0, .25)">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
								</button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="strt">
                  <h1 style="color:#558732"> 
                    <span><img src="nwng/csulogo.png" style="width:45px;height:45px;background:white;border-radius:5px;"></span> 
                    <span style="color:white;font-size:14px;position:absolute;margin-left:12px;margin-top:1.0px;">
                      <font style="font-family:times new roman;">Caraga State University</font><br>
                      <font class="hddkxx1">ANNALS OF STUDIES IN SCIENCE AND HUMANITIES</font><br>
                      <font class="hddkxx1">Ampayon, Butuan City, Pilippines, 8600</font>
                    </span>
                  </h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="img/logo.png" alt="" title=""> -->
								</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a href="#home" class="page-scroll hovP">Home</a>
                  </li>
                  <li class="dropdown hovP"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a class="page-scroll hovP" href="#about" style="color:white;">Journal Info.</a></li>
                      <li><a class="page-scroll hovP" href="#fuasdxx" style="color:white;">Site Info.</a></li>
                      <li><a class="page-scroll hovP" href="#team" style="color:white;">Org. Structure</a></li>
                      <li><a class="page-scroll hovP" href="#portfolio" style="color:white;">Portfolio</a></li>
                    </ul> 
                  </li>
                  <li class="dropdown hovP"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Streams<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a class="page-scroll hovP" href="#vvhg190123" style="color:white;">Upcoming Activities/Events</a></li>
                    </ul> 
                  </li>
                  <li class="dropdown hovP"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Others<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a class="page-scroll hovP" href="#userlog" style="color:white;">Login Form</a></li>
                      <li><a class="page-scroll hovP" href="#registers" style="color:white;">Join / Sign Up</a></li>
                      <li><a class="page-scroll hovP" href="#contact" style="color:white;">Contact Us</a></li>
                    </ul> 
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <?php
        $x = 0;
        $tag1 = "";$tag2 = "";$tag3 = "";$tag4 = "";$tag5 = "";
        foreach ($dataSlider as $rx) {
          if($x == 0){
            echo '<img src="nwng/slider/'.$rx->imgname.'" alt="" title="#slider-direction-1" />';
          }else if($x == 1){
            echo '<img src="nwng/slider/'.$rx->imgname.'" alt="" title="#slider-direction-2" />';
            $tag2 = $rx->tagline;
          }else if($x == 2){
            echo '<img src="nwng/slider/'.$rx->imgname.'" alt="" title="#slider-direction-3" />';
            $tag3 = $rx->tagline;
          }else if($x == 3){
            echo '<img src="nwng/slider/'.$rx->imgname.'" alt="" title="#slider-direction-4" />';
            $tag4 = $rx->tagline;
          }else if($x == 4){
            echo '<img src="nwng/slider/'.$rx->imgname.'" alt="" title="#slider-direction-5" />';
            $tag5 = $rx->tagline;
          }
          $x++;
        }
        ?>
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <font style="color:#6ad18b;font-size:70px;" class="fontAmaze2 xxPoxx"><font style="font-size:90px;color:#0be24f">C</font>ARAGA <font style="font-size:90px;color:#0be24f">S</font>TATE <font style="font-size:90px;color:#0be24f">U</font>NIVERSITY </font>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h2 class="title2 fontAmaze3 thisPartHed2" style="font-size:30px;">journal <font style="font-size:40px;color:#f9bc04" class="tagre">A</font>NNALS OF <font style="font-size:40px;color:#f9bc04" class="tagre">S</font>TUDIES IN <font style="font-size:40px;color:#f9bc04" class="tagre">S</font>CIENCE AND <font style="font-size:40px;color:#f9bc04" class="tagre">H</font>UMANITIES</h2>
                  <div class="layer-1-1 hidden-xs" style="padding:10px;padding-top:30px;">
                    <a href="#EstrXX" class="ready-btn right-btn page-scroll hovP" style="text-decoration:none;">Get Started</a>
                  </div>
                </div>
                <!--<div class="layer-1-3 wow slideInUp tagre" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn page-scroll hovP" href="#about" style="text-decoration:none;background:#41a360;border:2px solid white;">Start</a>
                </div>-->
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
              </div>
            </div>
          </div>
          <font class="wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s" style="font-size:13px;margin-top:-100px;"><?php echo $tag2;?></font>
        </div>
      </div>
      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-three">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
              </div>
            </div>
          </div>
          <font class="wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s" style="font-size:13px;"><?php echo $tag3;?></font>
        </div>
      </div>
      <!-- direction 4 -->
      <div id="slider-direction-4" class="slider-direction slider-four">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
              </div>
            </div>
          </div>
          <font class="wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s" style="font-size:13px;"><?php echo $tag4;?></font>
        </div>
      </div>
      <!-- direction 5 -->
      <div id="slider-direction-5" class="slider-direction slider-five">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
              </div>
            </div>
          </div>
          <font class="wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s" style="font-size:13px;"><?php echo $tag5;?></font>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Start Service area -->
  <div id="EstrXX" class="services-area area-padding" style="border-top:1px solid #aeaeae;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline services-head text-center">
            <font style="font-size:30px;">j</font><h2>ASSH Streams</h2>
          </div>
        </div>
      </div>
      <div class="row" style="padding-top:10px;">
        <div class="col-md-8">
          <div style="padding-top:40px;">
            <center><h3 style="color:#bc363d">New Published Articles</h3></center>
          </div>
          <div style="">
            <font class="btn btn-primary" data-toggle="modal" data-target=".bs-submissionDataFinal-modal-lg">Submit an article for review</font>
            <font style="float:right">
              <a href="#fuasdxx" class="page-scroll hovP"><font class="btn btn-success"><i class="fa fa-info-circle"></i>&nbsp Help</font></a>
            </font>
          </div>
          <style type="text/css">
            .artViewPER{
              font-size:14px;padding:2px;margin-top:8px;background:#d5edd9;box-shadow:0.5px 0.5px 0.5px rgba(0, 0, 0, .42)
            }
            .artViewPER:hover{
              background:#bad3be;cursor:pointer;
            }
          </style>
          <div id="" class="services-contents fox" style="border-bottom:1px solid #aeaeae;">
            <div id="dispPbbArtxx"></div>
            <div style="padding:15px;">
              <center>
                <a href="strt/moreart" target="__blank"><button class="btn btn-default"><i class="fa fa-info-circle"></i>&nbsp&nbspShow more</button></a> &nbsp&nbsp&nbsp
                <a href="#"><button class="btn btn-default">Google Scholar</button></a>
              </center>
            </div>
          </div>
          <style type="text/css">
            .scrolls {
                  overflow-x: scroll;
                  overflow-y: hidden;
                  white-space:nowrap;
                  padding-bottom:5px;
              }
              .scrolls:hover{cursor:pointer;}
              .scrolls::-webkit-scrollbar-thumb{border-radius:5px;background:#cfd6d5;box-shadow:0px 0px 2px black;height:7px;}
              .scrolls::-webkit-scrollbar{width:6px;background-color:white;padding:2px;height:7px;}
          </style>
          <div style="padding-top:40px;">
            <center><h3 style="color:#bc363d">Latest News</h3></center>
          </div>
          <div class="row" style="padding:7px;padding-right:27px;padding-left:27px;">
            <div id="laNewsDisplHre"></div>
            <font style="font-size:1px;">.</font>
            <div style="padding:15px;border-bottom:1px solid #aeaeae;">
              <center>
                <a href="strt/moreLaNews" target="__blank"><button class="btn btn-default"><i class="fa fa-info-circle"></i>&nbsp&nbspShow more</button></a>
              </center>
            </div>
          </div>
          <div id="vvhg190123" style="padding-top:40px;">
            <center><h3 style="color:#bc363d">Upcoming Activities and Events</h3></center>
          </div>
          <div style="height:10px;"></div>
          <div id="mmmmlkas" style="padding-left:15px;padding-right:15px;"></div>
          <div style="padding:15px;">
            <center>
              <a href="strt/moreupacev" target="__blank"><button class="btn btn-default"><i class="fa fa-info-circle"></i>&nbsp&nbspShow more</button></a> &nbsp&nbsp&nbsp
            </center>
          </div>
        </div>
        <div class="col-md-4" style="padding-left:5%;">
          <div style="padding-top:40px;">
            <center><h3 style="color:#bc363d">Downloadables</h3></center>
          </div>
          <div id="eventDesc" style="padding:5px;font-size:12px;text-align:center;font-weight:bold">Click to download</div>
          <div id="downDisplhrere"></div>
          <div style="padding:15px;">
            <center>
              <a href="strt/morednwld" target="__blank"><button class="btn btn-default"><i class="fa fa-info-circle"></i>&nbsp&nbspShow more</button></a> &nbsp&nbsp&nbsp
            </center>
          </div>
          <div class="row">
            <div style="padding-top:40px;border-top:1px solid #aeaeae;">
              <center><h3 style="color:#bc363d">Partner Organizations</h3></center>
            </div>
            <div id="eventDesc" style="padding:5px;font-size:12px;text-align:center;font-weight:bold">Click to View</div>
            <div id="dataodkPOvw"></div>
          </div>
          <div style="padding:10px;">
            <center><a href="strt/morePO" target="__blank"><font class="btn btn-default"><i class="fa fa-info-circle"></i>&nbsp&nbsp Show Details</font></a></center>
          </div>
          <div class="row">
            <div style="padding-top:40px;border-top:1px solid #aeaeae;">
              <center><h5>The Philippine Transparency Seal</h5></center>
            </div>
            <center><img src="nwng/transparency.png" style="width:200px;"></center>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Service area -->

  <!-- Start About area -->
  <div id="about" class="about-area area-padding" style="border-top:1px solid #d8d6d6;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Annals of Studies in Science and Humanities</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <p style="font-size:14px;">
          The Journal Annals of Studies in Science and Humanities is a peer-reviewed open-access journal, which publishes quality papers to promote scholarly discussion across a broad range of academic disciplines. It accepts submissions in any area within natural and applied sciences, engineering, mathematics, education and social sciences with main focus on fishery, agri-forestry, minerals and eco-tourism. The journal is in English and published annually in both online and print versions. ASSH is an official research publication of the Caraga State University published by the University itself through the efforts of the Office of the Vice President and Extension.<br><br>
          Online Edition: ISSN 02408-3631<br>
          Print Edition: ISSN 2408-3623<Br><br>
          Journal Annals of Studies in Science and Humanities. Volume 1 Number 1 May 2015.<br><br>
          Articles published in this journal may be quoted without permission in other scholarly writing and in popular writing, as long as credit is given to the source. However, no article may be published in its entirely without written permission from ASSH.<Br><br>
          <b>Editorial correspondence should be addressed to:</b> The Editor in-Chief, Journal Annals of Studies in Science and Humanities, c/o Caraga State University, Ampayon, Butuan City, 8600 Philippines, or e-mail at csu_assh@carsu.edu.ph<br><br>
          <b>Subscription rates:</b> Annual subscription for printed copies, rates are as follows: Institution (USD 40); Individual (USD 20). Rates are exclusive of mailing cost. To subscribe, kindly send your name and complete mailing address to: Research Publication Unit, Office of the Vice President of Research and Extension, Caraga State University, Ampayon, Butuan City, 8600 Philippines, or e-mail at jparcede@carsu.edu.ph.
        </p>
        <!-- End col-->
      </div>
      <div id="fuasdxx" style="height:18px"></div>
      <div style="font-family:calibri;padding:5px;font-size:12px;border-top:1px solid #aeaeae;text-align:center;padding-top:60px;">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>About the Site</h2>
            </div>
          </div>
        </div>
        <div style="padding:5px;">
          <center><img src="<?php echo base_url('nwng/team.jpg');?>" style="width:50%;"></center>
        </div>
        <div style="padding-bottom:10px;font-size:16px;font-weight:bold">
          The official Journal of Caraga State University "Journal Annals of Studies in Science and Humanities(ASSH)" is now online.<br>
          We are now accepting papers for Volume 1 No. 2 and Volume 2 Nos. 1 &2.<br>
          Papers can be submitted to csu_assh@carsu.edu.ph or you may register and submit online. 
        </div>
        <div class="col-md-12">
          <div class="col-md-6" style="padding-top:40px;">
            <center><h4 style="color:#bc363d">About this Publishing System</h4>
              This site uses Open Journal Systems 2.4.5.0, which is open source<br>
              journal management and publishing software developed, supported, and freely<br>
              distributed by the Public Knowledge Project under the<br>
              GNU General Public License.<br><br>
              <img data-toggle="modal" data-target=".bs-viewPicRuleArt-modal-lg" src="<?php echo base_url('nwng/edprocesslarge.png');?>" style="width:100%;height:80%;box-shadow:0px 0px 4px rgba(0, 0, 0, .42);cursor:pointer;">
            </center>
          </div>
          <div class="col-md-6" style="text-align:left;font-size:14px;padding-top:40px;">
            <center><h4 style="color:#bc363d">About the Journal</h4></center>
            <b>PEOPLE</b><br>
            <div style="padding-left:20px;color:#167560">
              <font class="abJ" data-toggle="modal" data-target=".bs-viewContact-modal-lg">>> Contact</font><br>
              <font class="abJ" data-toggle="modal" data-target=".bs-editorialTeam-modal-lg">>> Editorial Team</font>
            </div><Br>
            <b>POLICIES</b><br>
            <div style="padding-left:20px;color:#167560">
              <font id="btnPol1" class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Focus and Scope</font><br>
              <font id="btnPol2" class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Section Policies</font><br>
              <font id="btnPol3" class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Peer Review Process</font><br>
              <font id="btnPol4" class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Publication Frequency</font><br>
              <font id="btnPol5" class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Open Access Policy</font><br>
              <font id="btnPol6" class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Archiving</font><br>
              <font id="btnPol7" class="abJ" data-toggle="modal" data-target=".bs-editorialPolicies-modal-lg">>> Advertising Policy</font><br>
            </div><br>
            <b>SUBMISSIONS</b><br>
            <div style="padding-left:20px;color:#167560">
              <font id="btnSub1" class="abJ" data-toggle="modal" data-target=".bs-submission-modal-lg">>> Online Submissions</font><br>
              <font id="btnSub2" class="abJ" data-toggle="modal" data-target=".bs-submission-modal-lg">>> Author Guidelines</font><br>
              <font id="btnSub3" class="abJ" data-toggle="modal" data-target=".bs-submission-modal-lg">>> Submission Preparation Checklist</font><br>
              <font id="btnSub4" class="abJ" data-toggle="modal" data-target=".bs-submission-modal-lg">>> Copyright Notice</font><br>
              <font id="btnSub5" class="abJ" data-toggle="modal" data-target=".bs-submission-modal-lg">>> Privacy Statement</font>
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
  <!-- End About area -->

  <!-- Start team Area -->
  <div id="team" class="our-team-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Organizational Structure</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <h4>&nbsp&nbspOVPRIE Director</h4>
      </div>
      <div class="row">
        <div class="team-top">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <img src="<?php echo base_url('nwng/orstruct/vpre.jpg');?>" alt="">
                <!--<div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                  </ul>
                </div>-->
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-9 col-sm-9 col-xs-12">
            <div style="font-size:17px;">
              <b><font style="font-size:25px;">ROWENA P. VARELA, Ph.D.</font></b><br>
              The Vice President for Research Innovation and Extension<br><br>
              Caraga State University<br>
              Ampayon, Butuan City, Philippines<br>
              Email: <a href="mailto:ovpaa@carsu.edu.ph">ovpre@carsu.edu.ph</a> and <a href="mailto:rnpaluga@carsu.edu.ph">rpvarela@carsu.edu.ph</a><br>
              Tel. No.: (+63)85-815-2352
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="padding-top:50px;">
        <h4>&nbsp&nbspOVPRIE Personnel</h4>
      </div>
      <div class="row">
        <div class="team-top">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <img src="<?php echo base_url('nwng/orstruct/cccuenca.jpg');?>" alt="">
              </div>
              <div class="team-content text-center">
                <h6>CHARRY C. CUENCA</h6>
                <p style="font-size:14px;">Technical Assistant R & E Records/ <br>Accreditation Files</p>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <img src="<?php echo base_url('nwng/orstruct/aatoralba.jpg');?>" alt="">
              </div>
              <div class="team-content text-center">
                <h6>AURORA JEAN A. TORRALBA</h6>
                <p style="font-size:14px;">Technical Assistant Office Operations</p><br>
              </div>
            </div>
          </div>
          <!-- End column -->
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <img src="<?php echo base_url('nwng/orstruct/jadedumo.jpg');?>" alt="">
                <!--<div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                          <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                      <a href="#">
                          <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                  </ul>
                </div>-->
              </div>
              <div class="team-content text-center">
                <h6>JENIE A. DEDUMO</h6>
                <p style="font-size:14px;">Messenger/ Utility</p><BR>
              </div>
            </div>
          </div>
          <!-- End column -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Team Area -->

  <!-- Start Wellcome Area -->
  <!--<div class="wellcome-area">
    <div class="well-bg">
      <div class="test-overly"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="wellcome-text">
              <div class="well-text text-center">
                <h2>E-mail Alert</h2>
                <p>
                  Give us your email and be updated from us!
                </p>
                <div class="subs-feilds">
                  <div class="suscribe-input">
                    <input type="email" class="email form-control width-80" id="sus_email" placeholder="Email">
                    <button type="submit" id="sus_submit" class="add-btn width-20">Submit</button>
                    <div id="msg_Submit" class="h3 text-center hidden"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>-->
  <!-- End Wellcome Area -->

  <!-- Start reviews Area -->
  
  <!-- End reviews Area -->

  <!-- Start portfolio Area -->
  <!-- <div id="portfolio" class="portfolio-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Portfolio</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="awesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="awesome-menu ">
              <ul class="project-menu">
                <li>
                  <a href="#" data-filter="*">All</a>
                </li>
                <li>
                  <a href="#" data-filter=".development">Facilities</a>
                </li>
                <li>
                  <a href="#" data-filter=".design">Awards</a>
                </li>
                <li>
                  <a href="#" data-filter=".photo">Staff</a>
                </li>
                <li>
                  <a href="#" data-filter=".photo">Top researchers</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="awesome-project-content">
          <div class="col-md-4 col-sm-4 col-xs-12 design development">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="home_BOOT/img/portfolio/1.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="venobox" data-gall="myGallery" href="home_BOOT/img/portfolio/1.jpg">
                      <h4>Business City</h4>
                      <span>Web Development</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>-->
  <!-- awesome-portfolio end -->
  
  <!-- Start Blog Area -->
  <!--<div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Upcoming Events!</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
										<img src="home_BOOT/img/blog/1.jpg" alt="">
									</a>
              </div>
              <div class="blog-meta">
              <span class="comments-type">
								<i class="fa fa-comment-o"></i>
								<a href="#" style="font-size:12px;">13 comments</a>
							</span>
              <span class="date-type" style="font-size:12px;">
								<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
							</span>
              </div>
              <div class="blog-text">
                <h4>
                  <a href="blog.html" style="font-size:18px;">Assumenda repud eum veniam</a>
								</h4>
                <p style="font-size:12px;">
                  Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                </p>
              </div>
              <span>
								<a href="#" class="abJ" style="font-size:12px;">Read more</a>
							</span>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
										<img src="home_BOOT/img/blog/2.jpg" alt="">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
									<i class="fa fa-comment-o"></i>
									<a href="#" style="font-size:12px;">130 comments</a>
								</span>
                <span class="date-type" style="font-size:12px;">
									<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
								</span>
              </div>
              <div class="blog-text">
                <h4>
                  <a href="blog.html" style="font-size:18px;">Explicabo magnam quibusdam.</a>
								</h4>
                <p style="font-size:12px;">
                  Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                </p>
              </div>
              <span>
								<a href="#" class="abJ" style="font-size:12px;">Read more</a>
							</span>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="single-blog">
              <div class="single-blog-img">
                <a href="blog.html">
										<img src="home_BOOT/img/blog/3.jpg" alt="">
									</a>
              </div>
              <div class="blog-meta">
                <span class="comments-type">
										<i class="fa fa-comment-o"></i>
										<a href="#" style="font-size:12px;">10 comments</a>
									</span>
                <span class="date-type" style="font-size:12px;">
										<i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
									</span>
              </div>
              <div class="blog-text">
                <h4>
                  <a href="blog.html" style="font-size:18px;">Lorem ipsum dolor sit amet</a>
								</h4>
                <p style="font-size:12px;">
                  Lorem ipsum dolor sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.sit amet conse adipis elit Assumenda repud eum veniam optio modi sit explicabo nisi magnam quibusdam.
                </p>
              </div>
              <span>
								<a href="#" class="abJ" style="font-size:12px;">Read more</a>
							</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>-->
  <!-- End Blog -->

  <!-- Faq area start -->
  <div id="userlog" class="faq-area area-padding" style="border-top:1px solid #aeaeae;">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>USER Login</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="faq-details">
            <form id="userlogged_frm">
              <div class="col-md-12">
                <div class="col-md-6" style="text-align:right;font-size:18px;">
                  Username/Email:
                </div>
                <div class="col-md-6">
                  <input id="usernNjj" type="text" name="usernNjj" class="form-control" id="name" placeholder="Your Username" data-rule="minlen:4" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6" style="text-align:right;font-size:18px;padding-top:10px;">
                  Password:
                </div>
                <div class="col-md-6" style="padding-top:10px;">
                  <input id="passWjj" type="password" name="passWjj" class="form-control" id="name" placeholder="Your Password" data-rule="minlen:4" />
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-6" style="padding-top:10px;"></div>
                <div class="col-md-6" style="padding-top:10px;">
                  <div style="padding:5px;font-size:14px;">
                    <font id="btn-loggedin" class="btn btn-success abJ"><b>Login</b></font> <a style="text-decoration:none;" href="#registers" class="page-scroll abJ"><font class="abJ" style="font-size:12px;">Not a user? Register below!</font></a>
                    <br><br><font class="abJ">Forgot password?</font>
                    <br><br><font class="abJ" style="color:blue;">Help</font>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="tab-menu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a href="#p-view-1" role="tab" data-toggle="tab" style="font-size:12px;">Login Policies</a>
              </li>
              <li>
                <a href="#p-view-2" role="tab" data-toggle="tab" style="font-size:12px;">jASSH Account</a>
              </li>
              <li>
                <a href="#p-view-3" role="tab" data-toggle="tab" style="font-size:12px;">Article Publication</a>
              </li>
            </ul>
          </div>
          <div class="tab-content">
            <div class="tab-pane active" id="p-view-1">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Login Policies</h4>
                  <p style="font-size:13px">The jASSH was under the CARSU ICT policy. Approval and activation of your account will be monitored under the supervision of the CARSU ICT personnels.<br><br>If you wish to publish an article directly, just click <a class="faff" style="color:blue;cursor:pointer;" data-toggle="modal" data-target=".bs-submissionDataFinal-modal-lg">here.</a><br><br><font style="color:blue;">For comments and suggestions on jASSH login, you can contact us. We are online!</font></p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-2">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>jASSH Account</h4>
                  <p style="font-size:13px">To grant access to the jASSH system, we require you to fill the registration form below.<br><br>jASSH Services</p>
                  <li style="font-size:13px"> Submit an articles</li>
                  <li style="font-size:13px"> View published articles of other authors</li>
                  <li style="font-size:13px"> Be the most updated one for our events and conferences</li>
                  <li style="font-size:13px"> Benchmark your ideas</li>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-3">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Article Publication</h4>
                  <div class="fox" style="height:150px;overflow:auto;border-top:1px solid #aeaeae;font-size:13px;">
                    <br><h3>FOCUS AND SCOPE &nbsp&nbsp&nbsp<font id="hand1" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    The Annals of Studies in Science and Humanities is a peer-reviewed open-access journal, which publishes quality papers to promote scholarly discussion across a broad range of academic disciplines. It accepts submissions in any area within natural and applied sciences, engineering, mathematics, education and social sciences with main focus on fishery, agri-forestry, minerals and eco-tourism. The journal is in English and published semi-annually both online and print versions.<br><br>
                    <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                    <br><h3>SECTION POLICIES &nbsp&nbsp&nbsp<font id="hand2" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    <h5><b>ARTICLES</b></h5>
                    <i class="fa fa-check-square-o" style="color:green"></i> Open Submissions &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <i class="fa fa-check-square-o" style="color:green"></i> Indexed &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <i class="fa fa-check-square-o" style="color:green"></i> Peer Reviewed
                    <br><h5><b>COMMENTARY</b></h5>
                    This section is for commentary purposes only!<br><br>
                    <i class="fa fa-check-square-o" style="color:green"></i> Open Submissions &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <i class="fa fa-check-square-o" style="color:green"></i> Indexed &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <i class="fa fa-check-square-o" style="color:green"></i> Peer Reviewed<Br><br>
                    <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                    <br><h3>PEER REVIEW PROCESS &nbsp&nbsp&nbsp<font id="hand3" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    Each submitted manuscript is evaluated on the following basis:<br>
                    <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp The originality of its contribution to the field of scholaly publishing;
                    <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp The soundness of its theory and methodology given the topic;
                    <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp The coherence of its analysis;
                    <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp Its ability to communicate to readers (grammar and style).
                    <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp Plagiarism should be at most 5%.<br><br>
                    Normal turn-around time for evaluation of manuscripts is four to six months from the date of receipt.<br><br>
                    <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                    <br><h3>PUBLICATION FREQUENCY &nbsp&nbsp&nbsp<font id="hand4" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    This Journal is published 2 times per year.<br><br>
                    <br><h3>OPEN ACCESS POLICY &nbsp&nbsp&nbsp<font id="hand5" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    This journal provides immediate open access to its content on the principle that making research freely available to the public supports a greater global exchange of knowledge.<br><br>
                    <br><h3>ARCHIVING &nbsp&nbsp&nbsp<font id="hand6" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    This journal utilizes the LOCKSS system to create a distributed archiving system among participating libraries and permits those libraries to create permanent archives of the journal for purposes of preservation and restoration. <a href="https://www.lockss.org/" target="__blank" class="bottomIns" style="color:blue;">More...</a><br><br>
                    <br><h3>ADVERTISING POLICY &nbsp&nbsp&nbsp<font id="hand7" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                    The Journal of Annals of Studies in Science and Humanities accepts online advertising.<br><br>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end Row -->
    </div>
  </div>
  <!-- End Faq Area -->

  <div id="registers" class="about-area area-padding" style="border-top:1px solid #aeaeae">
    <div class="container">
      <div class="row">
        <!-- single-well start-->
        <div id="" style="font-family:calibri;padding:5px;font-size:12px;">
        <div style="padding:5px;">
          <div class="section-headline text-center">
            <h2>Registration for New Journal System users</h2>
          </div>
          <center>
          <font style="font-size:17px">Fill in this form to register with this site.</font><br><br><br>
          <div style="width:80%;">
            <form id="formRegister_ff">
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">ORCID iD:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <input id="RegORCIDiD" class="form-control" type="text" name="RegORCIDiD" placeholder="Required..."><font id="handWarnfirstUserN" style="color:red;display:none;">&nbsp&nbsp&nbsp<i class="fa fa-hand-o-left"></i> Start here...</font>
                  ORCID iDs can only be assigned by the ORCID Registry. You must conform to their standards for expressing ORCID iDs, and include the full URI (eg. http://orcid.org/0000-0002-1825-0097).<br>
                  No ORCID ID?: <a href="https://orcid.org/" style="color:blue;" target="__blank">Create One</a><br>
                  <font id="p005" style="color:red"></font>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">USERNAME:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <input id="RegUsername" type="text" name="RegUsername" class="foc form-control" placeholder="Required...">
                  The username must contain only lowercase letters, numbers, and hyphens/underscores.<br>
                  <font id="p004" style="color:red"></font>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">PASSWORD:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <input id="RegPassW" class="foc form-control" type="password" name="RegPassW"  placeholder="Required...">
                  The password must be at least 6 characters.<br>
                  <font id="p003" style="color:red"></font>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Repeat Password:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <input id="ReTypeRegPassW" class="foc form-control" type="password" name="ReTypeRegPassW"  placeholder="Required...">
                  <font id="p002" style="color:red"></font><br>
                  <font id="p001" style="color:red"></font>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Salutation:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <input type="text" class="foc form-control" name="RegSalute" placeholder="Optional...">
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">First Name:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <input id="RegFirstName" type="text" class="foc form-control" name="RegFirstName" placeholder="Required...">
                  <font id="p006" style="color:red"></font>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Middle Name:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <input type="text" class="foc form-control" name="RegMiddleName" placeholder="If you have...">
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Last Name:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <input type="text" class="foc form-control" name="RegLastName" placeholder="Required...">
                  <font id="p007" style="color:red"></font>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Initials:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <input type="text" class="foc form-control" name="RegInitials" placeholder="Optional...">
                  Joan Alice Smith = JAS
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Gender:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <select id="RegGend" name="RegGend" class="foc form-control" style="cursor: pointer;">
                    <option name="RegGend" value="">Select Gender</option>
                    <option name="RegGend" value="Male">MALE</option>
                    <option name="RegGend" value="Female">FEMALE</option>
                    <option name="RegGend" value="Other">Other</option>
                  </select>
                  <font id="p011" style="color:red"></font>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Affiliation:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <textarea id="RegAffiliation" class="foc form-control" name="RegAffiliation" placeholder="Required..."></textarea>
                  (Your institution, e.g. "Simon Fraser University")<br>
                  <font id="p008" style="color:red"></font>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Email:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <input id="RegEmail" type="text" class="foc form-control" name="RegEmail" placeholder="Required...">
                  <font id="p009" style="color:red"></font>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Confirm Email:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <input id="RegConfEmail" type="text" class="foc form-control" name="RegConfEmail" placeholder="Required...">
                  <font id="p010" style="color:red"></font>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">URL:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <input type="text" class="foc form-control" name="RegURL" placeholder="Optional...">
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Phone:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <input type="text" class="foc form-control" name="RegPhone" placeholder="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Fax:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <input type="text" class="foc form-control" name="RegFax" placeholder="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Mailing Address:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <input type="text" class="foc form-control" name="RegMailAdd" placeholder="">
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Country:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <select id="RegCountry" name="RegCountry" class="foc form-control" style="cursor: pointer;"></select>
                  <font id="p012" style="color:red"></font>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Bio Statement (E.g., department and rank):</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <textarea class="foc form-control" name="RegBioStatement"></textarea>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Confirmation:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <font style="font-size:18px;"><b>Send me a confirmation email</b> including my username and password</font><br>
                  <input type="radio" class="foc" name="SendMeEmail" value="yes" style="width:20px;height:20px;margin-top:1px;cursor:pointer;color:green" checked="checked"><font style="padding:10px;">Yes</font> &nbsp&nbsp
                  <input type="radio" class="foc" name="SendMeEmail" value="no" style="width:20px;height:20px;margin-top:1px;cursor:pointer;color:green"> <font style="padding:10px;">No</font>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Register as:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <font style="font-size:18px;"><b>Reader:</b> Notified by email on publication of an issue of the journal.</font><br>
                  <input type="radio" class="foc" name="RegRegAs" value="yes" style="width:20px;height:20px;margin-top:1px;cursor:pointer;color:green" checked="checked"><font style="padding:10px;">Yes</font> &nbsp&nbsp
                  <input type="radio" class="foc" name="RegRegAs" value="no" style="width:20px;height:20px;margin-top:1px;cursor:pointer;color:green"> <font style="padding:10px;">No</font>
                </div>
              </div>
              <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;">Remarks:</div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <textarea class="foc form-control" name="RegRemarks"></textarea>
                </div>
              </div>
            </form><br><br>

            <div class="col-md-12">
                <div class="col-md-4" style="text-align:right;padding-top:10px;font-size:14px;"></div>
                <div class="col-md-8" style="text-align:left;padding-top:10px;">
                  <font id="submitFormRegister" class="btn btn-success"><b>Register</b></font> Already a user? <a href="#userlog" class="page-scroll hovP"><font class="bottomIns">Login</font></a>

                  <br><br><h4><b>PRIVACY STATEMENT</b></h4>
                  <font style="font-size:16px;">
                    The names and email addresses entered in this journal site will be used exclusively for the stated purposes of this journal only, and will not be made available for any other purpose or to any other party.
                  </font>
                </div>
              </div>
            
          </div>
          <div style="text-align:left;width:50%;">
            
          </div>
        </center>
        </div>
      </div>
        <!-- End col-->
      </div>
    </div>
  </div>

  <!-- Start Suscrive Area -->
  
  <!-- End Suscrive Area -->
  <!-- Start contact Area -->
  <div id="contact" class="contact-area" style="border-top:1px solid #aeaeae;">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <font id="tho1"></font>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <font id="tho2"></font>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <font id="tho3"></font>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <center>
            <h4>PRIVACY STATEMENT</h4>
            <p id="oth44" style="font-size:13px"></p>
          </center>
          <!-- end single footer -->
          <!--<div class="col-md-6 col-sm-6 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>LOCATE US</h4>
                <p style="font-size:16px;">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.
                </p>
                <div class="footer-contacts">
                  <p><span>Tel:</span> +123 456 789</p>
                  <p><span>Email:</span> contact@example.com</p>
                  <p><span>Working Hours:</span> 9am-5pm</p>
                </div>
              </div>
            </div>
          </div>-->
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <center>
                <font style="font-size:12px;"><font class="abJ">VIEW JOURNAL</font> | <font class="abJ">CURRENT ISSUE</font> | <font class="abJ">REGISTER</font></font>
                <div style="font-size:9px;padding-top:10px;">
                  &copy copyright <?php echo date('Y');?><br><font style="font-size:12px;">Caraga State University</font><Br>Online Journal System
                </div>
              </center>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--<div class="navbar-fixed-bottom" style="width:300px;">
    <div style="margin-bottom:0px;">
      <div id="WAh" style="margin-left:10px;color:#22661f;text-shadow:0.5px 0.5px 1px rgba(0, 0, 0, .23);font-size:12px;">
        <b>We are here!</b>
      </div>
      <div id="chattingAreaBody" style="display:none;">
        <div style="margin-left:10px;color:#22661f;text-shadow:0.5px 0.5px 1px rgba(0, 0, 0, .23);font-size:12px;">
          <b>We are online!</b>
        </div>
        <div style="background:rgba(10, 104, 40);width:251px;margin-left:5px;margin-bottom:-8px;padding-bottom:10px;border-right:1px solid #ed9a42;border-left:0.6px solid #ed9a42;border-radius:4px 4px 0 0;box-shadow:0px 0px 7px rgba(0, 0, 0, .33)">
          <div style="padding:5px;border-bottom:1px solid #aeaeae;background:rgba(10, 104, 40);border-radius:4px 4px 0 0;outline: 0;border:0;">
            <font>
              <a href="#"><i class="fa fa-google-plus-square thisICONS1" style="cursor:pointer;font-size:12px;" title="Gmail / Google"></i></a>&nbsp&nbsp
              <a href="#"><i class="fa fa-twitter thisICONS2" style="cursor:pointer;font-size:12px;" title="Twitter"></i></a>&nbsp&nbsp
              <a href="#"><i class="fa fa-youtube thisICONS3" style="cursor:pointer;font-size:12px;" title="Youtube"></i></a>&nbsp&nbsp
              <a href="#"><i class="fa fa-facebook-square thisICONS4" style="cursor:pointer;font-size:12px;" title="Facebook"></i></a> &nbsp&nbsp..
            </font>
            <font class="btn btn-default thisICONS5" style="float:right;margin-right:0px;cursor:pointer;padding:0px;padding-left:8px;padding-right:8px;margin-top:-1px;background:#497c26;color:white;" title="Close">x</font>
          </div>
          <div style="height:300px;padding:5px;border-bottom:1px solid #aeaeae;box-shadow:inset 0px 0px 6px black;">
            <font style="color:white;font-size:25px;">Register</font><br><br>
            <div style="font-size:12px;padding:5px;color:white;"><i>Email:</i></div> <input type="text" name="emailChatt" class="form-control" placeholder="Valid email..." style="padding:2px;font-size:12px;height:26px;padding-left:7px;">
            <div style="font-size:12px;padding:5px;color:white;"><i>Password:</i></div> <input type="text" name="passChatt" class="form-control" placeholder="Password..." style="padding:2px;font-size:12px;height:26px;padding-left:7px;">
            <div style="font-size:12px;padding:5px;color:white;"><i>Confirm Password:</i></div> <input type="text" name="passConfChatt" class="form-control" placeholder="Confirm Password..." style="padding:2px;font-size:12px;height:26px;padding-left:7px;">
              <font class="btn btn-default" style="padding:1px;background:#497c26;padding-left:8px;padding-right:8px;font-size:12px;color:white;float:right;margin-top:20px;">Register Now</font>
          </div>
        </div>
      </div>
      <button id="clickChatt" style="background:rgba(10, 104, 40);color:black;width:250px;font-size:12px;margin-left:5px;margin-bottom:-2px;border-radius:8px 8px 0 0;outline: 0;border:0;padding:5px;border:0.5px solid white;">
        <font style="font-size:16px;color:#ffff;text-shadow:1px 1px 1px rgba(0, 0, 0, .45)">Contact Us ........</font>  <i class="fa fa-weixin" style="position:absolute;font-size:40px;margin-top:-20px;text-shadow:2px 2px 2px rgba(0, 0, 0, .23)"></i>
      </button>
    </div>
  </div>-->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


  <!-- Modal -->
    <!-- Modal -->
  <div class="modal fade bs-history-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
                <div class="modal-header" style="background:#679645;box-shadow:1px 1px 4px rgba(0, 0, 0, .22)">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:white;text-shadow:1px 1px 1px rgba(0, 0, 0, .33)">
                      <i class="fa fa-line-chart" style="color:#f2d21d;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Journal History
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                  The Journal of Annals of Studies in Science and Humanities was started in 2015. The main goal were publication and dissemination of researches in the Caraga region and beyond to a wider audience. 
                </div>
                <div style="background:#bdd8a9;height:5px;"></div>
            </div>
        </div>
    </div>
  <div class="modal fade bs-sponsorSHP-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
                <div class="modal-header" style="background:#679645;box-shadow:1px 1px 4px rgba(0, 0, 0, .22)">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:white;text-shadow:1px 1px 1px rgba(0, 0, 0, .33)">
                      <i class="fa fa-gears" style="color:#f2d21d;font-size:22px;text-shadow:1px 1px 1px black"></i>&nbsp&nbsp Journal Sponsorship
                    </h4>
                </div>
                <div class="modal-body" style="font-size:12px;color:black;padding:12px;">
                  <br><h3>PUBLISHER &nbsp&nbsp&nbsp<font id="sponShand1" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                  The Annals of Studies in Science and Humanities is published by the Caraga State University<br><br>
                  <font style="color:blue" class="bottomIns"><a href="http://www.carsu.edu.ph/" style="text-decoration:none;" target="__blank">Caraga State University</a></font><br><br>
                  <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                  <br><h3>SPONSORS &nbsp&nbsp&nbsp<font id="sponShand2" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                  The Journal of Annals of Studies in Science and Humanities is generously sponsored by the following organizations:<br><br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> <font style="color:blue" class="bottomIns"><a href="http://www.carsu.edu.ph/" style="text-decoration:none;" target="__blank">Caraga State University</a></font><br><br>
                  <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                  <br><h3>SOURCES OF SUPPORT &nbsp&nbsp&nbsp<font id="sponShand3" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                  We would like to thank the following organizations for their support:<br><br>
                  &nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> <font style="color:blue" class="bottomIns"><a href="http://19.46.1.19/?q=ict-center/ict-team" style="text-decoration:none;" target="__blank">Information and Communication Technology Center</a></font><br><br>
                </div>
                <div style="background:#bdd8a9;height:5px;"></div>
            </div>
        </div>
    </div>
    <div class="modal fade bs-submissionDataFinal-modal-lg" tabindex="-1" role="dialog" aria-hidden="true" style="display:none;">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="box-shadow:inset 1px 2px 18px rgba(0, 0, 0, .52)">
                <div class="modal-header" style="background:#679645;box-shadow:1px 1px 4px rgba(0, 0, 0, .22);width:100.2%;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel2" style="color:white;text-shadow:1px 1px 1px rgba(0, 0, 0, .33)">
                        <i class="fa fa-book" style="color:#f2d21d;font-size:22px;text-shadow:1px 1px 1px black;"></i>&nbsp&nbsp 
                        <font id="JASSHPart1Header" style="">Online Submission</font>
                        <font id="JASSHPart2Header" style="display:none;">Online Submission Policies</font>
                        <font id="JASSHPart3Header" style="display:none;">Registration Form</font>
                        <font id="JASSHPart4Header" style="display:none;">Temporary Login Form</font>
                    </h4>
                    <font id="uponClckIfno" style="display:none;font-size:14px;">
                        <br>Upon clicking "<font style="color:darkblue;">I have read and accept the policies</font>", you agreed to the terms and policies of this Journal System for your article submission.
                    </font>
                </div>
                <div class="modal-body scrolldisp" style="font-size:12px;color:black;padding:0px;height:300px;overflow:auto;">
                    <div style="padding:10px;">
                        <div id="zeroPartSumission" style="font-size:25px;display:;">
                            <center>
                                <div style="font-size:35px;padding:30px;line-height:30px;">
                                    New to jASSH online article submission?
                                </div>
                                <div style="padding:30px;border-top:0.5px solid #aeaeae;">
                                    <center>
                                      <font id="clckYesSub" class="btn btn-default" style="background:#679645;color:white;">YES</font> <font id="clckNoSub" class="btn btn-default">NO</font>
                                    </center>
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
                          <div class="col-md-12">
                              <div class="col-md-6">
                                <h4><b>Step 1:</b> Basic Information</h4>
                                <form method="POST" id="journalFFsb-form">
                                    Title:
                                    <textarea id="titleXx" name="titleXx" class="form-control" rows="4" placeholder="Type here... (Required...)"></textarea>
                                    Abstract:
                                    <textarea id="abstractXx" name="abstractXx" class="form-control" rows="7" placeholder="Type here... (Required...)"></textarea>
                                    Keywords:
                                    <textarea id="keywordsXx" name="keywordsXx" class="form-control" rows="3" placeholder="Type here... (Required...)"></textarea>
                                </form>
                              </div>
                              <div class="col-md-6" style="font-size:11px;">
                                  <h4><b>Step 2:</b> File Reference (PDF/pdf format)</h4>
                                  <div style="padding:15px;background:#dddddd;box-shadow:inset 0 0 4px rgba(0, 0, 0, .23)">
                                      <form method="POST" action="" id="uploadfile" enctype="multipart/form-data">
                                          <input type="file" name="file" id="file" style="-webkit-appearance:button;padding:5px;width:100%;cursor:pointer;background:#96d19b" required="">
                                          <button type="submit" class="submit" style="margin-top:5px;">Attach File</button>
                                          <div id="message"></div>
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
                              We are pleased to serve you. After the validation of your account by our administrator, a link will be sent to your E-mail account that will serve as your invitation for the jASSH login. Then, you will be having the priviledge to use and enjoy some features of this Journal System. 
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
                                          <font id="btn-loggedin22" class="btn btn-success" style="padding:4px;padding-left:10px;padding-right:10px;background:#96cdea;"><b>Login</b></font> <font class="abJ">Not a user? Register Now!</font>
                                          <br><br><font class="abJ">Forgot password?</font>
                                          <br><br><font class="abJ" style="color:blue;">Help</font>
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
                            <br><h3>FOCUS AND SCOPE &nbsp&nbsp&nbsp<font id="hand1" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                            The Annals of Studies in Science and Humanities is a peer-reviewed open-access journal, which publishes quality papers to promote scholarly discussion across a broad range of academic disciplines. It accepts submissions in any area within natural and applied sciences, engineering, mathematics, education and social sciences with main focus on fishery, agri-forestry, minerals and eco-tourism. The journal is in English and published semi-annually both online and print versions.<br><br>
                            <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                            <br><h3>SECTION POLICIES &nbsp&nbsp&nbsp<font id="hand2" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                            <h5><b>ARTICLES</b></h5>
                            <i class="fa fa-check-square-o" style="color:green"></i> Open Submissions &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <i class="fa fa-check-square-o" style="color:green"></i> Indexed &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <i class="fa fa-check-square-o" style="color:green"></i> Peer Reviewed
                            <br><h5><b>COMMENTARY</b></h5>
                            This section is for commentary purposes only!<br><br>
                            <i class="fa fa-check-square-o" style="color:green"></i> Open Submissions &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <i class="fa fa-check-square-o" style="color:green"></i> Indexed &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                            <i class="fa fa-check-square-o" style="color:green"></i> Peer Reviewed<Br><br>
                            <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                            <br><h3>PEER REVIEW PROCESS &nbsp&nbsp&nbsp<font id="hand3" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                            Each submitted manuscript is evaluated on the following basis:<br>
                            <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp The originality of its contribution to the field of scholaly publishing;
                            <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp The soundness of its theory and methodology given the topic;
                            <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp The coherence of its analysis;
                            <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp Its ability to communicate to readers (grammar and style).
                            <br>&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-arrow-circle-right"></i> &nbsp&nbsp Plagiarism should be at most 5%.<br><br>
                            Normal turn-around time for evaluation of manuscripts is four to six months from the date of receipt.<br><br>
                            <center><div style="width:80%;border:0.5px solid orange;border-style:dashed;"></div></center>
                            <br><h3>PUBLICATION FREQUENCY &nbsp&nbsp&nbsp<font id="hand4" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                            This Journal is published 2 times per year.<br><br>
                            <br><h3>OPEN ACCESS POLICY &nbsp&nbsp&nbsp<font id="hand5" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                            This journal provides immediate open access to its content on the principle that making research freely available to the public supports a greater global exchange of knowledge.<br><br>
                            <br><h3>ARCHIVING &nbsp&nbsp&nbsp<font id="hand6" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
                            This journal utilizes the LOCKSS system to create a distributed archiving system among participating libraries and permits those libraries to create permanent archives of the journal for purposes of preservation and restoration. <a href="https://www.lockss.org/" target="__blank" class="bottomIns" style="color:blue;">More...</a><br><br>
                            <br><h3>ADVERTISING POLICY &nbsp&nbsp&nbsp<font id="hand7" style="display:none;"><i class="fa fa-hand-o-left" style="color:green;text-shadow:1px 1px 1px orange"></i></font></h3>
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
                        <button id="accpetforSubmissionAR" type="button" class="btn btn-default" style="padding:2px;padding-right:10px;padding-left:10px;background:#679645;color:white;">I have read and accept the policies</button>
                    </div>
                </div>
            </div>
        </div>
    </div>