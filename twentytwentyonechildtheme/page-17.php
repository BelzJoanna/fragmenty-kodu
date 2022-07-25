<?php

/**
 * Template: Strona główna
 *
 */

get_header();

?>
<div class="jb-home-page-template">
    <div id="home" class="jb-header-banner">
        <div class="jb-header-left-section">
            <img src="<?= get_home_url() ?>/wp-content/uploads/2022/06/zdjecie.png" />
        </div>
        <div class="jb-header-right-section">
            <div class="jb-header-icon-section">
                <img class="jb-header-icon" src="<?= get_home_url() ?>/wp-content/uploads/2022/06/jb-bialy-1.svg" />
            </div>
            <h1 class="jb-header-title">Joanna Bełz</h1>
            <h2 class="bs-header-subtitle">Web Developer</h2>
        </div>
    </div>
    <div id="o-mnie" class="jb-section-about-me">
        <div>
            <h3>Kilka słów o mnie</h3>
            <div class="jb-desc">
                <p>Cześć! Mam na imię Asia.</p>
                <p>Jestem absolwentką Politechniki Rzeszowskiej na kierunki Informatyka, gdzie zdobyłam tytuł inżyniera. Aktualnie uczęszczam na prywatnej uczelni WSIiZ, gdzie podjęłam studia II stopnia na kierunku Grafika Komputerowa w mediach społecznościowych.</p>
                <p>Moja przygoda z programowaniem zaczęła się 4 lata temu od tworzenia niekomercyjnych projektów opartych na CMS WordPress. Od prawie 3 lat pracuję w firmach informatycznych, gdzie rozwijam swoje umiejętności pod kontem wdrażania nowych systemów, utrzymywania już zrealizowanych oraz oprogramowywanie własnych rozwiązań. Moja kariera od początku wiąże się z pracą w oparciu o system WordPress, a od lutego tego roku przeszłam do zespołu programistycznego. Obecnie zajmuję się programowaniem zarówno Backend jak i Frontend, a razem z zespołem tworzę dedykowane oprogramowanie dla instytucji publicznych.</p>
                <p>W wolnym czasie najchętniej zatracam się w świecie książek, interesuję się również rysunkiem i grafiką komputerową oraz rękodziełem.</p>
            </div>
        </div>
    </div>
    <div id="umiejetnosci" class="js-section-skills">
        <div>
            <h3>Moje umiejętności</h3>
            <div class="jb-skills">
                <?php $skills = get_posts(array(
                    'numberposts' => -1,
                    'post_type'   => 'skills'
                ));
                foreach ($skills as $skill) {
                    echo '<div class="jb-single-skill">';
                    echo '<img src="' . get_the_post_thumbnail_url($skill->ID) . '" />';
                    echo '<span>' . get_the_title($skill->ID) . '</span>';
                    echo '<p>' . $skill->post_content . '</p>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </div>
</div>
<?php

get_footer();
