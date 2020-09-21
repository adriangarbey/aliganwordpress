<?php

/*
Template Name: Productos
*/

get_header();

?>

    <section class="mb-4">
        <div class="container-fluid h-100 pt-0 pt-md-2">
            <div class="row title">
                <div class="col-12 col-md-4 col-lg-5 call mt-4 mt-md-1 order-1">
                    <div class="wrapper d-flex flex-column">
                        <a href="<?php echo home_url(esc_html('/')); ?>" class="small text-muted d-none d-md-block"> <?php echo pll__('Inicio'); ?> </a>
                        <h1 class="text-uppercase text-left font-weight-bold mt-md-5 mx-0 mb-0 mx-md-1">
	                        <?php echo str_replace('/','<br/>',get_field('titulo_en_pagina', get_the_ID())); ?>
                        </h1>
                    </div>

                </div>

                <?php if (have_rows('imagenes', get_the_ID())) :?>
                <div class="col-md-8 col-lg-7 carousel-container order-2">
                    <div id="carouselIntro" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators justify-content-start">
	                        <?php while (have_rows('imagenes', get_the_ID())) : the_row(); ?>
                                <li data-target="#carouselIntro" data-slide-to="<?php echo get_row_index()-1; ?>" <?php if(get_row_index()-1==0): echo 'class="active"'; endif; ?>></li>
	                        <?php endwhile; ?>
                        </ol>


                        <div class="carousel-inner">
	                        <?php while (have_rows('imagenes', get_the_ID())) : the_row(); ?>
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

<?php
$query = new WP_Query( array(
	'post_type'      => 'producto',
	'posts_per_page' => -1,
	'post_status'    => 'publish',
) );
$posts = $query->posts;
if ( $query->post_count != 0 ):
	?>
    <section>
        <div class="container pt-0 pt-md-5 mb-4">
            <div class="products-container d-flex flex-row justify-content-center">
	            <?php foreach ( $posts as $key => $element ) : $id = $element->ID; ?>
                <div data-table="#producto-table-<?php echo  $key; ?>" datasrc="#producto<?php echo  $key; ?>" class="products-card-small custom-shadow mx-0 mx-md-4 <?php if($key==0): echo 'active'; endif; ?>">
                    <picture>
                        <img class="product-icon" src="<?php echo wp_get_attachment_url(get_field('icono_producto', $id)); ?>" height="50px">
                    </picture>

                    <h5 class="text-uppercase"> <?php echo get_the_title( $id ); ?> </h5>
                </div>
	            <?php endforeach; ?>
            </div>
        </div>
        <div class="container products-container-content">
	        <?php foreach ( $posts as $key => $element ) : $id = $element->ID; ?>
                <div id="producto<?php echo $key; ?>" class="content-section producto-content-section" <?php if($key!=0): echo 'style="display: none"'; endif; ?>>
                    <span class="content-header"> <?php echo get_the_title( $id ); ?> </span>
                    <hr class="content-separator w-25 mb-5">
                    <div class="row d-flex justify-content-start flex-wrap content-text mt-0 px-0 mt-md-5 mb-4">
                        <?php echo get_post_field('post_content', $id); ?>
                    </div>
	                <?php if (have_rows('caracteristicas_generales_', $id)) :?>
                        <div class="card border-primary">
                            <div class="card-header text-uppercase text-center bg-primary text-white">
                            <?php echo pll__('Caracteristicas generales'); ?>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12 col-md-5 d-flex justify-content-center align-items-center mb-4 mb-md-0">
                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.jpg">
                                    </div>
                                    <div class="col-12 col-md-7 productos-caracteristicas">
                                        <?php while (have_rows('caracteristicas_generales_', $id)) : the_row(); ?>
                                            <h6 class="card-text text-primary font-weight-bold"><?php echo get_sub_field('caracteristica'); ?></h6>
                                            <?php echo get_sub_field('descripcion'); ?>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
	                <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endif; ?>

