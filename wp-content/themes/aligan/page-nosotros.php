<?php

/*
Template Name: Sobre nosotros
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
                            <?php echo str_replace('/','<br/>',get_field('titulo_nosotros')); ?>
                        </h1>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-7 order-2 px-0 carousel-container">
                    <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_field('imagen_nosotros')); ?>">
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
                            <li class="active">
                                <a href="<?php echo get_permalink(get_post_by_template('page-nosotros.php')); ?>"><?php echo get_the_title(get_post_by_template('page-nosotros.php')); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink(get_post_by_template('page-historia.php')); ?>"><?php echo get_the_title(get_post_by_template('page-historia.php')); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink(get_post_by_template('page-estructura.php')); ?>"><?php echo get_the_title(get_post_by_template('page-estructura.php')); ?></a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="news-content col-md-8">
                    <div class="content-section">
                        <?php the_content(); ?>
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
