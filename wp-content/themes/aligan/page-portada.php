<?php

/*
Template Name: Portada
*/

get_header();

?>

    <section class="pt-2 mb-3 mb-md-5">
        <div class="container-fluid h-100">
            <div class="row title">
                <div class="col-12 col-md-4 col-lg-5 call">
                    <div class="wrapper d-flex justify-content-between flex-column">
                        <?php if(!empty(get_field('titulo_slider',get_the_ID()))): ?>
                            <h1 id="introText" class="text-uppercase mx-2">
	                            <?php echo get_field('titulo_slider'); ?>
                            </h1>
                        <?php endif; ?>
	                    <?php if(!empty(get_field('descripcion_slider'))): ?>
			                    <?php echo get_field('descripcion_slider'); ?>
	                    <?php endif; ?>
	                    <?php if(!empty(get_field('enlace_slider'))): ?>
                            <a target="<?php echo get_field('enlace_slider')['target']; ?>" href="<?php echo get_field('enlace_slider')['url']; ?>" class="title-btn align-self-end align-self-md-start home-visitenos-link" title="<?php echo get_field('enlace_slider')['title']; ?>"><?php echo get_field('enlace_slider')['title']; ?></a>
	                    <?php endif; ?>
                    </div>
                </div>
                <?php if (have_rows('slider')) :?>
                    <div class="carousel-container col-md-4 col-lg-7 ">
                        <div id="carouselIntro" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators justify-content-start">
	                            <?php while (have_rows('slider')) : the_row(); ?>
                                    <li data-target="#carouselIntro" data-slide-to="<?php echo get_row_index()-1; ?>" <?php if(get_row_index()-1==0): echo 'class="active"'; endif; ?>></li>
	                            <?php endwhile; ?>
                            </ol>
                            <div class="carousel-inner">
	                            <?php while (have_rows('slider')) : the_row(); ?>
		                            <?php $imagen = get_sub_field('imagen'); ?>
                                    <div class="carousel-item <?php if(get_row_index()-1==0): echo 'active'; endif; ?>">
                                        <img src="<?php echo wp_get_attachment_url($imagen); ?>" class="d-block w-100" alt="<?php echo wp_get_attachment_caption($imagen); ?>">
                                    </div>
	                            <?php endwhile; ?>
                            </div>
                            <div class="carousel-sliders">
                                <a class="carousel-control " href="#carouselIntro" role="button" data-slide="prev">
                                    <span class="icon icon-control-prev slider-indicator shadow" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control " href="#carouselIntro" role="button" data-slide="next">
                                    <span class="icon icon-control-next slider-indicator shadow" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
	            <?php endif; ?>
            </div>
        </div>
    </section>

    <?php if(!empty(get_field('descripcion_la_empresa'))): ?>
        <section class="pt-5">
            <div class="container px-2">
                <div class="row justify-content-md-center mx-0">
                    <div class="col-md-2 col-none"></div>
                    <div class="col-12 col-md-8 d-flex justify-content-center px-4 px-md-5 contact-card">
                        <div class="mission-container px-2 px-md-5">
	                        <?php echo get_field('descripcion_la_empresa'); ?>
	                        <?php if(!empty(get_field('enlace_la_empresa'))): ?>
                                <a target="<?php echo get_field('enlace_la_empresa')['target']; ?>" href="<?php echo get_field('enlace_la_empresa')['url']; ?>" title="<?php echo get_field('enlace_la_empresa')['title']; ?>"><?php echo get_field('enlace_la_empresa')['title']; ?></a>
	                        <?php endif; ?>
                        </div>
                    </div>
                    <div class="col-none col-md-2"></div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if (have_rows('productos')): ?>
        <section class="mt-5">
            <div class="container">
	            <?php if(!empty(get_field('titulo_productos'))): ?>
                    <h2 class="text-uppercase text-center">
                            <?php echo get_field('titulo_productos'); ?>
                    </h2>
	            <?php endif; ?>
                <div class="products-container d-flex justify-content-center">
	                <?php while (have_rows('productos')) : the_row();   $product_id= get_sub_field('producto');   ?>
                        <div class="products-card">
                            <picture>
                                <img class="product-icon" src="<?php echo wp_get_attachment_url(get_field('icono_producto', $product_id)); ?>">
                            </picture>
                                <h5 class="text-uppercase font-weight-bold"><?php echo get_the_title($product_id); ?></h5>
                                <p><?php echo get_field('resumen', $product_id); ?></p>
                        </div>
	                <?php endwhile; ?>
                </div>
                <hr class="my-5">
            </div>
        </section>
	<?php endif; ?>
    <?php
        $query = new WP_Query( array(
            'post_type'      => 'post',
            'posts_per_page' => get_field('cantidad_noticias'),
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

    <?php if (have_rows('enlaces_de_interes')): ?>
        <section class="mb-5">
            <div class="container mb-4">
	            <?php if(!empty(get_field('titulo_enlaces_de_interes'))): ?>
                    <h3 class="text-uppercase"><?php echo get_field('titulo_enlaces_de_interes'); ?></h3>
	            <?php endif; ?>
                <hr style="border-top: 2px solid green;">
                <div class="viewport">
                    <div class="carousel-frame custom-shadow">
                        <div class="carousel-custom">
                            <ul class="scroll">
	                            <?php while (have_rows('enlaces_de_interes')) : the_row(); ?>
                                <li class="scroll-item-outer">
                                    <div class="scroll-item">
                                        <a href="<?php echo get_sub_field('url'); ?>" title="<?php echo get_sub_field('titulo'); ?>">
                                            <img src="<?php echo wp_get_attachment_url(get_sub_field('imagen')); ?>" alt="<?php echo get_sub_field('titulo'); ?>" />
                                        </a>
                                    </div>
                                </li>
		                        <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                    <a class="carousel-control" role="button" data-slide="prev">
                        <span class="icon icon-control-prev slider-indicator shadow" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control" role="button" data-slide="next">
                        <span class="icon icon-control-next slider-indicator shadow" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
    <?php endif; ?>

<?php

get_footer();
