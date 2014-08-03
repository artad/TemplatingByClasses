<?php

namespace Entity;

class Post {

    protected $heading;
    protected $body;

    public function getHeading() {
        return $this->heading;
    }

    public function getBody() {
        return $this->body;
    }

    public function setHeading($heading) {
        $this->heading = $heading;
        return $this;
    }

    public function setBody($body) {
        $this->body = $body;
        return $this;
    }

}
