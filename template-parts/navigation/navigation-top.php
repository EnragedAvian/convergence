<nav id="navbar">
    <a id="logo"  href="<?php echo get_home_url(); ?>">
        <img src="<?php echo esc_url(get_theme_file_uri('assets/images/logo-mini.png'))?>">
    </a>
    <div id="navLinks">
        <a class="active" href="<?php echo get_permalink(get_page_by_path( 'projects' )); ?>">PROJECTS</a>
        <a class="disabled">BLOG</a>
        <a class="disabled">ABOUT</a>
    </div>
    <div id="hamburgerButton">
        <a class="inactive">&#x2261</a>
    </div>
 </nav>

 <?php wp_enqueue_script( 
    'menu', 
    get_template_directory_uri() . '/assets/js/menu.js', 
    false, 
    'all',
    array (
        'strategy' => 'defer',
    )
); ?>