<?php
function customPostType()
{
    $employers_labels = array(
        'name'               => 'Pracownicy',
        'singular_name'      => 'Pracownik',
        'add_new'            => 'Dodaj nowego',
        'add_new_item'       => 'Dodaj nowego pracownika',
        'edit_item'          => 'Edytuj pracownika',
        'new_item'           => 'Nowy pracownik',
        'all_items'          => 'Wszyscy pracownicy',
        'view_item'          => 'Wyświetl pracownika',
        'search_items'       => 'Wyszukaj pracownika',
        'not_found'          => 'Nie znaleziono pracowników',
        'not_found_in_trash' => 'Brak pracowników w koszu',
        'menu_name'          => 'Pracownicy'
    );
    $employers = array(
        'labels'        => $employers_labels,
        'public'        => true,
        'supports'      => array('title'),
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-businessperson',
    );
    register_post_type('employers', $employers);

    $form_labels = array(
        'name'               => 'Formularz kontaktowy',
        'singular_name'      => 'Zapytanie',
        'add_new'            => 'Dodaj nowy',
        'add_new_item'       => 'Dodaj nowe zapytanie',
        'edit_item'          => 'Edytuj zapytanie',
        'new_item'           => 'Nowe zapytanie',
        'all_items'          => 'Wszystkie zapytania',
        'view_item'          => 'Wyświetl zapytanie',
        'search_items'       => 'Wyszukaj zapytanie',
        'not_found'          => 'Nie znaleziono zapytań',
        'not_found_in_trash' => 'Brak zapytań w koszu',
        'menu_name'          => 'Formularz kontaktowy'
    );
    $form = array(
        'labels'        => $form_labels,
        'public'        => true,
        'supports'      => array('title'),
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-email-alt',
    );
    register_post_type('contact-form', $form);
}
add_action('init', 'customPostType');
