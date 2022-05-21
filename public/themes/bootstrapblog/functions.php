<?php

// Ajout du support du titre de la page
add_action("after_setup_theme", function() {
    add_theme_support("title-tag") ;
}) ;

function bootstrapblog_register_scripts()
{
    // Les css
    // Bootstrap
    wp_register_style("bootstrap",   get_template_directory_uri() . "/assets/vendor/bootstrap/css/bootstrap.min.css") ;
    wp_enqueue_style("bootstrap") ;
    // Fontawesome
    wp_register_style("fontawesome",  get_template_directory_uri() . "/assets/vendor/font-awesome/css/font-awesome.min.css") ;
    wp_enqueue_style("fontawesome") ;
    // Fontstatic
    wp_register_style("fontstatic",  get_template_directory_uri() . "/assets/css/fontastic.css") ;
    wp_enqueue_style("fontstatic") ;
    // custom
    wp_register_style("custom",  get_template_directory_uri() . "/assets/css/custom.css") ;
    wp_enqueue_style("custom") ;
    // default
    wp_register_style("default",  get_template_directory_uri() . "/assets/css/style.default.css") ;
    wp_enqueue_style("default") ;
    // Fancy
    wp_register_style("fancy",  get_template_directory_uri() . "/assets/vendor/@fancyapps/fancybox/jquery.fancybox.min.css") ;
    wp_enqueue_style("fancy") ;

    // Les js
    // jquery
    wp_register_script("jquery.min", get_template_directory_uri() . "/assets/vendor/jquery/jquery.min.js") ;
    wp_enqueue_script("jquery.min") ;
    // popper
    wp_register_script("popper.min", get_template_directory_uri() . "/assets/vendor/popper.js/umd/popper.min.js") ;
    wp_enqueue_script("popper.min") ;
    // jquery cookie
    wp_register_script("jquery.cookie", get_template_directory_uri() . "/assets/vendor/jquery.cookie/jquery.cookie.js") ;
    wp_enqueue_script("jquery.cookie") ;
    // jquery fancybox
    wp_register_script("jquery.fancy", get_template_directory_uri() . "/assets/vendor/@fancyapps/fancybox/jquery.fancybox.min.js") ;
    wp_enqueue_script("jquery.fancy") ;
    // front
    wp_register_script("front", get_template_directory_uri() . "/assets/js/front.js") ;
    wp_enqueue_script("front") ;
}

add_action("wp_enqueue_scripts", "bootstrapblog_register_scripts") ;

add_filter("document_title_separator", function() { return "|"; }) ;