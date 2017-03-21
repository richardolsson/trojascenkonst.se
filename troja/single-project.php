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
                <dl>
                <?php while (have_rows('project_credits_list_items')): the_row();?>
                    <dt><?php the_sub_field('project_credits_list_items_item_role');?></dt>
                    <dd><?php the_sub_field('project_credits_list_items_item_name');?></dd>
                <?php endwhile;?>
                </dl>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php if (have_rows('project_sponsors')): ?>
    <div class="project-sponsors">
        <h2><?php echo __('Project sponsors', 'troja');?></h2>
        <ul>
        <?php while (have_rows('project_sponsors')): the_row();?>
            <li><img src="<?php the_sub_field('project_sponsors_logo_image');?>"></li>
        <?php endwhile;?>
        </ul>
    </div>
    <?php endif;?>
</div>
<?php get_footer();?>
