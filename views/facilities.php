  <?php echo '<input type="hidden" name="spa" value="6">';?>
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="py-2 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3" style="color:#a6a5a5"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3" style="color:#a6a5a5"><span class="icon-phone2 mr-2"></span> (085) 341-2296 (loc 224)</a> 
            <a href="#" class="small mr-3" style="color:#a6a5a5"><span class="icon-envelope-o mr-2"></span> jeseg@carsu.edu.ph</a> 
          </div>
          <div class="col-lg-3 text-right">
            <a href="<?php echo base_url('Strt/CreateA');?>" class="small mr-3"  style="color:#a6a5a5"><span class="fa fa-check-square-o"></span>&nbsp Create Account</a>
            <a href="<?php echo base_url('Strt/lgin');?>" class="small mr-3"  style="color:#a6a5a5"><span class="icon-unlock-alt"></span>&nbsp Login</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner" style="border-bottom:1px solid #aeaeae;">
      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo" style="margin-top:5px;">
            <span style="display:inline-block;">
              <center><a href="<?php echo base_url('../');?>"><img src="<?php echo base_url('../img/jeseg.png');?>" style="width:55px;height:55px;margin-top:-42px;border-radius:10%"></a></center>
            </span>
            <span style="font-family:calibri;line-height:0px;display:inline-block;">
              <a href="http://www.carsu.edu.ph" target="__blank" title="Competence, Service and Uprightness">
                <font style="font-size:12px;display:block;color:#065c15;font-family:Goudy Old Style;text-shadow:0px 0px 0.5px black;margin-top:13px;"><font style="font-size:14px;">C</font>ARAGA <font style="font-size:13px;">S</font>TATE <font style="font-size:13px;">U</font>NIVERSITY</font>
              </a>
              <font style="font-size:11px;display:block;margin-top:17px;color:#be2634;font-family:Goudy Old Style;"><font style="color:#ce9005"><b>J O U R N A L</b></font> of </font>
              <font style="font-size:14.5px;display:block;margin-top:17px;color:#be2634;font-family:Goudy Old Style;">ECOSYSTEM SCIENCE </font>
              <font style="font-size:14.5px;display:block;margin-top:17px;color:#be2634;font-family:Goudy Old Style;">and ECO-GOVERNANCE</font>
            </span>
          </div>
          <div class="mr-auto" id="osss">
            <nav id="navmy1" class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu">
                <li>
                  <a href="<?php echo base_url('../');?>" class="text-left"><i class="fa fa-home"></i> Home</a>
                </li>
                <li class="has-children">
                  <a class="text-left" style="color:#be2634">About Us</a>
                  <ul class="dropdown fox" style="">
                    <li><a href="<?php echo base_url('Strt/newsupdate');?>">News and Updates</a></li>
                    <li><a href="<?php echo base_url('Strt/facilities');?>">Building and Facilities</a></li>
                    <li><a href="<?php echo base_url('Strt/Orgstruct');?>">Editorial Board</a></li>
                    <li><a href="<?php echo base_url('Strt/background');?>">Background</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a class="text-left">Research and Innovation</a>
                  <ul class="dropdown fox">
                    <li><a class="text-left" href="<?php echo base_url('Strt/ragenda');?>">Research Agenda</a></li>
                    <li><a class="text-left" href="<?php echo base_url('Strt/pubartic');?>">Published Articles</a></li>
                    <li><a class="text-left" href="http://ovprie.carsu.edu.ph" target="__blank">Visit OVPRIE</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <a class="nav-link text-left">Others</a>
                  <ul class="dropdown">
                    <li><a href="<?php echo base_url('Strt/downloadables');?>">Downloadables</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
          <div class="ml-auto">
            <div id="socialBtn" style="background:green;color:white;padding-right:10px;padding-left:10px;cursor:pointer;">
              <span class="icon-menu h3"></span>
            </div>
            <nav id="navmy2" style="display:none;">
              <div style="padding:3%;border-bottom:1px solid #aeaeae;">
                &nbsp&nbsp<img src="<?php echo base_url('../img/ccislogo2.png');?>" style="width:30px;"> Site Map
                <font id="hideCllokx" style="float:right;margin-right:7%;cursor:pointer;margin-top:-2px;"><b>></b></font>
              </div>
              <ul style="display:inline-grid;margin-left:-8%;margin-top:2%;cursor:pointer;width:100%;">
                <li>
                  <a href="<?php echo base_url('../');?>" class="text-left">Home</a>
                </li>
                <li class="has-children">
                  <div id="click1" style="color:#be2634">About Us <i class="fa fa-sort-down" style="float:right;margin-top:3px;"></i></div>
                  <ul class="dropdown fox" id="drop1" style="display:none;">
                    <li><a href="<?php echo base_url('Strt/newsupdate');?>" style="color:#be2634">News and Updates</a></li>
                    <li><a href="<?php echo base_url('Strt/facilities');?>" style="color:#be2634">Building and Facilities</a></li>
                    <li><a href="<?php echo base_url('Strt/Orgstruct');?>" style="color:#be2634">Editorial Board</a></li>
                    <li><a href="<?php echo base_url('Strt/background');?>" style="color:#be2634">Background</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <div id="click2" style="color:black">Research and Innovation <i class="fa fa-sort-down" style="float:right;margin-top:3px;"></i></div>
                  <ul class="dropdown fox" id="drop2" style="display:none;">
                    <li><a class="text-left" href="<?php echo base_url('Strt/ragenda');?>" style="color:#be2634">Research Agenda</a></li>
                    <li><a class="text-left" href="<?php echo base_url('Strt/pubartic');?>" style="color:#be2634">Published Articles</a></li>
                    <li><a class="text-left" href="http://ovprie.carsu.edu.ph" target="__blank" style="color:#be2634">Visit OVPRIE</a></li>
                  </ul>
                </li>
                <li class="has-children">
                  <div id="click4" class="text-left">Others <i class="fa fa-sort-down" style="float:right;margin-top:3px;"></i></div>
                  <ul class="dropdown" id="drop4" style="display:none;">
                    <li><a href="<?php echo base_url('Strt/downloadables');?>" style="color:#be2634">Downloadables</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </header>


    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('../../prof_Boot/images/bg_1.jpg')">
	    <div class="container">
	      <div class="row align-items-end justify-content-center text-center">
	        <div class="col-lg-12">
	          <h2 class="mb-0" style="margin-top:50px;"><i class="fa fa-bank"></i> Facilities</h2>
	        </div>
	      </div>
	    </div>
	 </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <font style="float:right">
            <a href="https://www.twitter.com/csu" target="__blank" title="twitter page" style="color:#be2634"><span class="icon-twitter"></span></a> &nbsp&nbsp
            <a href="https://sso.carsu.edu.ph/sso/module.php/core/loginuserpassorg.php?AuthState=_93c0c90801fd3838fa855a1bceb9dcfb67a19612d2%3Ahttps%3A%2F%2Fsso.carsu.edu.ph%2Fsso%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Dgoogle.com%26cookieTime%3D1568690822%26RelayState%3Dhttps%253A%252F%252Fwww.google.com%252Fa%252Fcarsu.edu.ph%252FServiceLogin%253Fservice%253Dmail%2526passive%253Dtrue%2526rm%253Dfalse%2526continue%253Dhttps%25253A%25252F%25252Fmail.google.com%25252Fmail%25252F%2526ss%253D1%2526ltmpl%253Ddefault%2526ltmplcache%253D2%2526emr%253D1%2526osid%253D1" target="__blank" title="Gmail"><span class="icon-envelope-o" style="color:#be2634"></span></a> &nbsp&nbsp
            <a href="https://www.youtube.com" target="__blank" title="Youtube"><span class="icon-youtube" style="color:#be2634"></span></a>
          </font>
        <a href="<?php echo base_url();?>">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Facilities</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">

          <div class="row" style="width:100%;">
            <div id="owllxxmnmnmn" style="width:100%;"></div>
          </div>

        </div>
    </div>


    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-5" style="padding-right:5%">
            <img src="<?php echo base_url('../img/jeseg.png');?>" style="width:100px">
            <p>
              <b>journal of ECOSYSTEM SCIENCE AND ECO-GOVERNANCE</b><Br>
              Ampayon, Butuan City, AdN<br>
              Philippines, 8600
            </p>
          </div>
          <div class="col-lg-2">
            <h3 class="footer-heading"><span>Our University</span></h3>
            <ul class="list-unstyled">
                <li><a href="http://carsu.edu.ph">Website</a></li>
                <li><a href="mailto:oas@carsu.edu.ph">Admission</a></li>
                <li><a href="mailto:registrar.csumain@carsu.edu.ph">Registrar</a></li>
                <li><a href="mailto:guidance@carsu.edu.ph">Guidance</a></li>
                <li><a href="https://drive.google.com/file/d/1bPnb-X5LR3HCjmz98a8DnmW-Pyhr-Aaw/view?usp=sharing">FOI Certificate of Compliance</a></li>
                <li><a href="http://carsu.edu.ph/?q=sitemap">Site Map</a></li>
            </ul>
          </div>
          <div class="col-lg-2">
              <h3 class="footer-heading"><span>Other Links</span></h3>
              <ul class="list-unstyled">
                  <li><a href="http://ovprie.carsu.edu.ph" target="__blank">Research & Innovation</a></li>
                  <li><a href="http://ovprie.carsu.edu.ph/index.php/Index/aboutUs" target="__blank">OVPRIE</a></li>
                  <li><a href="http://carsu.edu.ph/?q=content/website-policy-statement">Policy Statement</a></li>
                  <li><a href="http://carsu.edu.ph/?q=page/disclaimer">Disclaimer</a></li>
                  <li><a href="https://mywork.carsu.edu.ph/index.php?q=autologout/logout&destination=mydashboard">My Work</a></li>
              </ul>
          </div>
          <div class="col-lg-3">
              <h3 class="footer-heading"><span>Contact Us</span></h3>
              <span style="color:white;">
                <i class="fa fa-phone"></i> (085) 341-2296 (loc 224)<br>
                <i class="fa fa-envelope-o"></i> jeseg@carsu.edu.ph
              </span>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="copyright">
              <font style="font-size:15px;"><b>Caraga State University</b></font><br>The Journal of Ecosystem Science and Eco-Governance<br><font style="font-size:18px;"><b>--&nbsp J E S E G &nbsp--</b></font>
                <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    

  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>