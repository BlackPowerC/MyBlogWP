<?php
// Author : jordy <jordy.fatigba@theopentrade.com>
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <?php wp_head() ; ?>
    <!--    <link rel="stylesheet" href="">-->
    </head>
    <body>
        <header class="header">
            <!-- Main Navbar-->
            <nav class="navbar navbar-expand-lg">
                <?php get_search_form() ; ?>
                <div class="container">
                    <!-- Navbar Brand -->
                    <div class="navbar-header d-flex align-items-center justify-content-between">
                        <!-- Navbar Brand -->
                        <a href="index.html" class="navbar-brand">
                            <?php wp_title() ; ?>
                        </a>
                        <!-- Toggle Button-->
                        <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
                    </div>
                    <!-- Navbar Menu -->
                    <div id="navbarcollapse" class="collapse navbar-collapse">
                        <?php wp_nav_menu([
                                "theme_locattion" => "header",
                                "container" => "ul",
                                "menu_class" => "navbar-nav ml-auto"
                        ]) ; ?>
                        <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
                        <ul class="langs navbar-text"><a href="#" class="active">EN</a><span>           </span><a href="#">ES</a></ul>
                    </div>
                </div>
            </nav>
        </header>
