<?php
    class Pages extends Controller {
        private $postModel;
        public function __construct() {
           
        }

        public function index() {

         $data = [
            "title"=> "Shared Posts",
            "description"=> "Simple social network built on the Bells MVC PHP Framework",
         ];
           $this->view('pages/index', $data);
        }

        public function about() {

         $data = [
            "title"=> "About Us",
            "description"=> "App to share posts wit other users",
         ];
           $this->view('pages/about', $data);
            
        }
    }