<?php

use Entity\Blog;

abstract class BlogView extends View {

    protected $postView;
    
    /**
     *
     * @var Entity\Blog;
     */
    protected $blog;

    public function __construct(View $postView) {
        $this->setPostView($postView);
    }
    
    public function setPostView(View $postView) {
        $this->postView = $postView;
    }

    public function blog(Blog $blog) {
        $this->blog = $blog;
    }

    public function display(Blog $blog = null) {
        if ($blog) {
            $this->blog($blog);
        }
        $this->check();
        parent::display();
    }

    public function render(Blog $blog = null) {
        if ($blog) {
            $this->blog($blog);
        }
        $this->check();
        parent::render();
    }

    public function displayPosts() {
        $posts = $this->blog->getPosts();
        foreach ($posts as $post) {
            $this->postView->display($post);
        }
    }

    protected function check() {
        if (!$this->blog instanceof Blog) {
            throw new Exception('Set Blog before display');
        }
    }

}
