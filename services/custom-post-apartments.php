<?php

function apartments_custom_post()
{
  $labels = array(
    'name' => esc_html__('Апартаменти', 'wp-teremok'),
    'singular_name' => esc_html__('Апартаменти', 'wp-teremok'),
    'add_new' => esc_html__('Додати нові апартаменти', 'wp-teremok'),
    'add_new_item' => esc_html__('Додати нові апартаменти', 'wp-teremok'),
    'edit_item' => esc_html__('Редагувати апартаменти', 'wp-teremok'),
    'new_item' => esc_html__('Нові апартаменти', 'wp-teremok'),
    'all_items' => esc_html__('Всі апартаменти', 'wp-teremok'),
    'view_item' => esc_html__('Переглянути апартаменти', 'wp-teremok'),
    'search_items' => esc_html__('Знайти апартаменти', 'wp-teremok'),
    'not_found' => esc_html__('Апартаментів не знайдено', 'wp-teremok'),
    'featured_image' => esc_html__('Зображення', 'wp-teremok'),
    'set_featured_image' => esc_html__('Додати зображення', 'wp-teremok')
  );

  $args = array(
    'labels' => $labels,
    'description' => 'Апартаменти',
    'public' => true,
    'menu_position' => 4,
    'show_in_rest' => true,
    'supports' => array('title'),
    'has_archive' => false,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'rewrite' => array('slug' => 'apartments'),
    'menu_icon' => 'dashicons-admin-multisite',
    'publicly_queryable' => false,
    'query_var' => true,
    'supports' => array( 'title', 'custom-fields' ),
  );

  register_post_type('apartments', $args);
}

add_action('init', 'apartments_custom_post');