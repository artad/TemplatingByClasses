<?php

class BlogViewHTML extends BlogView {

    protected function _display() {
        //HTML
        ?>
        <div class="Blog">
            <h1><?= $this->blog->getName() ?></h1>
            <div class="Blog__posts">
                <?php $this->displayPosts(); ?>
            </div>
        </div>
        <?php
        //-/HTML
    }

}
