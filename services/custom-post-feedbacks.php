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

// feedback form submit

// AJAX for writing reviews into CPT "Feedbacks
add_action('wp_ajax_do_insert', 'do_insert');
add_action('wp_ajax_nopriv_do_insert', 'do_insert');

function do_insert()
{
  // Перевірка nonce для безпеки, якщо використовуєте
  // check_ajax_referer('feedback_nonce', 'nonce');

  // Отримання та фільтрація даних
  $name = sanitize_text_field($_POST['feedback_name']);
  $housing = sanitize_text_field($_POST['house_number']);
  $description = sanitize_text_field($_POST['feedback_text']);
  $rating = intval($_POST['feedback_astimation']);
  $post_id = wp_insert_post([
    'post_title'  => 'Відгук від ' . $name,
    'post_type'   => 'feedbacks',
    'post_status' => 'draft',
  ]);

  if (!$post_id) {
    wp_send_json(['status' => 'error', 'message' => 'Не вдалося створити відгук.']);
  }

  // Збереження полів ACF
  update_field('feedback_name', $name, $post_id);
  update_field('house_number', $housing, $post_id);
  update_field('feedback_astimation', $rating, $post_id);
  update_field('feedback_text', $description, $post_id);


  // Обробка завантаження фото користувача
  if (!empty($_FILES['feedback_person_photo']['name'])) {
    $user_photo = $_FILES['feedback_person_photo'];
    $upload_user_photo = wp_handle_upload($user_photo, ['test_form' => false]);

    if ($upload_user_photo && !isset($upload_user_photo['error'])) {
      $user_photo_id = wp_insert_attachment([
        'guid'           => $upload_user_photo['url'],
        'post_mime_type' => $upload_user_photo['type'],
        'post_title'     => sanitize_file_name($user_photo['name']),
        'post_content'   => '',
        'post_status'    => 'inherit'
      ], $upload_user_photo['file'], $post_id);

      require_once(ABSPATH . 'wp-admin/includes/image.php');
      $attach_data_user_photo = wp_generate_attachment_metadata($user_photo_id, $upload_user_photo['file']);
      wp_update_attachment_metadata($user_photo_id, $attach_data_user_photo);

      update_field('feedback_person_photo', $user_photo_id, $post_id);
    }
  }

  // Обробка групи зображень
  $image_ids = []; // Масив для збереження зображень
  $image_field_keys = ['image1', 'image2', 'image3', 'image4', 'image5', 'image6', 'image7', 'image8'];

  if (!empty($_FILES['feedback_images']['name'][0])) {
    foreach ($_FILES['feedback_images']['name'] as $key => $image_name) {
      if ($image_name && $key < 8) { // Переконайтеся, що не більше 8 зображень
        $file = [
          'name'     => $_FILES['feedback_images']['name'][$key],
          'type'     => $_FILES['feedback_images']['type'][$key],
          'tmp_name' => $_FILES['feedback_images']['tmp_name'][$key],
          'error'    => $_FILES['feedback_images']['error'][$key],
          'size'     => $_FILES['feedback_images']['size'][$key],
        ];

        $upload_image = wp_handle_upload($file, ['test_form' => false]);

        if ($upload_image && !isset($upload_image['error'])) {
          $image_id = wp_insert_attachment([
            'guid'           => $upload_image['url'],
            'post_mime_type' => $upload_image['type'],
            'post_title'     => sanitize_file_name($file['name']),
            'post_content'   => '',
            'post_status'    => 'inherit'
          ], $upload_image['file'], $post_id);

          require_once(ABSPATH . 'wp-admin/includes/image.php');
          $attach_data_image = wp_generate_attachment_metadata($image_id, $upload_image['file']);
          wp_update_attachment_metadata($image_id, $attach_data_image);

          $image_ids[$image_field_keys[$key]] = $image_id; // Зберігаємо ID в поле групи
        }
      }
    }
    update_field('feedback_add_photos', $image_ids, $post_id); // Оновлюємо групу зображень
  }

  // Повернення відповіді у форматі JSON
  wp_send_json(['status' => 'success', 'message' => 'Дякуємо за ваш відгук!']);
}
