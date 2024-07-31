<?php


$gallery = get_field('gallery');


$video_url = get_field('video');
get_template_part("template-parts/gallery-section", null, ['photos' => $gallery, "video" => $video_url]);