<?php foreach ( $posts as $key => $element ) : $id = $element->ID; ?>
	<?php if (have_rows('tipos_piensos',$id)): ?>
    <section id="producto-table-<?php echo  $key; ?>"  class="products-table <?php if($key==0): echo 'active'; endif; ?>">
        <div class="container my-5 py-2">
            <div class="row justify-content-center">
                <div class="col-md-3">
                    <div
                            class="bg-primary custom-shadow w-100 m-0 products-card-small text-uppercase text-white text-right ">
                        <h6><?php echo get_field('titulo_col_tipos',$id); ?></h6>
                    </div>


                    <nav class="navbar navbar-expand-lg bg-transparent px-0 my-4">
		                <?php while (have_rows('tipos_piensos',$id)) : the_row(); ?>
			                <?php if(get_row_index()==1): ?>
                                <div
                                        class="info-container custom-shadow w-100  d-block d-md-none d-flex justify-content-between p-3">
                                    <a class="navbar-brand nav-item-small current text-primary font-weight-bold">
	                                    <?php echo get_sub_field('tipo'); ?> </a>
                                    <button id="buttonpiensolist" class="bg-primary navbar-toggler" type="button" data-toggle="collapse"
                                            data-target="#productsNav" aria-controls="productsNav" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                        <span style="font-size: 28px; color: white;" class="icon icon-back"></span>
                                    </button>
                                </div>
			                <?php endif; ?>
		                <?php endwhile; ?>

                        <div class="collapse navbar-collapse" id="productsNav">
                            <ul class="navigation navigation-small w-100">
                                <?php while (have_rows('tipos_piensos',$id)) : the_row(); ?>
                                                        <li class="nav-item-small <?php if(get_row_index()==1): echo 'active'; endif; ?>">
                                                            <a href="#" class="nav-item-tablapienso" data-src="#tablapienso-<?php echo get_row_index(); ?>"> <?php echo get_sub_field('tipo'); ?></a>
                                                        </li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </nav>

                </div>
                <div class="col-md-9">
                    <div class="content-section mb-5">
                        <div
                                class="mb-3 d-none d-md-block bg-primary w-100 m-0 products-card-small text-uppercase text-white text-right">
                            <h6> <?php echo get_field('titulo_columna_tabla',$id); ?> </h6>
                            <?php while (have_rows('tipos_piensos',$id)) : the_row(); ?>
                                <?php if(get_row_index()==1): ?>
                                    <h6 class="title-tipo-pienso font-weight-lighter"> <?php echo get_sub_field('tipo'); ?> </h6>
                                <?php endif; ?>
                            <?php endwhile; ?>
                        </div>
	                    <?php while (have_rows('tipos_piensos',$id)) : the_row(); ?>
                            <div id="tablapienso-<?php echo get_row_index(); ?>" class="tablapienso table-scroll shadow mb-3">
                                <table id="main-table" class="table h-100 text-center product-table">
	                                <?php while (have_rows('tabla_piensos')) : the_row(); ?>
		                                <?php if(get_row_index()==1): ?>
                                            <thead>
                                            <tr>
	                                            <?php if(!empty(get_sub_field('columna_1'))): ?>
                                                    <th scope="col"> <?php echo get_sub_field('columna_1'); ?> </th>
	                                            <?php endif; ?>
	                                            <?php if(!empty(get_sub_field('columna_2'))): ?>
                                                    <th scope="col bg-primary"> <?php echo get_sub_field('columna_2'); ?> </th>
	                                            <?php endif; ?>
	                                            <?php if(!empty(get_sub_field('columna_3'))): ?>
                                                    <th scope="col bg-primary"> <?php echo get_sub_field('columna_3'); ?> </th>
	                                            <?php endif; ?>
	                                            <?php if(!empty(get_sub_field('columna_4'))): ?>
                                                    <th scope="col bg-primary"> <?php echo get_sub_field('columna_4'); ?> </th>
	                                            <?php endif; ?>
	                                            <?php if(!empty(get_sub_field('columna_5'))): ?>
                                                    <th scope="col bg-primary"> <?php echo get_sub_field('columna_5'); ?> </th>
	                                            <?php endif; ?>
	                                            <?php if(!empty(get_sub_field('columna_6'))): ?>
                                                    <th scope="col bg-primary"> <?php echo get_sub_field('columna_6'); ?> </th>
	                                            <?php endif; ?>
                                            </tr>
                                            </thead>
		                                <?php endif; ?>
	                                <?php endwhile; ?>

                                    <tbody>
                                    <?php while (have_rows('tabla_piensos')) : the_row(); ?>
                                    <?php if(get_row_index()!=1): ?>
                                    <tr>
		                                <?php if(!empty(get_sub_field('columna_1'))): ?>
                                            <th> <?php echo get_sub_field('columna_1'); ?> </th>
		                                <?php endif; ?>
		                                <?php if(!empty(get_sub_field('columna_2'))): ?>
                                            <td> <?php echo get_sub_field('columna_2'); ?> </td>
		                                <?php endif; ?>
		                                <?php if(!empty(get_sub_field('columna_3'))): ?>
                                            <td> <?php echo get_sub_field('columna_3'); ?> </td>
		                                <?php endif; ?>
		                                <?php if(!empty(get_sub_field('columna_4'))): ?>
                                            <td> <?php echo get_sub_field('columna_4'); ?> </td>
		                                <?php endif; ?>
		                                <?php if(!empty(get_sub_field('columna_5'))): ?>
                                            <td> <?php echo get_sub_field('columna_5'); ?> </td>
		                                <?php endif; ?>
		                                <?php if(!empty(get_sub_field('columna_6'))): ?>
                                            <td> <?php echo get_sub_field('columna_6'); ?> </td>
		                                <?php endif; ?>
                                    </tr>
                                <?php endif; ?>
                                <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
	                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<?php endif; ?>
<?php endforeach; ?>

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
