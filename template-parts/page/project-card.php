<a class="gridEntry" href="<?php the_permalink() ?>">
    <div class="entryCard"></div>

    <div class="entryImage" style="background-image: url('<?php the_post_thumbnail_url('medium'); ?>');">
        <div class="translucentLayer"></div>
        <?php the_post_thumbnail('post-thumbnail')?>
    </div>

    <div class="projectText">
        <?php the_title('<h3>', '</h3>');?>
        <?php the_excerpt();?>
    </div>
</a>