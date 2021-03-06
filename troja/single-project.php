<?php the_post();?>
<?php get_header();?>
<div class="content post project">
    <div class="post-image">
        <?php the_post_thumbnail();?>
    </div>
    <h1><?php the_title();?></h1>
    <div class="post-meta">
        <p class="post-kicker">
            <?php the_field('post_meta_kicker'); ?>
        </p>
        <p class="post-caption">
            <?php the_field('post_meta_caption'); ?>
        </p>
    </div>
    <div class="post-content">
        <?php the_content(); ?>
    </div>
    <?php if (have_rows('project_media')): ?>
    <div class="project-media">
    <?php while (have_rows('project_media')): the_row(); ?>
        <div class="project-media-item">
            <img src="<?php the_sub_field('project_media_image_image');?>">
            <p class="project-media-item-caption">
                <?php the_sub_field('project_media_image_caption');?>
            </p>
        </div>
    <?php endwhile; ?>
    </div>
    <?php endif;?>
    <?php if (have_rows('project_credits')): ?>
    <div class="project-credits">
        <h2><?php echo __('Project credits', 'troja');?></h2>
        <div class="project-credits-lists">
        <?php while (have_rows('project_credits')): the_row(); ?>
            <div class="project-credits-list">
                <h3><?php the_sub_field('project_credits_list_title');?></h3>
                <ul>
                <?php while (have_rows('project_credits_list_items')): the_row();?>
                    <li>
                        <span class="role">
                            <?php the_sub_field('project_credits_list_items_item_role');?>
                        </span>
                        <span class="names">
                            <?php the_sub_field('project_credits_list_items_item_name');?>
                        </span>
                    </li>
                <?php endwhile;?>
                </ul>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if (have_rows('project_sponsors')): ?>
    <div class="project-sponsors">
        <h2><?php echo __('Project sponsors', 'troja');?></h2>
        <ul class="project-sponsor-list">
        <?php while (have_rows('project_sponsors')): the_row();?>
            <li><img src="<?php the_sub_field('project_sponsors_logo_image');?>"></li>
        <?php endwhile;?>
        </ul>
    </div>
    <?php endif;?>
</div>
<?php get_footer();?>
