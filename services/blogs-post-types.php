<?php

function register_post_types()
{
    register_post_type(
        'blogs',
        array(
            'label' => 'Blogs',
            'labels' => array(
                'name' => 'Blogs',
                'singular_name' => 'blog',
                'add_new' => 'Add new blog',
                'add_new_item' => 'Add new blog',
                'edit_item' => 'Edit blog',
                'new_item' => 'New blog',
                'view_item' => 'View blog',
                'search_items' => 'Search blogs',
                'not_found' => 'No blogs found',
            ),
            'public' => true,
            'show_in_rest' => false,
            'rewrite' => array('slug' => 'blogs'),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        )
    );
}
