<?php
    /**
     * App Core Class
     * Creates URL & loads core controoller
     * URL FORMAT - /controller/method/params
     */
    class Core {
        protected $currentController = 'Pages';
        protected $currentMethod = 'index';
        protected $params = [];

        public function __construct() {
            // print_r($this->getUrl());
            $url = $this->getUrl();
            // var_dump( $url );

            //Look in controllers for fist value
            if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
                // if exists, set as controller
                $this->currentController =ucwords($url[0]);

                // Unset 0 index
                unset($url[0]);
            }

            // Requirre the controller
            require_once '../app/controllers/' . $this->currentController .'.php';

            // Instantiate controller class
            $this->currentController = new $this->currentController;

            // CHeck for the second part of the URL
            if(isset($url[1])){
                //check to see if method exists in controller
                if(method_exists($this->currentController, $url[1])) {
                    $this->currentMethod = $url[1];

                    // Unset 0 index
                    unset($url[1]);
                }
            }

            // Get params
            $this->params = $url ? array_values($url) : [];

            // call a callback with array of params
            call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

        }

        public function getUrl() {
            // echo $_GET['url'];
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');     
                $url = filter_var($url, FILTER_SANITIZE_URL); 
                $url = explode('/', $url);  
                return $url;
            }

            return ['pages'];

        }
    }