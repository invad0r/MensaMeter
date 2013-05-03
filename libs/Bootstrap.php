<?php

class Bootstrap {

    function __construct() {
        //if url is set url will be returned otherwise it's just null
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, "/");
        // to stop trail back to diffrent directory in URL with: "%0../..."
        $url = filter_var($url, FILTER_SANITIZE_URL); 
        $url = explode("/", $url);
        //print_r($url);


        if (empty($url[0])) {
            require 'controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false; //so the rest of the code doesn't get executed
        }

        $file = 'controllers/' . $url[0] . '.php';
        
        // controller name should be configured in a metadata
        // in case the directory gets changed
        if (file_exists($file)) {
            require $file;
        } else {
            //throw new Exception("The file $file does not exist");
            $this->error();
        }

        $controller = new $url[0]; // ????????????????????????????
        $controller->loadModel($url[0]);

        //calling methods
        if (isset($url[2])) {
            if(method_exists($controller, $url[1])){
                $controller->{$url[1]}($url[2]);
            }else{
                $this->error();
            }

            // same as $controller->function();
        } else {
            if (isset($url[1])) {
                if(method_exists($controller, $url[1])){
                    $controller->{$url[1]}();
                // same as $controller->function();
                }else{
                    $this->error();
                }  
            } else {
                $controller->index();
            }
        }
    }
    
    function error(){
        require 'controllers/error.php';
        $controller = new Error();
        $controller->index();
        return false; //so it stops doing stuff
    }

}

