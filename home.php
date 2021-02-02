<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<div class="container header-wrapper">
    <h1><?php the_field('page_title');?></h1>
</div>

<div class="content-wrapper">
    <div class="blue">
        <div class="container">
            <div class="homepage-details-wrapper">
                <div class="details">
                    <?php the_field('homepage_details');?>
                </div>
            </div>
        </div>
    </div>

    <div class="grey">
        <div class="container">
            <div class="homepage-content">
                <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
            </div>

            <div class="homepage-btn-container">
                <a href="sponsors" class="homepage-btn">View our Sponsors</a>
            </div>

            <div class="pricing-wrapper">
                <h2>Pricing</h2>
                    <div class="pricing">
                        <div class="flex">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/fav.svg" class="price-icon">
                            <div class="pricing-content">
                                <?php the_field('pricing_1');?>
                            </div>
                        </div>
                    </div>

                    <div class="pricing">
                        <div class="flex">
                            <img src="<?php bloginfo( 'template_directory' ); ?>/images/fav.svg" class="price-icon">
                            <div class="pricing-content">
                                <?php the_field('pricing_2');?>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="whitepaper">
                <div class="flex">
                    <img src="<?php the_field('whitepaper_cover');?>">
                    <div class="whitepaper-content">
                        <?php the_field('whitepaper');?>
                     </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container sponsors-wrapper">
        <h3>Service North is proudly sponsored by</h3>
        <div class="flex">
            <?php if( have_rows('sponsor_carousel')): ?>
                <?php while(have_rows('sponsor_carousel')): the_row(); ?>
                    <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
                        <img src="<?php the_sub_field('sponsor_logo');?>">
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>

        <div class="flex">
            <?php if( have_rows('sponsor_carousel_2')): ?>
                <?php while(have_rows('sponsor_carousel_2')): the_row(); ?>
                    <a href="<?php the_sub_field('sponsor_link');?>" target="_blank">
                        <img src="<?php the_sub_field('sponsor_logo');?>">
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>