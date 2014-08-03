<?php

include 'Entity\Blog.php';
include 'Entity\Post.php';
include 'View.php';
include 'BlogView.php';
include 'BlogViewHTML.php';
include 'PostView.php';
include 'PostViewHTML.php';
include 'PostViewHTML2.php';

$blog = new Entity\Blog;
$blog->setName('Главный Блог');

$post_1 = new \Entity\Post;
$post_1->setHeading('Первый пост')->setBody('Текст первого поста');

$post_2 = new \Entity\Post;
$post_2->setHeading('Второй пост')->setBody('Текст второго поста');

$blog->addPost($post_1)->addPost($post_2);

$postView = new PostViewHTML();
$blogView = new BlogViewHTML($postView);
$blogView->display($blog);


$postView = new PostViewHTML2();
$blogView->setPostView($postView);
$blogView->display($blog);


