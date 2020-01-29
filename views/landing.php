  <?php echo '<input type="hidden" name="spa" value="1">';?>
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
            <a href="Strt/CreateA" class="small mr-3"  style="color:#a6a5a5"><span class="fa fa-check-square-o"></span>&nbsp Create Account</a>
            <a href="Strt/lgin" class="small mr-3"  style="color:#a6a5a5"><span class="icon-unlock-alt"></span>&nbsp Login</a>
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
                <span class="bb1"><center><img src="img/jeseg.png" style="width:70%;"></center></span>
                <span class="bb2"><center><img src="img/jeseg.png" style="width:40px;"></center></span>
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
    

    <div style="height:102px">.</div>

    <div class="" style="padding:20px;">

      <!--<span id="preSpan" style="position:absolute;font-size:21px;padding-left:7px;padding-right:7px;background:#b6b6ba;color:white;border:0.5px solid white;left:10px;margin-top:15%;cursor:pointer;"><b><</b></span>
      <span id="nextSpan" style="position:absolute;font-size:21px;padding-left:7px;padding-right:7px;background:#b6b6ba;color:white;border:0.5px solid white;right:10px;margin-top:15%;cursor:pointer;"><b>></b></span>-->

      <div class="row">
        <!-- The carousel -->
        <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel" style="width:100%;">
          <!-- Indicators -->
          <ol class="carousel-indicators" style="margin-left:20%;">
            <li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#transition-timer-carousel" data-slide-to="1"></li>
            <li data-target="#transition-timer-carousel" data-slide-to="2"></li>
            <li data-target="#transition-timer-carousel" data-slide-to="3"></li>
            <li data-target="#transition-timer-carousel" data-slide-to="4"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <?php
            $x = 0;
            foreach ($slddes as $xKey) {
              $x++;
              if($x == 1){
                echo '<div class="item active">
                  <img src="nwng/slider/'.$xKey->imgname.'" style="width:100%;">
                  <div class="carousel-caption">
                      <h1>'.$xKey->tagline.'</h1>
                  </div>
                </div>';
              }else{
                echo '<div class="item">
                  <img src="nwng/slider/'.$xKey->imgname.'" style="width:100%;">
                  <div class="carousel-caption">
                      <h1>'.$xKey->tagline.'</h1>
                  </div>
                </div>';
              }
            }
            ?>
              
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
            <span class="fa fa-angle-double-left" style="margin-top:200px;"></span>
          </a>
          <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
            <span class="fa fa-angle-double-right" style="margin-top:200px;"></span>
          </a>
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
      </div>
    </div>


    <div style="height:25px">.</div>

    <div class="news-updates" style="margin-top:-50px;">
      <div class="container">
        <div class="row" style="font-size:16px;">
          <div class="col-md-3" style="">
            <div class="row" style="border:1px solid #aeaeae;padding-left:10px;">
              <div style="padding-top:5px;">
                
              </div>
              <div style="padding:5px;">
                <ul class="monoaa">
                  <div style="padding:10px;">
                    <h2 style="color:#3E3BF5">Journal Menu</h2>
                  </div>
                  <a href="<?php echo base_url();?>"><li style="border-bottom:1px solid #dedede;padding:10px;color:#6B6665;font-weight:bold"> About this Journal</li></a>
                  <a href="Strt/latestnews"><li style="border-bottom:1px solid #dedede;padding:10px;color:#6B6665"> Latest News</li></a>
                  <a href="Strt/pubartic"><li style="border-bottom:1px solid #dedede;padding:10px;color:#6B6665"> Current Issues</li></a>
                  <a href="Strt/EditorialBoard"><li style="border-bottom:1px solid #dedede;padding:10px;color:#6B6665"> Editorial Board</li></a>
                  <a href="Strt/downloadables"><li style="border-bottom:1px solid #dedede;padding:10px;color:#6B6665"> Downloadables</li></a>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-9" style="text-align:justify;">
            <div style="padding:20px;">
              <font style="font-size:35px;font-family:times new roman;color:#065c15">About this Journal</font>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp The Journal of Ecosystem Science and Eco-Governance (JESEG) is an international peer-reviewed journal dedicated to biodiversity, environmental science, ecology, conservation biology, ecosystems services and its contribution to the quality of life. The journal aims to provide recommendations and policies relevant for decision making on landscape ecology, land-use planning and biodiversity conservation for sustainable and equitable eco-governance of these resources.The journal is in English and is published semi-annually (June and December) in both online and print versions.
              <br><br>
              <h5>Email: jeseg@carsu.edu.ph</h5>
              <h5>Phone: (085) 341-2296</h5>
            </div>
          </div>
        </div>

        <div style="height:50px;"></div>

        <div class="row">
          <div class="col-lg-12">

            <div style="text-align:center;">
              <h3 class="mb-3" style="border-bottom:3px solid #84F686;">
                <span style="line-height:65px;"><font style="color:#065c15;">News and Updates</font></span>
              </h3>
            </div>
            <div class="row">
              <?php
              foreach ($event as $xKey) {
                echo '<div class="col-md-6">
                <div class="post-entry-big">
                  <a target="__blank" href="http://'.$xKey->weblink.'" class="img-link"><img src="nwng/lanews/'.$xKey->newsimage.'" alt="Image" class="img-fluid"></a>
                  <div class="post-content" style="margin-top:-30px;">
                    <font style="float:right;color:#939191;font-size:12px;">Date / Time: '.$xKey->date.' <b>|</b> '.$xKey->time.'</font><br>
                    <div style="text-align:justify">
                      <h6 class="post-heading"><a target="__blank" href="http://'.$xKey->weblink.'"><font style="color:#065c15">'.$xKey->newsname.'</font></a></h6>
                      <font style="font-size:16px;">'.$xKey->newsdesc.'</font>
                    </div>
                  </div><br><br>
                </div>
              </div>';
              }
              ?>
              <div class="col-md-6">
                <?php
                $p = 0;
                foreach ($event2 as $xKey) {
                  $p++;
                  if($p > 1){
                    echo '<div class="row post-entry-big" style="padding-top:2%;padding-bottom:2%">
                      <div class="col-md-5" style="padding-right:0px">
                        <a target="__blank" href="http://'.$xKey->weblink.'" class="img-link mr-4"><img src="nwng/lanews/'.$xKey->newsimage.'" alt="Image" class="img-fluid"></a>
                      </div>
                      <div class="col-md-7" style="">
                        <font style="float:right;color:#939191;font-size:12px;">Date / Time: '.$xKey->date.' <b>|</b> '.$xKey->time.'</font><br>
                        <div style="text-align:justify">
                          <h6 class="post-heading"><a target="__blank" href="http://'.$xKey->weblink.'"><font style="color:#065c15">'.$xKey->newsname.'</font></a></h6>
                          <font style="font-size:16px;">'.$xKey->newsdesc.'</font>
                        </div>
                      </div>
                    </div>';
                  }
                }
                ?>
              </div>
            </div>
            <center><a href="<?php echo base_url('Strt/latestnews');?>" style="color:blue;font-size:14px;">View more</a></center>
            <br>
          </div>
        </div>

        <div style="height:50px;"></div>
        
        <div class="row">
          <div class="col-lg-12">

            <div style="text-align:center;">
              <h3 class="mb-3" style="border-bottom:3px solid #84F686;">
                <span style="line-height:65px;"><font style="color:#065c15;">Current Issues</font></span><br>
                <small style="font-size:15px;"><a href="#" style="color:blue;">Create Account</a> or <a href="#" style="color:blue;">Login</a> to Submit an article for review</small>
              </h3>
            </div>
          </div>
        </div>
        <div id="ContentPldodx"></div>
        
        <br><br>
        <center><a href="Strt/pubartic" style="color:blue;font-size:14px;">View more</a></center>

      </div>
    </div>


    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-5" style="padding-right:5%">
            <img src="img/jeseg.png" style="width:100px">
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