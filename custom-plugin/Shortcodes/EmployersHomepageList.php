<?php
add_shortcode('employers_homepage_list', 'employers_homepage_list', 100);

function employers_homepage_list()
{
    $employers = get_posts(array(
        'posts_per_page' => 4,
        'post_type' => 'employers',
        'orderby' => 'date',
        'order'   => 'ASC',
    ));
    $html = '';
    $html .= '<div class="employers-block">';

    foreach ($employers as $employer) {
        $image = get_field('image', $employer->ID);
        $academicDegree = get_field('academic-degree', $employer->ID);
        $name = get_field('name', $employer->ID);
        $surname = get_field('surname', $employer->ID);
        $jobPosition = get_field('job-position', $employer->ID);

        $html .=
            '<div class="single-employer">
            <div class="employer-image">
                <img src="' . $image['url'] . '" />
            </div>
            <div class="employer-desc">
                <div class="employer-personal-data">
                    <div class="employer-degree">' . $academicDegree . '</div>
                    <div class="employer-name">' . $name . '</div>
                    <div class="employer-surname">' . $surname . '</div>
                    </div>
                <div class="employer-position">' . $jobPosition . '</div>
            </div>
        </div>';
    }
    $html .= '</div>';

    wp_enqueue_style('employers-homepage-list-style', plugin_dir_url(__FILE__) . '../assets/css/employers-homepage-list.css');

    return $html;
}
