<?php

// Ajout du support du titre de la page
add_action("after_setup_theme", function() {
    add_theme_support("title-tag") ;
}) ;

add_filter("document_title_separator", function() { return "|"; }) ;