<?php
function customSidebars()
{
    for ($i = 1; $i < 4; $i++) {
        register_sidebar(
            array(
                'id' => 'sidebar-footer-' . $i,
                'name' => 'Sidebar stopki ' . $i,
                'before_widget' => '<div id="sidebar-footer-' . $i . '" class="widget footer-widget">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widget-title">',
                'after_title' => '</h3>'
            )
        );
    }
}

add_action('widgets_init', 'customSidebars');
