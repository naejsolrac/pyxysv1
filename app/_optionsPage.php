<?php

if( function_exists('acf_add_options_page') ):
	
	acf_add_options_page(array(
		'page_title' 	=> 'Configurações gerais do tema',
		'menu_title'	=> 'Tema',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Identidade do site',
		'menu_title'	=> 'Identidade',
		'parent_slug'	=> 'theme-general-settings',
	));
	
endif;