<?php

/**
 * Plugin Name: Custom Plugin
 * Description: Custom Plugin
 * Author: Joanna Bełz
 * Version: 1.0.0
 **/

/* HOOKS */
require_once(dirname(__FILE__) . '/Hooks/RegisterPostType.php');
require_once(dirname(__FILE__) . '/Hooks/RegisterSidebars.php');

/* SHORTCODES */
require_once(dirname(__FILE__) . '/Shortcodes/EmployersHomepageList.php');
require_once(dirname(__FILE__) . '/Shortcodes/ContactForm.php');
