<?php
require_once 'models/Post.php';
require_once 'vendor/autoload.php'; // підключає Composer-бібліотеки


class BlogController {
    public function showAllPosts() {
        $posts = Post::getAll();

        if (isset($_GET['query'])) {
            $posts = Post::search($_GET['query']);
        }

        $parsedown = new Parsedown();
        include 'views/postsView.php';
    }
}
