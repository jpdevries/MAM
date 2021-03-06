<?php function get_header($baseUrl = './') {?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <base href="<?php echo $baseUrl ?>">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <META NAME="robots" CONTENT="noindex, nofollow">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo 'assets/css/main.min.css?nc=' . time() ?>">
        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
        
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php    
}
?>

<?php
function get_play_controls() { ?>
                <nav class="play-controls" style="display:none"><a class="play-pause-btn"><i class="fa fa-play"></i></a></nav>
<?php } ?>

<?php
function get_footer_markup() { ?>
        <footer>
            <div class="page-wrapper">
                <p>
                    <small>&mdash;&emsp;&emsp;MODX Manager Concept by @jpdevries<!-- mod<strong>more</strong> -->&emsp;&emsp;&mdash;</small>
                </p>
                <p style="opacity:0.678">
                    <a href="#"><i class="fa fa-slack"></i></a>&emsp;&emsp;<a href="#"><i class="fa fa-facebook-square"></i></a>&emsp;&emsp;<a href="#"><i class="fa fa-twitter"></i></a>&emsp;&emsp;<a href="#"><i class="fa fa-envelope" style="font-size:0.92em"></i></a><br>
                    <a href="#"><i class="fa fa-html5"></i></a>&emsp;&emsp;<a href="#"><i class="fa fa-github-square"></i></a>&emsp;&emsp;<a href="#"><i class="fa fa-css3" style="font-size:0.92em"></i></a>
                </p>
            </div>
        </footer>    
<?php } ?>

<?php
function get_footer($baseUrl = '') { ?>
        <?php get_footer_markup(); ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="./assets/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>

        <script src="http://fb.me/react-0.12.2.js"></script>
        <script src="http://fb.me/JSXTransformer-0.12.2.js"></script>
        
        <script src="<?php echo './assets/js/main-min.js?nc=' . time() ?>"></script>
        <script type="text/jsx" src="<?php echo './assets/js/drivers/react/react.js?nc=' . time() ?>"></script>
        
        
        


        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script-->

<?php
}
?>

<?php function get_main_nav() {?>
                <nav id="main-nav">
                    <div class="focus" id="focus">
                        <div class="logo">
                            <a href="index.php#focus" id="dashboard" title="MODX 2.3.3 Dashboard"><img src="assets/img/modx-logo.svg" width="48" height="48"></a>
                        </div>
                        <div class="uber flex-focus">
                            <div class="primary">
                                <div>
                                    <input id="uber-search" type="search" placeholder="Search for anything&hellip;"></input>
                                </div>
                            </div>
                            <div class="secondary"><button><span>Go</span>&nbsp;<i class="fa fa-arrow-right"></i></button></div>
                        </div>
                    </div>
                </nav>    
<?php } ?>

<?php function get_settings_nav() { ?>
                <div class="settings">
                    <nav class="settings-nav">
                        <a href="#" title="Configure your MODX Installation"><i class="fa fa-cog"></i></a>
                        <a href="#" title="Read the Fanstasic Manual"><i class="fa fa-question-circle"></i></a>
                    </nav>
                </div>    
<?php } ?>