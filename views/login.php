  <?php echo '<input type="hidden" name="spa" value="2">';?>
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <div class="py-2 bg-light" style="font-size:17px;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-9 d-none d-lg-block">
            <a href="#" class="small mr-3" style="color:#a6a5a5"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a> 
            <a href="#" class="small mr-3" style="color:#a6a5a5"><span class="icon-phone2 mr-2"></span> (085) 341-2296 (loc 224)</a> 
            <a href="#" class="small mr-3" style="color:#a6a5a5"><span class="icon-envelope-o mr-2"></span> jeseg@carsu.edu.ph</a> 
          </div>
          <div class="col-lg-3 text-right">
            <a href="CreateA" class="small mr-3"  style="color:#a6a5a5"><span class="fa fa-check-square-o"></span>&nbsp Create Account</a>
            <a href="lgin" class="small mr-3"  style="color:#a6a5a5"><span class="icon-unlock-alt"></span>&nbsp Login</a>
          </div>
        </div>
      </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner" style="border-bottom:5px solid #84F686;height:117px;">
      <div class="container">
        <div class="row" style="font-size:14px;">
          <div class="col-md-8">
            <a href="<?php echo base_url();?>"><div class="row">
              <div class="col-md-2" style="padding-right:0px;">
                <span class="bb1"><center><img src="../img/jeseg.png" style="width:70%;"></center></span>
                <span class="bb2"><center><img src="../img/jeseg.png" style="width:40px;"></center></span>
              </div>
              <div class="col-md-10" style="padding-left:0px;font-size:19px;font-family:times new roman;line-height:21px">
                <font class="stylss1">
                  <font style="color:#07EB0C;text-shadow:0.3px 0.3px 0.3px black">J o u r n a l &nbsp o f &nbsp E c o s y s t e m &nbsp S c i e n c e s<br>
                a n d &nbsp E c o - G o v e r n a n c e &nbsp ( J E S E G )</font><br>
                <small style="color:#FCC705;">www.jeseg.carsu.edu.ph</small>
                </font>
              </div>
            </div></a>
          </div>
          <div class="col-md-4">
            <table width="100%">
              <tr>
                <td style="width:65%">
                </td>
                <td style="width:35%">
                  <a href="Strt/pubartic"><button class="btn btn-primary" style="padding:9px;background:#6C6969;margin-top:20px;">Search Article &nbsp&nbsp <i class="fa fa-search"></i></button></a>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </header>


    <div class="site-section ftco-subscribe-1 site-blocks-cover pb-4" style="background-image: url('../prof_Boot/images/bg_1.jpg')">
	    <div class="container">
	      <div class="row align-items-end justify-content-center text-center">
	        <div class="col-lg-12">
	          <h2 class="mb-0" style="margin-top:50px;">Login</h2>
	          <p><i class="fa fa-warning"></i>&nbsp&nbsp Access Denied for jESEG</p>
	        </div>
	      </div>
	    </div>
	 </div> 
    

    <div class="custom-breadcrumns border-bottom">
      <div class="container">
        <font style="float:right">
          <a href="#" target="__blank" title="facebook page" style="color:#be2634"><span class="icon-facebook"></span></a> &nbsp&nbsp
          <a href="#" target="__blank" title="twitter page" style="color:#be2634"><span class="icon-twitter"></span></a> &nbsp&nbsp
          <a href="https://sso.carsu.edu.ph/sso/module.php/core/loginuserpassorg.php?AuthState=_93c0c90801fd3838fa855a1bceb9dcfb67a19612d2%3Ahttps%3A%2F%2Fsso.carsu.edu.ph%2Fsso%2Fsaml2%2Fidp%2FSSOService.php%3Fspentityid%3Dgoogle.com%26cookieTime%3D1568690822%26RelayState%3Dhttps%253A%252F%252Fwww.google.com%252Fa%252Fcarsu.edu.ph%252FServiceLogin%253Fservice%253Dmail%2526passive%253Dtrue%2526rm%253Dfalse%2526continue%253Dhttps%25253A%25252F%25252Fmail.google.com%25252Fmail%25252F%2526ss%253D1%2526ltmpl%253Ddefault%2526ltmplcache%253D2%2526emr%253D1%2526osid%253D1" target="__blank" title="Gmail"><span class="icon-envelope-o" style="color:#be2634"></span></a> &nbsp&nbsp
          <a href="https://www.youtube.com" target="__blank" title="Youtube"><span class="icon-youtube" style="color:#be2634"></span></a>
        </font>
        <a href="<?php echo base_url();?>">Home</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">Login</span>
      </div>
    </div>

    <div class="site-section">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-5">
                    <form id="userlogged_frm">
                      <div class="row">
                          <div class="col-md-12 form-group">
                              <label for="username">Username</label>
                              <input type="text" id="username" name="usernNjj" class="form-control form-control-lg" placeholder="Required" autofocus="">
                          </div>
                          <div class="col-md-12 form-group">
                              <label for="pword">Password</label>
                              <input type="password" id="pword" name="passWjj" class="form-control form-control-lg" placeholder="Required">
                          </div>
                      </div>
                    </form>
                    <div class="row">
                        <div class="col-12">
                            <button id="btn-loggedin" type="submit" class="btn btn-primary btn-lg px-5" style="background:#be2634">Log In</button>
                        </div>
                    </div>
                    <div class="row">
                        <div style="font-size:16px;text-align:justify;padding:10px;">
                          <div class="row" style="padding:20px;">
                            No Account? &nbsp&nbsp<a href="<?php echo base_url('Strt/CreateA');?>" class="page-scroll hovP" style="color:#be2634"><font class="bottomIns">Create Account</font></a>
                          </div>
                          <h4><b>PRIVACY STATEMENT</b></h4>
                          <font style="font-size:16px;">
                            The names and email addresses entered in this journal shall be used inclusively for this Journal, and will not be made available for any other purposes.
                          </font>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>


    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-5" style="padding-right:5%">
            <img src="../img/jeseg.png" style="width:100px">
            <p>
              <b>Journal of Ecosystem Science and Eco-Governance</b><Br>
              Ampayon, Butuan City, AdN<br>
              Philippines, 8600
            </p>
          </div>
          <div class="col-lg-2">
            <h3 class="footer-heading"><span>Jassh Links</span></h3>
            <ul class="list-unstyled">
                <li><a href="http://journal.carsu.edu.ph/" target="__blank">Main Page @ journal.carsu.edu.ph</a></li>
                <li><a href="http://journal.carsu.edu.ph/index.php/index/about" target="__blank">About Jassh</a></li>
            </ul>
          </div>
          <div class="col-lg-2">
              <h3 class="footer-heading"><span>Other Links</span></h3>
              <ul class="list-unstyled">
                  <li><a href="#" target="__blank">Other Journals</a></li>
                  <li><a href="#" target="__blank">About JESEG</a></li>
                  <li><a href="#" target="__blank">Downloadables</a></li>
                  <li><a href="#" target="__blank">Create Account</a></li>
                  <li><a href="#" target="__blank">Login</a></li>
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
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
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