<?php
require_once 'models/Post.php';

class BlogController {
    public function showAllPosts() {
        $posts = Post::getAll();
        include 'views/postsView.php';
    }
}
