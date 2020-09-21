<?php

/*
Template Name: Preguntas frecuentes
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
                            <?php echo get_field('titulo_faqs'); ?>
                        </h1>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-7 order-2 px-0 carousel-container">
                    <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_field('imagen_faqs')); ?>">
                </div>
            </div>
        </div>
    </section>

    <?php if (have_rows('preguntas_frecuentes')): ?>
    <section class="mb-2 ">
        <div class="container">
            <div class="news-content col-12">
                <div class="content-section mb-5 px-md-5">
                    <p class="content-text">
                    <div class="aligan-accordion" id="accordionAnswers">
	                    <?php while (have_rows('preguntas_frecuentes')) : the_row(); ?>
                            <div class="card">
                                <div class="card-header" id="heading<?php echo get_row_index(); ?>">
                                    <h2 class="mb-0 d-flex justify-content-between">
                                        <button class="btn btn-link text-uppercase" type="button" data-toggle="collapse"
                                                data-target="#collapse<?php echo get_row_index(); ?>" aria-expanded="true" aria-controls="collapse<?php echo get_row_index(); ?>">
                                            <span><?php echo get_sub_field('pregunta'); ?></span>
                                        </button>
                                        <button class="btn btn-link collapsed  text-uppercase" type="button"
                                                data-toggle="collapse" data-target="#collapse<?php echo get_row_index(); ?>" aria-expanded="false"
                                                aria-controls="collapse<?php echo get_row_index(); ?>">
                                            <i class="icon icon-plus"></i>
                                        </button>
                                    </h2>
                                </div>

                                <div id="collapse<?php echo get_row_index(); ?>" class="collapse <?php if(get_row_index()==1): echo 'show'; endif; ?>" aria-labelledby="heading<?php echo get_row_index(); ?>"
                                     data-parent="#accordionAnswers">
                                    <div class="card-body">
	                                    <?php echo get_sub_field('respuesta'); ?>
                                    </div>
                                </div>
                            </div>
	                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
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

<?php

get_footer();
