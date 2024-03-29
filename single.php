<?php
wp_enqueue_style( 'single', get_template_directory_uri() . '/assets/css/single.css', false, 'all');
wp_enqueue_script( 'modal', get_template_directory_uri() . '/assets/js/modal.js', false, 'all');

get_header();
get_template_part('template-parts/navigation/navigation', 'top'); 

?>
    <body>
    <header class="header">
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'thumb'])?>
        <div class="headerText">
            <h1><?php the_title(); ?></h1>
            <h3><?php echo get_the_excerpt(); ?></h3>
            <p><?php echo get_the_date('F Y'); ?></p>
        </div>
        <div class="blurCard"></div>
        <div class="overlayCard"></div>
        <div style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)" class="headerBackground"></div>
    </header>
    <article>
        <?php the_content() ?>
    </article>

<?php get_footer(); ?>