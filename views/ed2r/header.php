<?php
$page = $_SERVER['PHP_SELF'];
$sec = "1000";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>JESEG | home page!</title>
        <link href="<?php echo base_url();?>../img/jeseg.png" rel="icon">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>../css_bootstrap/style.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>../css_bootstrap/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>../css_bootstrap/css/animate.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>../css_bootstrap/fonts/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>../css_bootstrap/css/custom.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>../css_bootstrap/css/icheck/flat/green.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>../css_bootstrap/css/floatexamples.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>../css_bootstrap/cropper.css" rel="stylesheet" />
        <!-- Slider -->
        <script src="<?php echo base_url();?>../css_bootstrap/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>../js/editor.js"></script>
        <script src="<?php echo base_url();?>../js/jquery.form.js"></script>
        <script src="<?php echo base_url();?>../js/md5.js"></script>
        <style type="text/css">
            #foxMEsARea1:focus{
                border: 0 none #FFF;
                overflow: hidden;
                outline:none;
            }
            #foxMEsARea2:focus{
                border: 0 none #FFF;
                overflow: hidden;
                outline:none;
            }
            #foxMEsARea3:focus{
                border: 0 none #FFF;
                overflow: hidden;
                outline:none;
            }
            .topMenu1{background:white;padding:7px;border:2px solid #dddfdd;}
            .topMenu1:hover{background:#e8e8e8;cursor:pointer;}
            #tabData{font-size:12px;border-bottom:1px solid #c0ccd1;background:#eaf0f2;}
            #tabData:hover{cursor:pointer;background:#deebef;border-left:2px solid blue;}
            #xpBtnAccpt{padding:5px;border-radius:50%;background:#eaf0f2;font-size:17px;padding-right:8px;padding-left:8px;outline: 0;}
            #xpBtnAccpt:hover{background:#cbd3d6;cursor:pointer;}
            #annBasedArea{background:white;box-shadow:0px 1px 4px rgba(0, 0, 0, .23);border-radius:5px;padding:10px;}
            #niceInputNoBorder{border:none;padding-bottom:5px;padding-top:5px;width:100%;padding-left:10px;}
            #amazeTextAr:focus{border: 0 none #FFF;overflow: hidden;outline:none;}
            textarea#amazeTextAr{height: 7em;padding:none;}
            textarea{resize:none;}
            body{background-size: width height;background-size: 100% auto;}
            #fox::-webkit-scrollbar-thumb{border-radius:5px;background:#6f918d;box-shadow:0px 0px 2px black;}
            #fox::-webkit-scrollbar{width:6px;background-color:white;padding:2px;} 
            #fox2::-webkit-scrollbar-thumb{border-radius:5px;background:#6f918d;box-shadow:0px 0px 2px black;}
            #fox2::-webkit-scrollbar{width:6px;background-color:white;padding:2px;}
            .fox3::-webkit-scrollbar{width:6px;background-color:white;padding:2px}
            .fox3::-webkit-scrollbar-thumb{border-radius:5px;background:#6f918d;box-shadow:0px 0px 2px black;}
            #displayMyJournalx::-webkit-scrollbar-thumb{border-radius:5px;background:#6f918d;box-shadow:0px 0px 2px black;}
            #displayMyJournalx::-webkit-scrollbar{width:4px;background-color:white;padding:2px;}
            #klikaas::-webkit-scrollbar-thumb{border-radius:5px;background:#6f918d;box-shadow:0px 0px 2px black;}
            #klikaas::-webkit-scrollbar{width:6px;background-color:white;padding:2px;}
            #noteArr{position:absolute;background:#eabf7e;padding:5px;padding-right:10px;padding-left:10px;right:10px;top:60px;border-radius:5px;box-shadow:1px 2.5px 4px rgba(0, 0, 0, .3);border:0.5px solid #dbdbdb;}
            .abJ{cursor:pointer;}
            #crossPrivacy{cursor:pointer;background:white;}
            #crossPrivacy:hover{background:#f7f7f7}
            #clickFphoto{padding:2px;border-radius:5px;background:#dddbdb;width:200px;margin-top:10px;cursor:pointer;}
            #hovArt{font-size:11px;margin-top:-9px;margin-right:10px;background:white;padding:4px;box-shadow:0px 1px 3px rgba(0, 0, 0, .23);padding-left:8px;padding-right:8px;cursor:pointer;border-radius:0px 0px 5px 5px;width:150px;}
            #thsPrt{display:none;border-top:1px solid #aeaeae;padding-top:3px;background:#eeeeee;padding-left:4px;position:absolute;margin-left:-50px;margin-right:10px;border:1px solid white;box-shadow:0px 1px 2px rgba(0, 0, 0, .23)}
            #hovArt:hover #thsPrt{
                display:block;
            }
            #bet1{
                font-size:13px;border-radius:4px;box-shadow:1px 1px 1px rgba(0, 0, 0, .3);background:#a5c1ef;padding:2.5px;
            }
            #bet2{
                font-size:13px;border-radius:4px;box-shadow:1px 1px 1px rgba(0, 0, 0, .3);background:#efdba5;padding:2.5px;
            }
            .abJ{padding:2px;}
            .abJ:hover{background:#aece71;cursor:pointer;}
            #modalTemp{
                display:none;position:absolute;background:#a5c1ef;height:400px;width:34%;top:40px;left:30%;border-radius:5px;
                box-shadow:0px 0px 10px black;
            }
            #modalTemp:hover{cursor:move;}
            /* Media Queries! */
            #pp{ display:inline-block; }
            #tabPoxx{ display:block }
            @media only screen and (max-width: 1200px) {
                #pp{ display:inline-block; }
                #tabPoxx{ display:block }
            }
            @media only screen and (max-width: 391px) {
                #pp{ display:none }
                #tabPoxx{ display:block }
            }
            @media only screen and (max-width: 350px) {
                #pp{ display:none }
                #tabPoxx{ display:none }
            }
        </style>
        <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
<body class="nav-md" style="color:black;font-family:calibri;font-size:14px;background:#012d0b">