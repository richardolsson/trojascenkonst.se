<?php get_header();?>
<?php
    $posts = get_posts(array(
        'post_type' => 'project',
    ));
?>
<div class="content front">
<?php foreach ($posts as $post):
    $img_src = get_the_post_thumbnail_url($post);
?>
    <div class="project" style="background-image: url(<?php echo $img_src ?>)">
        <h2><?php echo $post->post_title;?></h2>
    </div>
<?php endforeach;?>
</div>
<?php get_footer();?>
