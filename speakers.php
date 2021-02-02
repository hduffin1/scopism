<?php /* Template Name: Speakers */ ?>

<?php get_header(); ?>

<div class="container header-wrapper">
    <h1><?php the_field('page_title');?></h1>
</div>

<div class="container">
    <div class="speaker-wrapper">
        <div class="flex">
            <?php if( have_rows('speakers_repeater')): ?>
                <?php while(have_rows('speakers_repeater')): the_row(); ?>
                    <div class="speaker-details">
                        <img src="<?php the_sub_field('image');?>" class="speaker-img">
                        <div class="speaker-box">
                          <h2><?php the_sub_field('speaker_name');?></h2>
                          <h3><?php the_sub_field('speaker_position');?></h3>
                        </div>

                        <?php the_sub_field( 'speaker_info' ) ;?>

                        <button class="accordion-read">Read More</button>
                        <div class="panel-read">
                            <?php the_sub_field( 'read_more' ) ;?>
                        </div>
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