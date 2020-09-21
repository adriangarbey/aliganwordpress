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
                <?php echo pll__('Noticias'); ?>
              </h1>

              <div class="position-relative mb-5 mb-md-2">
                <span class="news-date"><?php the_date('d M Y'); ?></span>
                <hr class="content-separator w-25 mb-5 d-block">
              </div>
              <p class="news-title"><?php the_title(); ?></p>
            </div>
          </div>


          <!--  Again, there is not any specification about this images sizes on all viewports, shooting blind here -->
          <div class="col-12 col-md-8 col-lg-7 order-2 px-0 carousel-container">
            <img class="img-fluid" src="<?php the_post_thumbnail_url('full'); ?>">
          </div>
        </div>
      </div>

    </section>


    <section class="mt-5 mt-md-3 mt-lg-5">
      <div class="container">
        <div class="col-12 my-md-5">
          <div class="content-section mb-md-5 content-post-content">
            <?php echo the_content(); ?>
            <p class="content-share">
	            <?php echo pll__('Compartir en :'); ?>
                <a href="https://twitter.com/intent/tweet?text=<?php echo get_the_title(get_the_ID()); ?>&url=<?php echo get_permalink(get_the_ID()); ?>"><i class="mx-2 icon icon-small icon-twitter"></i></a>
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(get_the_ID()); ?>"><i class="mx-2 icon icon-small icon-facebook"></i></a>
                <a href="http://www.youtube.com/?url=<?php echo get_permalink(get_the_ID()); ?>"><i class="mx-2 icon icon-small icon-youtube"></i></a>
            </p>
          </div>


        </div>
      </div>
    </section>

		<?php if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {              ?>

        <section>
            <div class="container d-flex justify-content-center flex-column">
                <div class="content-section mb-5 mt-4">
                    <span class="content-header w-100"> <?php echo pll__('Envíenos su comentario'); ?></span>
                    <hr class="content-separator w-50 mb-5">
                    <p class="content-text ">
	                    <?php comments_template(); ?>
                    </p>
                </div>
            </div>
        </section>


	<?php 	} ?>


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
