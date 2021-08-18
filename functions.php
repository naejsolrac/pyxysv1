<?php

require_once 'vendor/autoload.php';

use App\ThemeConfig;

$themeConfig = new ThemeConfig();

$themeConfig->prepareWp();
$themeConfig->setupAcfs();
$themeConfig->setupOptionsPage();

$themeConfig->loadStyle( get_template_directory_uri() . '/dist/bundle.css' );
$themeConfig->loadScriptAtFooter( get_template_directory_uri() . '/dist/bundle.js' );
