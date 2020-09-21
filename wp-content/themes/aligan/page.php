<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) :
		the_post(); ?>
        <section>
            <div class="container-fluid">
                <div class="row title">
                    <div class="col-12 col-md-4 col-lg-5 call">
                        <div class="wrapper d-flex justify-content-start flex-column">
                            <a href="<?php echo home_url(esc_html('/')); ?>" class="small text-muted d-none d-md-block"> <?php echo pll__('Inicio'); ?> </a>
                            <h1 class="text-uppercase text-left font-weight-bold mt-md-5 mx-0 mx-md-1">
	                            <?php the_title(); ?>
                            </h1>
                        </div>
                    </div>
	                <?php if(!empty(get_the_post_thumbnail_url(get_the_ID()))): ?>
                        <div class="col-12 col-md-8 col-lg-7 order-2 px-0 carousel-container">
                            <img class="img-fluid" src="<?php the_post_thumbnail_url('full'); ?>">
                        </div>
	                <?php endif; ?>
                </div>
            </div>
        </section>


        <section class="mt-5 mt-md-3 mt-lg-5">
            <div class="container">
                <div class="col-12 my-md-5">
                    <div class="content-section mb-md-5 content-post-content">
						<?php echo the_content(); ?>
                    </div>


                </div>
            </div>
        </section>


        <section class="container">
            <div class="row">
                <div class="col-md-4 d-none d-md-block">

                </div>
                <div class="col-12 col-md-7">
                    <div class="vote-card custom-shadow align-self-center text-center">
                        <h6 class="vote-card-header"><?php echo pll__('¿Te resultó útil este contenido?'); ?></h6>
						<?php echo do_shortcode('[ratemypost]'); ?>
                    </div>
                </div>
            </div>
        </section>

	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
