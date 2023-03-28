<?php

class Project {
    public $name;
    public $tags;
    public $image;
    public $featured;
    public $author_name;

    public function __construct ($props = []){
        $this->name = $props['name'] ?? null;
        $this->tags = $props['tags'] ?? null;
        $this->image = $props['image'] ?? null;
        $this->featured = $props['featured'] ?? null;
        $this->author_name = $props['author_name'] ?? null;
    }
}
?>