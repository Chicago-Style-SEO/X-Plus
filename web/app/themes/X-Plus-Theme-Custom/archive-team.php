<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
    <div class="alert alert-warning">
        <?php _e('Sorry, no results were found.', 'sage'); ?>
    </div>
    <?php get_search_form(); ?>
<?php endif; ?>
<div class="row">
<?php while (have_posts()) : the_post(); ?>
    <div class="col-md-4">
        <div class="teamMember">

            <img class="teamMember-image" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id( $post->ID )); ?>" data-alt-src="<?php the_field('additional_photo'); ?>" />
            <h4><?php the_title(); ?></h4>
            <?php the_field('position_held'); ?>

            <a href="<?= get_post_permalink(); ?>"><button class="alternate-btn">Learn More</button></a>

        </div>
    </div>
    <?php /* get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); */?>

<?php endwhile; ?>
</div>

<?php the_posts_navigation(); ?>
