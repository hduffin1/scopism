<?php /* Template Name: Register - Form */ ?>

<?php get_header(); ?>

<div class="container header-wrapper">
    <h1><?php the_field('page_title');?></h1>
</div>

<div class="container">
    <div class="sponsors-wrapper">
        <h3>Service North is proudly sponsored by</h3>
        <div class="glider-contain">
              <div class="glider">
                <?php if( have_rows('sponsor_carousel', 7)): ?>
                        <?php while(have_rows('sponsor_carousel', 7)): the_row(); ?>
                                <img src="<?php the_sub_field('sponsor_logo');?>">
                        <?php endwhile; ?>
                    <?php endif; ?>
              </div>

            <button aria-label="Previous" class="glider-prev">«</button>
            <button aria-label="Next" class="glider-next">»</button>
            <div role="tablist" class="dots"></div>
        </div>
    </div>
    <div class="reg-wrapper">
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</div>

<?php get_footer(); ?>