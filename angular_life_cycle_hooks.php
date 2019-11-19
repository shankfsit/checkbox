<!DOCTYPE html>
<html>
<head>
<title>TutorsBoard - Angular Compilation</title>
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
        <h1>Angular 2 - Life Cycle Hooks</h1>
        <a href="#"><img src="<?php echo base_url()?>assets/images/demo/hor_ads1.jpg" alt=""></a>
       <!--  <figure class="imgr boxholder"><img style="width: 120px;height: 120px;" src="<?php echo base_url()?>assets/images/demo/php2.jpg" alt=""></figure> -->
       <hr>
        <p align="justify">As we know that Angular is Completely based on Components and Directives and every Conponent in Angular has its lifecycle .The lifecycle of Components is manage by Angular.</p>
        <!-- <p align="justify">
          The Angular Ahead-of-Time (AOT) compiler converts your Angular HTML and TypeScript code into efficient JavaScript code during the build phase before the browser downloads and runs that code. Compiling your application during the build process provides a faster rendering in the browser.
        </p>
        <p>Here are some reasons you might want to use AOT.</p>
        <ul>
          <li>Faster rendering With AOT, the browser downloads a pre-compiled version of the application. The browser loads executable code so it can render the application immediately, without waiting to compile the app first.</li>
          <li>Fewer asynchronous requests The compiler inlines external HTML templates and CSS style sheets within the application JavaScript, eliminating separate ajax requests for those source files.</li>
          <li>Smaller Angular framework download size There's no need to download the Angular compiler if the app is already compiled. The compiler is roughly half of Angular itself, so omitting it dramatically reduces the application payload.</li>
          <li>Detect template errors earlier The AOT compiler detects and reports template binding errors during the build step before users can see them.</li>
          <li>Better security AOT compiles HTML templates and components into JavaScript files long before they are served to the client. With no templates to read and no risky client-side HTML or JavaScript evaluation, there are fewer opportunities for injection attacks.</li>
        </ul>
        <hr><br>
        <h3 style="font-size: 24px;">Choosing a compiler</h3>
        <p>Angular offers two ways to compile your application:</p>
        <ul>
          <li>Just-in-Time (JIT), which compiles your app in the browser at runtime.</li>
          <li>Ahead-of-Time (AOT), which compiles your app at build time.</li>
        </ul> -->
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