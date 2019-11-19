<!DOCTYPE html>
<html>
<head>
<title>TutorsBoard - Angular CLI</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url()?>assets/layout/styles/main.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url()?>assets/layout/styles/mediaqueries.css" rel="stylesheet" type="text/css" media="all">
<!--[if lt IE 9]>
<link href="../layout/styles/ie/ie8.css" rel="stylesheet" type="text/css" media="all">
<script src="../layout/scripts/ie/css3-mediaqueries.min.js"></script>
<script src="../layout/scripts/ie/html5shiv.min.js"></script>
<![endif]-->
</head>
<body class="">
<?php include('header.php');?>
<!-- content -->
<div class="wrapper row3">
  <div id="container">
    <!-- ################################################################################################ -->
    <?php include('sidebars/sidebar_ang.php');?>
    <!-- ################################################################################################ -->
    <div class="one_half">
      <section class="clear">
        <h1>Angular 2 - Command Line Interface</h1>
        <a href="#"><img src="<?php echo base_url()?>assets/images/demo/hor_ads1.jpg" alt=""></a>
       <!--  <figure class="imgr boxholder"><img style="width: 120px;height: 120px;" src="<?php echo base_url()?>assets/images/demo/php2.jpg" alt=""></figure> -->
       <hr>
        <p align="justify"><b>Command Line Interface ( CLI )</b> tool is used to create and maintain Angular applications.You can use the tool directly in a command shell, or indirectly through an interactive UI such as Angular Console.</p>
        
        <hr><br>
        <h3 style="font-size: 24px;">Installing Angular CLI</h3>
        <p>Install the CLI using the npm package manager:</p>
        <section class="calltoaction opt3 clear" style="background-color: #000000b0;">
      <div class="three_quarter first" style="height: 0px;margin-top: -10px;">
        <p style="color: white;margin-left: -15px;"><b><span style="font-family: SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;">C:/&gt;</b><code> npm install -g @angular/cli</code></span></p>
      </div>
      </section>
      </section>

    </div>

    <!-- ################################################################################################ -->
    <div id="sidebar_2" class="sidebar one_quarter">
      <aside class="clear">
        <!-- ########################################################################################## -->
        
        <section class="clear">
          <ul class="nospace">
            <li><a href="#"><img src="<?php echo base_url()?>assets/images/demo/vertical_ads1.jpg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo base_url()?>assets/images/demo/vertical_ads2.gif" alt=""></a></li>
          </ul>
        </section>
        <!-- /section -->
        <!-- ########################################################################################## -->
      </aside>
    </div>
    <!-- ################################################################################################ -->
    <div class="clear"></div>
  </div>
</div>
<!-- Footer -->
<?php include('footer.php')?>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="https://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
<script>window.jQuery || document.write('<script src="../layout/scripts/jquery-latest.min.js"><\/script>\
<script src="../layout/scripts/jquery-ui.min.js"><\/script>')</script>
<script>jQuery(document).ready(function($){ $('img').removeAttr('width height'); });</script>
<script src="../layout/scripts/jquery-mobilemenu.min.js"></script>
<script src="../layout/scripts/custom.js"></script>
</body>
</html>