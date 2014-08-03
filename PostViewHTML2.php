<?php

class PostViewHTML2 extends PostView {

    protected function _display() {
        //HTML
        ?>
        <ul class="Post">
            <li class="Post__heading"><?= $this->post->getHeading() ?></li>
            <ul class="Post__body">
                <li><?= $this->post->getBody() ?></li>
            </ul>
        </ul>
        <?php
        //--/HTML
    }

}
