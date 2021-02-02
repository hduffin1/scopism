<?php /* Template Name: Agenda */ ?>

<?php get_header(); ?>

<div class="container header-wrapper">
    <h1><?php the_field('page_title');?></h1>
</div>

<div class="container">
    <div class="agenda-content">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
    </div>

    <div class="agenda-wrapper">
        <div class="agenda-col">
            <div class="agenda-heading">
                <h3>pre-conference workshop</h3>
                <h2>27th April - Workshop</h2>
            </div>

            <div class="agenda-repeater-wrapper">
                <?php if( have_rows('workshop')): ?>
                    <?php while(have_rows('workshop')): the_row(); ?>
                        <div class="details">
                            <?php the_sub_field('workshop');?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="agenda-col">
            <div class="agenda-heading">
                <h3>Conference Day 1</h3>
                <h2>28th April - Conference</h2>
            </div>

            <div class="agenda-repeater-wrapper">
                <?php if( have_rows('day_one')): ?>
                    <?php while(have_rows('day_one')): the_row(); ?>
                        <div class="details">
                            <h3><?php the_sub_field('time');?></h3>
                           <a href="speakers"><h2><?php the_sub_field('speaker');?></h2></a>
                            <?php the_sub_field('content');?>
                            <button class="accordion-read"><?php the_sub_field('session_title');?></button>
                                <div class="panel-read">
                                    <?php the_sub_field('session_content');?>
                                </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>

        <div class="agenda-col">
            <div class="agenda-heading">
                <h3>Conference Day 2</h3>
                <h2>29th April - Conference</h2>
            </div>

            <div class="agenda-repeater-wrapper">
                <?php if( have_rows('day_two')): ?>
                    <?php while(have_rows('day_two')): the_row(); ?>
                        <div class="details">
                            <h3><?php the_sub_field('time');?></h3>
                            <a href="speakers"><h2><?php the_sub_field('speaker');?></h2></a>
                            <?php the_sub_field('content');?>
                            <button class="accordion-read"><?php the_sub_field('session_title');?></button>
                                <div class="panel-read">
                                    <?php the_sub_field('session_content');?>
                                </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
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