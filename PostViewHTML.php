<?php

class PostViewHTML extends PostView {

    protected function _display() {
        //HTML
        ?>
        <div class="Post">
            <h2 class="Post__heading"><?= $this->post->getHeading() ?></h2>
            <p class="Post__body">
                <?= $this->post->getBody() ?>
            </p>
        </div>
        <?php
        //--/HTML
    }

}
