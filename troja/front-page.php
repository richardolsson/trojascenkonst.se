<?php get_header();?>
<?php
    $first = true;
    $projects = get_posts(array(
        'post_type' => 'project',
    ));
?>
<div class="content front">
<?php foreach ($projects as $project):
    $img_src = get_the_post_thumbnail_url($project);
?>
    <div class="project" style="background-image: url(<?php echo $img_src ?>)">
        <div class="project-meta">
            <h2><?php echo $project->post_title;?></h2>
            <p class="excerpt">
                <?php echo $project->post_excerpt;?>
            </p>
            <a href="<?php echo get_permalink($project);?>"><?php
                echo __('Read more about this project', 'troja');?></a>
        </div>
    </div>

    <?php if ($first):
        $first = false;
        $news = get_posts(array(
            'post_type' => 'post',
            'posts_per_page' => 3,
        ));
    ?>
        <div class="news">
        <?php foreach ($news as $post):?>
            <a href="<?php echo get_permalink($post);?>" class="news-item">
                <small class="date"><?php echo get_the_date(null, $post->ID);?></small>
                <h3 class="title"><?php echo $post->post_title;?></h3>
            </a>
        <?php endforeach; ?>
        </div>

    <?php endif;?>
<?php endforeach;?>
</div>
<?php get_footer();?>
