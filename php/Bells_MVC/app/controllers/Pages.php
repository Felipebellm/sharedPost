<?php
    class Pages extends Controller {
        public function __construct() {
            // echo 'Pages loaded';
        }

        public function index() {
           $this->view('pages/index', ['title' => 'welcome']);
        }

        public function about() {
           $this->view('pages/about');
            
        }
    }