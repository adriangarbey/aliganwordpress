<?php

/*
Template Name: Historia
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
                            <?php echo str_replace('/','<br/>',get_field('titulo_historia')); ?>
                        </h1>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-7 order-2 px-0 carousel-container">
                    <img class="img-fluid" src="<?php echo wp_get_attachment_url(get_field('imagen_historia')); ?>">
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
                            <li class="active">
                                <a href="<?php echo get_permalink(get_post_by_template('page-historia.php')); ?>"><?php echo get_the_title(get_post_by_template('page-historia.php')); ?></a>
                            </li>
                            <li>
                                <a href="<?php echo get_permalink(get_post_by_template('page-estructura.php')); ?>"><?php echo get_the_title(get_post_by_template('page-estructura.php')); ?></a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="col-md-8 my-md-5">
                    <div class="content-section mb-5">
	                    <?php the_content(); ?>
                    </div>

                    <div class="content-section mb-5">
                        <span class="content-header w-100"><?php echo get_field('titulo_cumplimiento'); ?></span>
                        <hr class="content-separator w-50 mb-5">

                        <div class="text-right d-flex justify-content-end mt-4 mt-md-2">
                            <span> <i class="icon icon-info"></i></span>
                            <span class="table-caption ml-2"><?php echo get_field('descripcion_tabla'); ?></span>
                        </div>
                        <?php if (have_rows('cumplimientos')): ?>
                            <div class="table-responsive custom-shadow">
                                <table class="table product-table my-0 text-center">
                                    <thead>
                                    <tr>
                                        <th scope="col"><?php echo pll__('Año'); ?></th>
                                        <th scope="col"><?php echo pll__('Plan'); ?></th>
                                        <th scope="col"><?php echo pll__('Real'); ?></th>
                                        <th scope="col">%</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php while (have_rows('cumplimientos')) : the_row(); ?>
                                        <tr>
                                            <th><?php echo get_sub_field('anno'); ?></td>
                                            <td><?php echo get_sub_field('plan'); ?></td>
                                            <td><?php echo get_sub_field('real'); ?></td>
                                            <td><?php echo get_sub_field('porciento'); ?></td>
                                        </tr>
                                    <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
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
