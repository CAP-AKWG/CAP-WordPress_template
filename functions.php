<?php

	register_nav_menus( array(

		'header-links' => __( 'Header Links' ),
		'main-navigation' => __( 'Main Navigation' ),
		'sidebar-navigation' => __( 'Sidebar Navigation' ),
		'footer-links' => __( 'Footer Links' )

	) );

	register_sidebar( array(

		'id' => 'footer-content',
		'name' => __( 'Footer Content' ),
		'before_widget' => '<div class="footerBox">',
		'after_widget' => '</div>',
		'before_title' => '<div class="footerBoxTitle">',
		'after_title' => '</div>'

	));
