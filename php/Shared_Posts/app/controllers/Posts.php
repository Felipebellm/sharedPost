<?php
    class Posts extends Controller {
        public function __construct(){
            if(!isLoggedIn()) {
                redirect('users/login');
            }

            $this->postModel = $this->model('Post');
        }
        public function index() {
            //GET posts
            $posts = $this->postModel->getPosts();

            $data = [
                'posts' => $posts
            ];

            $this->view('posts/index', $data);
        }
    }