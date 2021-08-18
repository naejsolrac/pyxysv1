<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
    
</head>
<body>

<header class="mainNav">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php echo \App\ThemeConfig::option('logo_claro'); ?>" class="logo logo-white" width="119" height="24" alt="logotipo da pyxys">
                    <img src="<?php echo \App\ThemeConfig::option('logo_escuro') ?>" class="logo logo-dark" width="119" height="24" alt="logotipo da pyxys">
                </a>
            </div>
        </div>
        <nav>
            <button class="navButton" onclick="alert('abrir nav');">
                <svg width="27" height="17" viewBox="0 0 27 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.7192 7.41553H0V9.39753H26.7192V7.41553Z" fill="#D7D7D7"/>
                    <path d="M26.7192 14.9515H0V16.9343H26.7192V14.9515Z" fill="#D7D7D7"/>
                    <path d="M26.7192 0H0V1.982H26.7192V0Z" fill="#D7D7D7"/>
                </svg>
            </button>
            <!-- ul.navLinks>li>a -->
            <div class="navBg" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/navButtonBg.jpg' ?>);"></div>
        </nav>
    </div>
</header>