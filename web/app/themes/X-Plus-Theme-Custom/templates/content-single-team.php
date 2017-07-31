<?php while (have_posts()) : the_post(); ?>
    <!-- HERO AREA FOR TEAM MEMBER -->
    <div class="teamHero">
        <div class="teamHero-title">
            <h1>Exceptional service. Extraordinary people.</h1>
        </div>
    </div>
    <!-- END HERO AREA FOR TEAM MEMBER -->
    <!-- breadcrumbs-->
    <?php custom_breadcrumbs(); ?>
    <!-- end breadcrumbs -->
    <div <?php post_class(); ?>>
            <h2 class="entry-title">Meet <?php the_title(); ?></h2>
        <div class="entry-content">
            <div class="row">
                <div class="col-md-3 teamMember-left">
                    <?php the_post_thumbnail(); ?>
                    <h5><?php the_title(); ?></h5>
                    <p><?php the_field('position_held'); ?></p>
                    <div class="teamMember-socialIcons">
                        <?php if( have_rows('social_info') ): ?>
                            <?php while( have_rows('social_info') ): the_row();
                                $icon = get_sub_field('social_icon');
                                $iconLabel = get_sub_field('icon_label');
                                $iconLink= get_sub_field('link_to_social_page');
                                ?>
                                <a href="<?= $iconLink ?>" class="teamMember-socialText"><?= $icon ?><span><?= $iconLabel ?></span></a><br>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-9">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
