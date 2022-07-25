<?php
function contact_form()
{
    wp_enqueue_style('contact-form-style', plugin_dir_url(__FILE__) . '../assets/css/contact-form.css');
    ob_start();
    ob_start();
    acf_form(array(
        'post_id'       => 'new_post',
        'new_post'      => array(
            'field_groups'  => 'group_62c6daa288eb6',
            'post_type'     => 'contact-form',
            'post_status'   => 'pending',
            'post_title'    => 'Zapytanie',
        ),
        'updated_message' => 'Dziękujemy za przesłanie wiadomości',
        'return'        => '?updated=true',
        'submit_value'  => 'Wyślij wiadomość'
    ));

    $html = ob_get_contents();
    ob_end_clean();
    return $html;
}

add_shortcode('contact_form', 'contact_form');
