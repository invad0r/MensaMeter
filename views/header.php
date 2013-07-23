<!DOCTYPE html>
<html> 
    <head>
        <meta charset="ISO-8859-15">
        <title>Mensa Meter</title>
        <meta name="description" content="">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1.0"> 
        <meta http-equiv="cleartype" content="on">
        
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo URL ?>public/imges/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo URL ?>public/imges/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo URL ?>public/imges/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo URL ?>public/imges/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="<?php echo URL ?>public/imges/touch/apple-touch-icon.png">
        
        <link rel="stylesheet" href="<?php echo URL ?>public/css/vendor/jquery.mobile-1.3.1.min.css" />
        <link rel="stylesheet" href="<?php echo URL ?>public/css/vendor/jquery.mobile.structure-1.3.1.min.css" />
        <link rel="stylesheet" href="<?php echo URL ?>public/css/vendor/jquery.mobile.theme-1.3.1.min.css" />

        
        <script type="text/javascript" src="<?php echo URL ?>public/js/vendor/jquery-1.9.1.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>public/js/vendor/jquery.mobile-1.3.1.min.js"></script>
        <script type="text/javascript" src="<?php echo URL ?>public/js/custom.js"></script>
        <?php
        if (isset($this->js)) { //insider the view now! that's why it isn't $this->view->js !
            foreach ($this->js as $js) {
                echo '<script type="text/javascript" src="' . URL . 'views/' . $js . '"></script>';
            }
        }
        ?>
    </head>
    <body> 

        <?php Session::init(); ?>

        <div id="header" data-role="header">
            <h1>MensaMeter</h1>
        </div>
        <div id="content">

