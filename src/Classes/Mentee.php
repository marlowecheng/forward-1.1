<?php 

class Mentee {
    public $name;
    public $image_url;
    public $user_bio;
    public $target_areas;

    public function __construct($props = []){
        $this->name = $props['name'] ?? null;
        $this->image_url = $props['image_url'] ?? null;
        $this->user_bio = $props['user_bio'] ?? null;
        $this->target_areas = $props['target_areas'] ?? null;
    }

}

?>