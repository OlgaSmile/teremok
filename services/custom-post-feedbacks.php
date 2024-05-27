<?php

function feedbacks_custom_post()
{
  $labels = array(
    'name' => esc_html__('Відгуки', 'wp-teremok'),
    'singular_name' => esc_html__('Відгук', 'wp-teremok'),
    'add_new' => esc_html__('Додати новий відгук', 'wp-teremok'),
    'add_new_item' => esc_html__('Додати новий відгук', 'wp-teremok'),
    'edit_item' => esc_html__('Редагувати відгук', 'wp-teremok'),
    'new_item' => esc_html__('Новий відгук', 'wp-teremok'),
    'all_items' => esc_html__('Всі відгуки', 'wp-teremok'),
    'view_item' => esc_html__('Переглянути відгук', 'wp-teremok'),
    'search_items' => esc_html__('Знайти відгук', 'wp-teremok'),
    'not_found' => esc_html__('Відгуків не знайдено', 'wp-teremok'),
    'featured_image' => esc_html__('Зображення', 'wp-teremok'),
    'set_featured_image' => esc_html__('Додати зображення', 'wp-teremok')
  );

  $args = array(
    'labels' => $labels,
    'description' => 'Відгуки',
    'public' => true,
    'menu_position' => 4,
    'show_in_rest' => true,
    'supports' => array('title'),
    'has_archive' => false,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'rewrite' => array('slug' => 'feedbacks'),
    'menu_icon' => 'dashicons-format-status',
    'publicly_queryable' => false,
    'query_var' => true,
  );

  register_post_type('feedbacks', $args);
}

add_action('init', 'feedbacks_custom_post');