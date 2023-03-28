<?php

class Mentor {

    public $name;
    public $image_url;
    public $user_bio;
    public $job_title;
    public $specialization;

    public function __construct($props = []) {
        $this->name = $props['name'] ?? null;
        $this->image_url = $props['image_url'] ?? null;
        $this->user_bio = $props['user_bio'] ?? null;
        $this->job_title = $props['job_title'] ?? null;
        $this->specialization = $props['specialization'] ?? null;
    }
    
}
?>
