<!DOCTYPE html>
<html>
<head>
<title>Eduhub - HTML</title>
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
        <h1>Angular 2 - Grunt and Jasmine</h1>
        <a href="#"><img src="<?php echo base_url()?>assets/images/demo/hor_ads1.jpg" alt=""></a>
       <!--  <figure class="imgr boxholder"><img style="width: 120px;height: 120px;" src="<?php echo base_url()?>assets/images/demo/php2.jpg" alt=""></figure> -->
       <hr>
        <p align="justify">To Start with Angular we need to Install following prerequisites :</p>
        <ul>
          <li>Node.js : 
            To run Angular 2 App we should install Node.js . It maintains all the npm dependencies and libraries requires to run any Angular Apps.
          </li><br>
          <li>NPM : NPM is known as Node Package Manager. It is the world's largest software registry. Developers from every part of the world uses npm to get packages.</li><br>
          <li>Editor : There are many IDE's available like Visual Studio Code or JetBrains etc.</li>
        </ul>
        <hr><br>
        <h1>Install Node.js</h1>
        <p>
          To run Angular 2 App we should install Node.js . It maintains all the npm dependencies and libraries requires to run any Angular Apps.
        </p>
        <hr><br>
        <h1>Install npm</h1>
        <hr><br>
        <h1>Install VS Code</h1>
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