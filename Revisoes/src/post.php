<?php namespace Revisoes;

    class Post {
        public $id;
        public $title;
        public $body;

        function formatPost(array $data) : void {
            $this->id = $data["id"];
            $this->title = $data["title"];
            $this->body = $data["body"];
        }
    }

?>