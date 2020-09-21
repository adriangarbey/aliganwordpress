<?php

/*
Template Name: UEB
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
                            <?php echo str_replace('/','<br/>',get_field('titulo_ueb')); ?>
                        </h1>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-7 order-2 px-0 carousel-container">
                    <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_field('imagen_ueb')); ?>">
                    <span class="overlay-header custom-shadow">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo.jpg';  ?>" class="d-inline-block align-top" alt="">
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-3 pt-md-0">
        <div class="container my-5">
            <div class="row">
                <div class=" col-md-4">
                    <nav id="side-navigation" class="side-navigation">
                        <ul class="navigation mt-5 mt-md-0">
                            <li class="current d-sm-none position-relative bg-primary">
                                <span id="location">

                                </span>
                                <span id="collapser" class="collapser icon-sidenav-collapsed">

                                </span> </li>

                            <?php
                                $query = new WP_Query( array(
                                    'post_type'      => 'unidad_empresarial_b',
                                    'posts_per_page' => -1,
                                    'post_status'    => 'publish',
                                ) );
                                $posts = $query->posts;
                                foreach( $posts as $key=> $element ) : $id = $element->ID; ?>
                            <li class="link <?php if($key==0): echo ' active'; endif; ?>">
                                <a data-target="#ueb-<?php echo $id; ?>" href="#"><?php echo get_the_title($id); ?></a>
                            </li>
                                <?php endforeach; ?>
                        </ul>
                </div>

                <div class="content pt-1 pt-md-5 col-md-8 uebs-content-wrapper">
                    <?php foreach( $posts as $key=> $element ) : $id = $element->ID; ?>
                        <div id="ueb-<?php echo $id; ?>" <?php if($key!=0): echo 'style="display: none"'; endif; ?> class="ueb-content">
                            <div class="content-section">
                                <?php echo get_post_field('post_content',$id); ?>
                            </div>

	                        <?php if (have_rows('productos',$id)): ?>
                                <div class="content-section mb-5">
                                    <h2 class="content-header"><?php echo get_field('titulo_productos', $id); ?></h2>

                                    <div class="products-container d-flex justify-content-start">
                                        <?php while (have_rows('productos',$id)): the_row(); $product_id= get_sub_field('producto'); ?>
                                            <div class="products-card">
                                                <picture style="padding-left: 40px;">
                                                    <img class="product-icon" src="<?php echo wp_get_attachment_url(get_field('icono_producto', $product_id)); ?>" height="70px">
                                                </picture>
                                                <h5 class="text-uppercase"> <?php echo get_the_title($product_id); ?> </h5>
                                                <p> <?php echo get_field('resumen', $product_id); ?></p>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
	                        <?php endif; ?>


                            <div class="content-section mb-5">
	                            <?php if(!empty(get_field('titulo_contactos_de_interes',$id))):  ?>
                                    <span class="content-header">  <?php echo get_field('titulo_contactos_de_interes',$id);  ?></span>
                                    <hr class="content-separator w-50 mb-5">
	                            <?php endif; ?>


                                <div class="container contact-container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex flex-column px-0 py-2">
                                                <ul class="contact-list-info pl-0 py-4 py-md-0">
	                                                <?php if(!empty(get_field('direccion_ueb',$id))):  ?>
                                                        <li class="d-flex align-items-md-center align-items-start flex-column flex-md-row mb-4 mb-md-0">
                                                            <i style="font-size: 24px;" class="icon icon-map mr-4"></i>
                                                            <span><?php echo get_field('direccion_ueb',$id);  ?></span>
                                                        </li>
	                                                <?php endif; ?>
	                                                <?php if(!empty(get_field('telefono_ueb',$id))):  ?>
                                                        <li class="d-flex align-items-md-center align-items-start flex-column flex-md-row mb-4 mb-md-0">
                                                            <i style="font-size: 24px" class="icon icon-phone mr-4"></i>
                                                            <span><?php echo get_field('telefono_ueb',$id);  ?></span>
                                                        </li>
	                                                <?php endif; ?>
	                                                <?php if(!empty(get_field('correo_ueb',$id))):  ?>
                                                        <li class="d-flex align-items-md-center align-items-start flex-column flex-md-row mb-4 mb-md-0">
                                                            <i style="font-size: 24px" class="icon icon-email mr-4"></i>
                                                            <span><?php echo get_field('correo_ueb',$id);  ?></span>
                                                        </li>
	                                                <?php endif; ?>
                                                </ul>
	                                            <?php if (have_rows('redes_sociales_ueb',$id)) :  ?>
                                                <div class="icons-row d-flex justify-content-end align-items-center">
	                                                <?php while (have_rows('redes_sociales_ueb',$id)) : the_row(); ?>
		                                                <?php $link = get_sub_field('url');
		                                                $link_class = get_sub_field('clase');
		                                                $link_title = get_sub_field('nombre');
		                                                ?>
                                                        <a title="<?php echo $link_title; ?>" href="<?php echo $link; ?>" target="blank"><i class="mx-2 icon icon-<?php echo $link_class; ?>"></i></a>
	                                                <?php endwhile; ?>
                                                </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
	                                    <?php if(!empty(get_field('imagen_mapa',$id))): ?>
                                        <div class="col-12 mt-3">
                                            <picture>
                                                <img class="google-maps-location img-fluid"
                                                     src="<?php echo wp_get_attachment_url(get_field('imagen_mapa',$id)); ?>">
                                            </picture>
                                        </div>
	                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
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

<?php

get_footer();
