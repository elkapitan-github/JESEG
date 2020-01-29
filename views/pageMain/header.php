<?php
$page = $_SERVER['PHP_SELF'];
$sec = "4000";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>JESEG | Home Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="<?php echo base_url();?>img/jeseg.png" rel="icon">
  <link rel="stylesheet" href="<?php echo base_url();?>css_bootstrap/netdna.css">
  <link rel="stylesheet" href="<?php echo base_url();?>prof_Boot/fonts/icomoon/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>prof_Boot/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>prof_Boot/css/jquery-ui.css">
  <link rel="stylesheet" href="<?php echo base_url();?>prof_Boot/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>prof_Boot/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>prof_Boot/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>prof_Boot/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>prof_Boot/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="<?php echo base_url();?>prof_Boot/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="<?php echo base_url();?>prof_Boot/css/aos.css">
  <link href="<?php echo base_url();?>prof_Boot/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="<?php echo base_url();?>prof_Boot/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css_bootstrap/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">


  <script src="<?php echo base_url();?>css_bootstrap/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>js/fxx885jjvv1.js"></script>
  <script src="<?php echo base_url();?>js/script.js"></script>
  <script src="<?php echo base_url();?>js/jquery.form.js"></script>
  <script src="<?php echo base_url();?>js/form2.js"></script>
  <style type="text/css">
    .plxx:hover{background:#f0f0f0;cursor:pointer;}
    .myBTN:hover{background:#ebebeb;}
    .fox::-webkit-scrollbar-thumb{border-radius:5px;background:#ffe9c2;box-shadow:0px 0px 2px black;}
    .fox::-webkit-scrollbar{width:6px;background-color:white;padding:2px;}
    .POData{background:white;cursor:pointer;color:black;font-size:14px;}
    .POData:hover{background:#d9d9d9}
    #navmy2{
      position:fixed;background:white;width:280px;top:0;right:-1px;height:100%;overflow:auto;
    }
    #navmy2 ul li{color:black;list-style-type: none;}
    #navmy2 ul li:hover{background:#e1f0e5}
    #navmy2 ul li ul{background:white}
    #navmy2 ul li ul li:hover{background:#e9f0ea}
    #navmy2 ul li ul li{margin-left:-15%;border-bottom:1px solid #aeaeae;}

    #navmy1{display:block}
    #socialBtn{display:none}
    #navmy2{display:none}
    #osss{margin-left:100px;}
    .bb1{display: block}
    .bb2{display:none;}
    .stylss1{display:block}
    #olddbbb{text-align:left}
    @media only screen and (max-width: 5000px) {
      #socialBtn{display:none}
      .bb2{display:none;}
      .bb1{display: block}
      .stylss1{display:block}
      #olddbbb{text-align:left}
    }
    @media only screen and (max-width: 1203px) {
      #socialBtn{display:block}
      .bb2{display:none;}
      .bb1{display: block}
      .stylss1{display:block}
      #olddbbb{text-align:left}
    }
    @media only screen and (max-width: 800px){
      .bb2{display:block}
      .bb1{display:none}
      .stylss1{display:none}
      #olddbbb{text-align:center}
    }
    @media only screen and (max-width: 451px){
      .bb2{display:block}
      .bb1{display:none}
      .stylss1{display:none}
      #olddbbb{text-align:center}
    }
    .monoaa li:hover{
      cursor:pointer;
      color:#D31E1E;
      background:#FFFCF2
    }
    .transition-timer-carousel .carousel-caption {
        background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.1) 4%, rgba(0,0,0,0.5) 32%, rgba(0,0,0,1) 100%); /* FF3.6+ */
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(4%,rgba(0,0,0,0.1)), color-stop(32%,rgba(0,0,0,0.5)), color-stop(100%,rgba(0,0,0,1))); /* Chrome,Safari4+ */
        background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 4%,rgba(0,0,0,0.5) 32%,rgba(0,0,0,1) 100%); /* Chrome10+,Safari5.1+ */
        background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 4%,rgba(0,0,0,0.5) 32%,rgba(0,0,0,1) 100%); /* Opera 11.10+ */
        background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 4%,rgba(0,0,0,0.5) 32%,rgba(0,0,0,1) 100%); /* IE10+ */
        background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.1) 4%,rgba(0,0,0,0.5) 32%,rgba(0,0,0,1) 100%); /* W3C */
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#000000',GradientType=0 ); /* IE6-9 */
      width: 100%;
      left: 0px;
      right: 0px;
      bottom: 0px;
      text-align: left;
      padding-top: 5px;
      padding-left: 15%;
      padding-right: 15%;
    }
    .transition-timer-carousel .carousel-caption .carousel-caption-header {
      margin-top: 10px;
      font-size: 24px;
    }

    @media (min-width: 970px) {
        /* Lower the font size of the carousel caption header so that our caption
        doesn't take up the full image/slide on smaller screens */
      .transition-timer-carousel .carousel-caption .carousel-caption-header {
        font-size: 36px;
      }
    }
    .transition-timer-carousel .carousel-indicators {
      bottom: 0px;
      margin-bottom: 5px;
    }
    .transition-timer-carousel .carousel-control {
      z-index: 11;
    }
    .transition-timer-carousel .transition-timer-carousel-progress-bar {
        height: 5px;
        background-color: #5cb85c;
        width: 0%;
        margin: -5px 0px 0px 0px;
        border: none;
        z-index: 11;
        position: relative;
    }
    .transition-timer-carousel .transition-timer-carousel-progress-bar.animate{
        /* We make the transition time shorter to avoid the slide transitioning
        before the timer bar is "full" - change the 4.25s here to fit your
        carousel's transition time */
        -webkit-transition: width 4.25s linear;
      -moz-transition: width 4.25s linear;
      -o-transition: width 4.25s linear;
      transition: width 4.25s linear;
    }
  </style>
  <script src="<?php echo base_url();?>js/b.m.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {    
    //Events that reset and restart the timer animation when the slides change
    $("#transition-timer-carousel").on("slide.bs.carousel", function(event) {
        //The animate class gets removed so that it jumps straight back to 0%
        $(".transition-timer-carousel-progress-bar", this)
            .removeClass("animate").css("width", "0%");
    }).on("slid.bs.carousel", function(event) {
        //The slide transition finished, so re-add the animate class so that
        //the timer bar takes time to fill up
        $(".transition-timer-carousel-progress-bar", this)
            .addClass("animate").css("width", "100%");
    });
    
    //Kick off the initial slide animation when the document is ready
    $(".transition-timer-carousel-progress-bar", "#transition-timer-carousel")
        .css("width", "100%");
});
  </script>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300" style="font-family:arial;">