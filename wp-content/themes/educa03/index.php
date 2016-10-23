<!DOCTYPE html>
<html lang="es">
   <head>
      <title>Educa03</title>
      <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,100italic,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
      <meta charset="utf-8">
      <meta name="description" content="Asociación para la educación de 0 a 3 años">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <link href="<?php bloginfo('template_directory');?>/bootstrap.css" rel="stylesheet">
      <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
   </head>
<body>
   <!--NAVBAR-->
      <nav class="navbar navbar-default">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#"><img src="<?php bloginfo('template_directory');?>/img/logo.png"></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">
                  <!--<li><a href="#">/ Inici</a></li>
                  <li><a href="#">/ Qui som</a></li>
                  <li><a href="#">/ Contacte</a></li>-->
                  <?php wp_list_pages( '&title_li='); ?>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </div>
         <!-- /.container-fluid -->
      </nav>

   <?php 
         if ( have_posts() ) : while ( have_posts() ) : the_post();
   
            get_template_part( 'content', get_post_format() );
  
         endwhile; endif; 
         ?>
 
   <!--FOOTER-->
   <footer>
      <div class="container text-center">
            <nav class="navbar navbar-default">
               <a href="https://twitter.com/educa03"><i class="fa fa-twitter social-media" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
               <a href="https://www.facebook.com/educa03/"><i class="fa fa-facebook social-media" aria-hidden="true"></i></a>&nbsp;&nbsp;&nbsp;
               <a href="#"><i class="fa fa-envelope-o social-media" aria-hidden="true"></i></a>
               <p>&nbsp;</p>
               <p>Copyright © educa03.org 2014</p>
            </nav>
      </div>

   </footer>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
      <script src="<?php bloginfo('template_directory');?>/js/bootstrap.min.js"></script>
  </body>  
</html>