<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Simple Science</title>
        <meta name="description" content="A simple periodic table">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!-- external styles -->
        <link rel="stylesheet" href="css/external/normalize.css">
        <link rel="stylesheet" href="css/external/html5boilerplate.css">
	    <link rel="stylesheet" href="css/external/jquery/jquery-ui.min.css">
	    <link rel="stylesheet" href="css/external/jquery/jquery-ui.structure.min.css">
	    <link rel="stylesheet" href="css/external/jquery/jquery-ui.theme.min.css">

        <!-- custom styles -->
        <link rel="stylesheet" href="css/build/master.min.css">

        <?php include "db_config.php";?>
    </head>
    <header id="header">
        <h1 id="title">Cognimus</h1>
        <p id="tagline">forget the textbook</p>
    </header><!-- /header -->
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="content ptable">
            <?php include "constructtable.php";?>
            <div class="element-overlay" data-moved="false">
                <div class="element-overlay-toolbar">
                    <div class="element-overlay-dismiss">
                        close
                    </div>
                </div>
                <div class="element-overlay-content">
                    <!-- 
                    Data for this element is pulled from overlaydata.php 
                    when the user clicks an element in the table.
                    function is defined in main.js
                    -->
                </div>
            </div>
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/build/master.min.js"></script>
		<script src="js/vendor/jquery.js"></script>
		<script src="js/vendor/jquery-ui.min.js"></script>

        <!-- 
        Google Analytics: change UA-XXXXX-X to be your site's ID.
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        -->
    </body>
</html>
