<!DOCTYPE html>
<html>
<head>
<title>Eduhub - Angular Package.json File</title>
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
        <h1>Angular 2 - Package.json File</h1>
        <a href="#"><img src="<?php echo base_url()?>assets/images/demo/hor_ads1.jpg" alt=""></a>
       <!--  <figure class="imgr boxholder"><img style="width: 120px;height: 120px;" src="<?php echo base_url()?>assets/images/demo/php2.jpg" alt=""></figure> -->
       <hr>
        <p align="justify">Whenever we creates a new project in Angular by using command ng new project in CLI it creates a <code>package.json</code> file in the root folder of the project which gives the details of the Project like name, version, description etc and with all dependencies. This <code>package.json</code> file is used in all the projects . All the packages installs by the npm is identified in a <code>package.json</code> file.</p>
        <p>The <code>package.json</code> is organised into two categories:</p>
        <ul>
          <li><span><b>Dependencies</b></span> : Dependencies is used for running the Application</li><br>
          <li><span><b>DevDependencies</b></span> : DevDependencies are only required to develop Applications.</li><br>
        </ul>
        <h1>Dependencies</h1>
        <p>The Packages listed in Dependencies section are used for running an Application.</p>
        <p>The dependencies sections contains:</p>
        <ul>
          <li>Angular Packages</li>
          <li>Support Packages</li>
          <li>Polyfill Packages</li>
        </ul>
        <hr><br>
        
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