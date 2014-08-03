<?php

namespace Entity;

class Blog {

    protected $name;
    protected $posts = array();

    public function getName() {
        return $this->name;
    }

    public function getPosts() {
        return $this->posts;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function addPost(Post $post) {
        $this->posts[] = $post;
        return $this;
    }

}
