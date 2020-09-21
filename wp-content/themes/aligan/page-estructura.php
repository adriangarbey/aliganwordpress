<?php

/*
Template Name: Estructura
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
                            <?php echo str_replace('/','<br/>',get_field('titulo_estructura')); ?>
                        </h1>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-7 order-2 px-0 carousel-container">
                    <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_field('imagen_estructura')); ?>">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container my-5">
            <div class="row">
                <div class=" col-md-4">
                    <nav id="side-navigation" class="side-navigation">

                        <ul class="navigation">
                            <li class="current d-sm-none position-relative bg-primary">
                                <span id="location">

                                </span>
                                <span id="collapser" class="collapser icon-sidenav-collapsed">

                                </span> </li>
                            <li>
                                <a href="<?php echo get_permalink(get_post_by_template('page-nosotros.php')); ?>"><?php echo get_the_title(get_post_by_template('page-nosotros.php')); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink(get_post_by_template('page-historia.php')); ?>"><?php echo get_the_title(get_post_by_template('page-historia.php')); ?></a>
                            </li>
                            <li class="active">
                                <a href="<?php echo get_permalink(get_post_by_template('page-estructura.php')); ?>"><?php echo get_the_title(get_post_by_template('page-estructura.php')); ?></a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="content col-md-8 my-md-5">
                    <div class="news-content">
                        <div class="org-cards-container d-flex justify-content-center">
                            <!-- Information card -->
	                        <?php if(get_field('mostrar_informacion')=='si'):  ?>
                                <div id="directorCard" class="card border-primary" style="width: 350px;">
                                    <div class="card-header text-uppercase text-center bg-primary text-white">
                                        <span><?php echo get_field('titulo_de_ventana'); ?></span>
                                        <span> <i data-target="directorCard" class="icon icon-sidenav-close"></i></span>
                                    </div>
                                    <div class="card-body pt-4">
                                        <div class="row">
	                                        <?php if(!empty(get_field('imagen_de_contacto'))):  ?>
                                                <div class="col-5 d-flex justify-content-center align-items-center">
                                                    <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_field('imagen_de_contacto'));  ?>">
                                                </div>
	                                        <?php endif; ?>
                                            <div class="col-7 card-info">
	                                            <?php if(!empty(get_field('nombre_de_contacto'))):  ?>
                                                    <p class="card-text text-primary font-weight-bold text-uppercase name">
	                                                    <?php echo get_field('nombre_de_contacto');  ?></p>
	                                            <?php endif; ?>
	                                            <?php if(!empty(get_field('cargo_de_contacto'))):  ?>
                                                    <p class="text-uppercase text-primary mb-0 position">
			                                            <?php echo get_field('cargo_de_contacto');  ?></p>
	                                            <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-white border-top-0">
	                                    <?php if(!empty(get_field('telefono_de_correo'))):  ?>
                                            <p class="text-primary font-weight-bold text-center">
                                                <span><i class="icon icon-phone"></i></span> <?php echo get_field('telefono_de_correo');  ?>
                                            </p>
	                                    <?php endif; ?>
	                                    <?php if(!empty(get_field('correo_de_contacto'))):  ?>
                                            <p class="text-primary font-weight-bold text-center">
                                                <span><i class="icon icon-email"></i></span> <?php echo get_field('correo_de_contacto');  ?>
                                            </p>
	                                    <?php endif; ?>
                                    </div>
                                </div>
	                        <?php endif; ?>
                            <?php while (have_rows('direcciones')) : the_row(); ?>
	                            <?php if(get_sub_field('mostrar_informacion_dir')=='si'):  ?>
                                    <div id="dir<?php echo get_row_index(); ?>" class="card border-primary" style="width: 350px;">
                                        <div class="card-header text-uppercase text-center bg-primary text-white">
                                            <span><?php echo get_sub_field('titulo_de_ventana_dir'); ?></span>
                                            <span> <i data-target="dir<?php echo get_row_index(); ?>" class="icon icon-sidenav-close"></i></span>
                                        </div>
                                        <div class="card-body pt-4">
                                            <div class="row">
					                            <?php if(!empty(get_sub_field('imagen_de_contacto_dir'))):  ?>
                                                    <div class="col-5 d-flex justify-content-center align-items-center">
                                                        <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_sub_field('imagen_de_contacto_dir'));  ?>">
                                                    </div>
					                            <?php endif; ?>
                                                <div class="col-7 card-info">
						                            <?php if(!empty(get_sub_field('nombre_de_contacto_dir'))):  ?>
                                                        <p class="card-text text-primary font-weight-bold text-uppercase name">
								                            <?php echo get_sub_field('nombre_de_contacto_dir');  ?></p>
						                            <?php endif; ?>
						                            <?php if(!empty(get_sub_field('cargo_de_contacto_dir'))):  ?>
                                                        <p class="text-uppercase text-primary mb-0 position">
								                            <?php echo get_sub_field('cargo_de_contacto_dir');  ?></p>
						                            <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-white border-top-0">
				                            <?php if(!empty(get_sub_field('telefono_de_correo_dir'))):  ?>
                                                <p class="text-primary font-weight-bold text-center">
                                                    <span><i class="icon icon-phone"></i></span> <?php echo get_sub_field('telefono_de_correo_dir');  ?>
                                                </p>
				                            <?php endif; ?>
				                            <?php if(!empty(get_sub_field('correo_de_contacto_dir'))):  ?>
                                                <p class="text-primary font-weight-bold text-center">
                                                    <span><i class="icon icon-email"></i></span> <?php echo get_sub_field('correo_de_contacto_dir');  ?>
                                                </p>
				                            <?php endif; ?>
                                        </div>
                                    </div>
	                            <?php endif; ?>
                            <?php endwhile; ?>
	                        <?php while (have_rows('unidades_empresariales')) : the_row(); ?>
		                        <?php if(get_sub_field('mostrar_informacion_dir')=='si'):  ?>
                                    <div id="ueb<?php echo get_row_index(); ?>" class="card border-primary" style="width: 350px;">
                                        <div class="card-header text-uppercase text-center bg-primary text-white">
                                            <span><?php echo get_sub_field('titulo_de_ventana_dir'); ?></span>
                                            <span> <i data-target="ueb<?php echo get_row_index(); ?>" class="icon icon-sidenav-close"></i></span>
                                        </div>
                                        <div class="card-body pt-4">
                                            <div class="row">
						                        <?php if(!empty(get_sub_field('imagen_de_contacto_dir'))):  ?>
                                                    <div class="col-5 d-flex justify-content-center align-items-center">
                                                        <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_sub_field('imagen_de_contacto_dir'));  ?>">
                                                    </div>
						                        <?php endif; ?>
                                                <div class="col-7 card-info">
							                        <?php if(!empty(get_sub_field('nombre_de_contacto_dir'))):  ?>
                                                        <p class="card-text text-primary font-weight-bold text-uppercase name">
									                        <?php echo get_sub_field('nombre_de_contacto_dir');  ?></p>
							                        <?php endif; ?>
							                        <?php if(!empty(get_sub_field('cargo_de_contacto_dir'))):  ?>
                                                        <p class="text-uppercase text-primary mb-0 position">
									                        <?php echo get_sub_field('cargo_de_contacto_dir');  ?></p>
							                        <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer bg-white border-top-0">
					                        <?php if(!empty(get_sub_field('telefono_de_correo_dir'))):  ?>
                                                <p class="text-primary font-weight-bold text-center">
                                                    <span><i class="icon icon-phone"></i></span> <?php echo get_sub_field('telefono_de_correo_dir');  ?>
                                                </p>
					                        <?php endif; ?>
					                        <?php if(!empty(get_sub_field('correo_de_contacto_dir'))):  ?>
                                                <p class="text-primary font-weight-bold text-center">
                                                    <span><i class="icon icon-email"></i></span> <?php echo get_sub_field('correo_de_contacto_dir');  ?>
                                                </p>
					                        <?php endif; ?>
                                        </div>
                                    </div>
		                        <?php endif; ?>
	                        <?php endwhile; ?>
                        </div>

                        <div class="orgchart">
                            <div class="director">
                                <div class="hoverable-info node custom-shadow">
	                                <?php if(get_field('mostrar_informacion')=='si'):  ?>
                                        <i data-target="directorCard" class="icon icon-details shadow"></i>
                                    <?php endif; ?>
                                    <p><?php echo get_field('titulo_area'); ?></p>
                                </div>
                            </div>
                            <?php if (have_rows('direcciones')): ?>
                                <div class="directions-container d-flex">
                                    <hr>
                                    <div class="top-directions justify-content-between justify-content-md-center">
	                                    <?php while (have_rows('direcciones')) : the_row(); ?>
                                        <div class="<?php if(get_sub_field('mostrar_informacion_dir')=='si'): echo 'hoverable-info'; endif; ?> node">
	                                        <?php if(get_sub_field('mostrar_informacion_dir')=='si'):  ?>
                                                <i data-target="dir<?php echo get_row_index(); ?>" class="icon icon-details shadow"></i>
	                                        <?php endif; ?>
                                            <span><?php echo get_sub_field('titulo_area_dir'); ?></span>
                                        </div>
		                                <?php endwhile; ?>
                                    </div>
                                </div>
                            <?php endif; ?>

	                        <?php if (have_rows('unidades_empresariales')): ?>
                                <div class="offices justify-content-between">
				                        <?php while (have_rows('unidades_empresariales')) : the_row(); ?>
                                            <div class="<?php if(get_sub_field('mostrar_informacion_dir')=='si'): echo 'hoverable-info'; endif; ?> node">
						                        <?php if(get_sub_field('mostrar_informacion_dir')=='si'):  ?>
                                                    <i data-target="ueb<?php echo get_row_index(); ?>" class="icon icon-details shadow"></i>
						                        <?php endif; ?>
                                                UEB <br><?php echo get_sub_field('titulo_area_dir'); ?>
                                            </div>
				                        <?php endwhile; ?>
                                </div>
	                        <?php endif; ?>
                        </div>
                    </div>
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
