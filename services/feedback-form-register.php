<?php add_action('acf/init', 'my_acf_form_init');
function my_acf_form_init() {

    // Check function exists.
    if( function_exists('acf_register_form') ) {

        // Register form.
        acf_register_form(array(
            'id'       => 'new-feedback',
            'post_id'  => 'new_post',
            'new_post' => array(
                'post_type'   => 'feedbacks',
                'post_status' => 'draft'
            ),
            'field_groups' => ['group_665628f09f158'],
            'updated_message' => false,
            'submit_value'  => __('Залишити відгук')
        ));
    }
}