<?php /* Template Name: Sponsors */ ?>

<?php get_header(); ?>

<div class="container header-wrapper">
    <h1><?php the_field('page_title');?></h1>
</div>

<div class="container">
    <div class="headline-sponsor-wrapper">
        <h2>Platinum Sponsor</h2>
            <div class="flex">
                <div class="headline-sponsor-info">
                    <img src="<?php the_field('headline_sponsor_image');?>">
                    <?php the_field('headline_sponsor_info');?>
                </div>

                <div class="headline-sponsor-video">
                    <?php the_field('headline_sponsor_video');?>
                </div>
            </div>
        </div>


<h2 class="sponsor-heading">Sponsors</h2>

	<div class="sponsor-page-wrapper">
        <?php if( have_rows('sponsors') ): ?>
            <?php while(have_rows('sponsors')): the_row(); ?>

                    <div class="sponsor-content">
                        <button class="accordion">
                            <img src="<?php the_sub_field('sponsor_logo');?>">
                        </button>

                        <div class="panel">
                            <br>
                            <?php the_sub_field('sponsor_info');?>
                            <?php the_sub_field('sponsor_video');?>
                            <?php the_sub_field('sponsor_contact');?>
                        </div>
                    </div>
                    
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>