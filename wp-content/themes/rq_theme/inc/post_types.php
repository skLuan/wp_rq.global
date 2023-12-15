<?php
require dirname(__FILE__) . '/post_types/faq.php';
require dirname(__FILE__) . '/post_types/assistants.php';
require dirname(__FILE__) . '/post_types/experience.php';
require dirname(__FILE__) . '/post_types/pillars.php';


add_action('init', 'faq_registry');
add_action('init', 'experience_registry');
add_action('init', 'assistants_registry');
add_action('init', 'pillars_registry');

?>