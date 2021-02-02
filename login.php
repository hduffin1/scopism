<?php /* Template Name: Login */ ?>

<?php get_header(); ?>

<div class="container">
    <div class="reg-wrapper">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <br>

        <div class="flex">
        <?php if( have_rows('tickets_repeater')): ?>
            <?php while(have_rows('tickets_repeater')): the_row(); ?>
                <div class="tickets-wrapper">
                <h3><?php the_sub_field('title');?></h3>
                <?php the_sub_field('info');?>
                <?php the_sub_field('ticket_link');?>
                    </div>
            <?php endwhile; ?>
        <?php endif; ?>
        </div>
    </div>

    <div class="sponsors-wrapper">
        <h3>Service North is proudly sponsored by</h3>
        <div class="flex">
            <?php if( have_rows('sponsor_carousel', 7)): ?>
                <?php while(have_rows('sponsor_carousel', 7)): the_row(); ?>
                    <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
                        <img src="<?php the_sub_field('sponsor_logo');?>">
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="flex">
            <?php if( have_rows('sponsor_carousel_2', 7)): ?>
                <?php while(have_rows('sponsor_carousel_2', 7)): the_row(); ?>
                    <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
                        <img src="<?php the_sub_field('sponsor_logo');?>">
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>