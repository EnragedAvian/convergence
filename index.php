<?php
wp_enqueue_style( 'home', get_template_directory_uri() . '/assets/css/home.css', false, 'all');

get_header();
?>

<body>
    <div class="mainGrid">
        <div class="mainLogo">
            <img src="<?php echo get_theme_file_uri('assets/images/logo.png')?>">
        </div>
        <a class="gridEntry" href="<?php echo get_permalink(get_page_by_path( 'projects' )); ?>">
            <div class="entryCard"></div>

            <div class="entryImage" style="background-image: url('<?php echo get_theme_file_uri('assets/images/projects.jpg')?>');">
                <div class="translucentLayer"></div>
                <img src="<?php echo get_theme_file_uri('assets/images/projects.jpg')?>">
            </div>

            <div class="overlaidText">
                <h1>Projects</h1>
            </div>
        </a>
        <a class="gridEntry wip">
            <div class="entryCard"></div>

            <div class="entryImage" style="background-image: url('<?php echo get_theme_file_uri('assets/images/blog.jpeg')?>');">
                <div class="translucentLayer"></div>
                <img src="<?php echo get_theme_file_uri('assets/images/blog.jpeg')?>">
            </div>
            <div class="overlaidText">
                <h1>Blog</h1>
            </div>
        </a>
        <a class="gridEntry wip">
            <div class="entryCard"></div>

            <div class="entryImage" style="background-image: url('<?php echo get_theme_file_uri('assets/images/about.jpg')?>');">
                <div class="translucentLayer"></div>
                <img src="<?php echo get_theme_file_uri('assets/images/about.jpg')?>">
            </div>
            <div class="overlaidText">
                <h1>About Me</h1>
            </div>
        </a>
    </div>
</body>
<?php get_footer(); ?>