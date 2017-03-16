<?php the_post();?>
<?php get_header();?>
<div class="content post project">
    <div class="post-image">
        <?php the_post_thumbnail();?>
    </div>
    <h1><?php the_title();?></h1>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
</div>
<?php get_footer();?>
