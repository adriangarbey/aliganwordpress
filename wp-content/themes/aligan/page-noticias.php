<?php

/*
Template Name: Noticias
*/

get_header();

?>
<section>
    <div class="container-fluid">
        <div class="row title">
            <div class="col-12 col-md-4 col-lg-5 call order-1">
                <div class="wrapper d-flex justify-content-start flex-column">
                    <a href="<?php echo home_url(esc_html('/')); ?>" class="small text-muted d-none d-md-block"> <?php echo pll__('Inicio'); ?> </a>
                    <h1 class="text-uppercase text-left font-weight-bold mt-md-5 mx-0 mx-md-1">
						<?php echo str_replace('/','<br/>',get_field('titulo_noticia')); ?>
                    </h1>
                </div>
            </div>
            <div class="col-12 col-md-8 col-lg-7 order-2 px-0 carousel-container">
                <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_field('imagen_noticia')); ?>">
            </div>
        </div>
    </div>
</section>

<?php
$query = new WP_Query( array(
	'post_type'      => 'post',
	'posts_per_page' => -1,
	'post_status'    => 'publish',
) );
$posts = $query->posts;
if ( $query->post_count != 0 ):
	?>
    <section>
        <div class="container news-container my-4">
			<?php if(!empty(get_field('titulo_noticias'))): ?>
                <h2 class="text-uppercase mx-3"><?php echo get_field('titulo_noticias'); ?></h2>
			<?php endif; ?>
			<?php foreach ( $posts as $element ) : $id = $element->ID; ?>
                <article class="news-item my-5">
                    <div class="row">
                        <div class="col-12 col-md-3 mb-3 mb-mx-0">
                            <figure>
                                <a href="<?php echo get_permalink( $id ); ?>"><?php echo get_the_post_thumbnail( $id, 'noticia-portada', "", array( "class" => "img-fluid" ) ); ?></a>
                            </figure>
                        </div>
                        <div class="col-12 col-md-8 item-details">
                            <div class="mb-3 mb-md-0">
                                <p class="mb-0"><?php echo get_the_date( 'd M Y' ); ?></p>
                                <hr>
                            </div>
                            <div>
                                <h4><a href="<?php echo get_permalink( $id ); ?>"><?php echo get_the_title( $id ); ?></a></h4>
                                <p class="my-0">
									<?php echo get_the_excerpt($id ); ?>
                                </p>
                            </div>
                            <div class="item-actions align-self-end d-inline-block d-md-none">
                                <a class="text-primary font-weight-bold" href="<?php echo get_permalink( $id ); ?>"> <?php echo pll__('Leer'); ?> </a>
                            </div>
                        </div>
                    </div>
                </article>
			<?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>


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

<?php get_footer(); ?>
