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
            $this->getUrl();
        }

        public function getUrl() {
          ehco $_GET['url'];
        }
    }