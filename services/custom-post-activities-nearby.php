<?php

function activities_custom_post()
{
  $labels = array(
    'name' => esc_html__('Активності поруч', 'wp-teremok'),
    'singular_name' => esc_html__('Ативність', 'wp-teremok'),
    'add_new' => esc_html__('Додати нову активність', 'wp-teremok'),
    'add_new_item' => esc_html__('Додати нові активності', 'wp-teremok'),
    'edit_item' => esc_html__('Редагувати активність', 'wp-teremok'),
    'new_item' => esc_html__('Нова активність', 'wp-teremok'),
    'all_items' => esc_html__('Всі активності', 'wp-teremok'),
    'view_item' => esc_html__('Переглянути активність', 'wp-teremok'),
    'search_items' => esc_html__('Знайти активність', 'wp-teremok'),
    'not_found' => esc_html__('Активності не знайдено', 'wp-teremok'),
    'featured_image' => esc_html__('Зображення', 'wp-teremok'),
    'set_featured_image' => esc_html__('Додати зображення', 'wp-teremok')
  );

  $args = array(
    'labels' => $labels,
    'description' => 'Активності',
    'public' => true,
    'menu_position' => 4,
    'show_in_rest' => true,
    'supports' => array('title'),
    'has_archive' => false,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'rewrite' => array('slug' => 'activities '),
    'menu_icon' => 'dashicons-media-spreadsheet',
    'publicly_queryable' => false,
    'query_var' => true,
    'supports' => array('title', 'custom-fields'),
  );

  register_post_type('activities', $args);
}

add_action('init', 'activities_custom_post');
