<?php

function detalies_custom_post()
{
  $labels = array(
    'name' => esc_html__('Заяви на деталі', 'wp-teremok'),
    'singular_name' => esc_html__('Заява', 'wp-teremok'),
    'add_new' => esc_html__('Додати нову заяву', 'wp-teremok'),
    'add_new_item' => esc_html__('Додати нову заяву', 'wp-teremok'),
    'edit_item' => esc_html__('Редагувати заяву', 'wp-teremok'),
    'new_item' => esc_html__('Нова заява', 'wp-teremok'),
    'all_items' => esc_html__('Всі заяви', 'wp-teremok'),
    'view_item' => esc_html__('Переглянути заяву', 'wp-teremok'),
    'search_items' => esc_html__('Знайти заяву', 'wp-teremok'),
    'not_found' => esc_html__('Заяву не знайдено', 'wp-teremok'),
  );

  $args = array(
    'labels' => $labels,
    'description' => 'Заявки на деталі',
    'public' => true,
    'menu_position' => 4,
    'show_in_rest' => true,
    'supports' => array('title'),
    'has_archive' => false,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'rewrite' => array('slug' => 'details'),
    'menu_icon' => 'dashicons-format-status',
    'publicly_queryable' => false,
    'query_var' => true,
  );

  register_post_type('detalies', $args);
}

add_action('init', 'detalies_custom_post');


function do_insert_detalies()
{
  // Ensure the request is via POST
  if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['text'])) {
    $name = sanitize_text_field($_POST['name']);
    $phone = sanitize_text_field($_POST['phone']);
    $description = sanitize_text_field($_POST['text']);

    $post_id = wp_insert_post([
      'post_title'  => 'Заява на перегляд сторінки від ' . $name,
      'post_type'   => 'detalies',
      'post_status' => 'draft',
    ]);

    if (!$post_id) {
      wp_send_json_error(['message' => 'Не вдалося створити відгук.']);
    }

    // Save ACF fields
    update_field('form_detalies_name', $name, $post_id);
    update_field('form_detalies_phone', $phone, $post_id);
    update_field('form_detalies_text', $description, $post_id);

    // Send a success response
    wp_send_json_success(['message' => 'Дякуємо за ваш відгук!']);
  } else {
    // If required fields are missing
    wp_send_json_error(['message' => 'Некоректні дані.']);
  }
}
add_action('wp_ajax_do_insert_detalies', 'do_insert_detalies');
add_action('wp_ajax_nopriv_do_insert_detalies', 'do_insert_detalies');
