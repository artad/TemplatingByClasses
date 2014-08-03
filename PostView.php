<?php

use Entity\Post;

abstract class PostView extends View {

    /**
     *
     * @var Entity\Post 
     */
    protected $post;

    public function post($post) {
        $this->post = $post;
        return $this;
    }

    public function display(Post $post = null) {
        if ($post) {
            $this->post($post);
        }
        $this->check();
        $this->_display();
    }

    public function render(Post $post = null) {
        if ($post) {
            $this->post($post);
        }
        $this->check();
        parent::render();
    }
    
    protected function check() {
        if(!$this->post instanceof Post) {
            throw new Exception('Set Post before display');
        }
    }

}
