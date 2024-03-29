<?php
wp_enqueue_style( 'projects', get_template_directory_uri() . '/assets/css/projects.css', false, 'all');
wp_enqueue_script( 'modal', get_template_directory_uri() . '/assets/js/modal.js', false, 'all');

get_header();
get_template_part('template-parts/navigation/navigation', 'top'); 

?>
<body>
    <div class="mainGrid">
        <div class="header">
            <div class="headerContent">
                <div class="sectionTitle">
                    <h1 style="background-image: url(<?php echo get_theme_file_uri('assets/images/sample-blur.jpg')?>)">
                        <?php the_title()?>
                    </h1>
                </div>
                    
                <?php the_content() ?>
            </div>
            <div class="bottomCard"> </div>

        </div>

        <?php
        $project_query = new WP_Query( array( 'category_name' => 'projects'));


        if ($project_query->have_posts()) :
            while ($project_query->have_posts()) : $project_query->the_post();
    
            get_template_part('template-parts/page/project-card');
            endwhile;
        endif;
                
        ?>
    </div>
</body>
<?php get_footer(); ?>