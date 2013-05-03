<html> 
    <head>
        <title>MensaMeter</title>
<!--        <link rel="stylesheet" href="<?php echo URL ?>public/css/default.css" />-->
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
            
