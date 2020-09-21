<?php

/**
 * The template for displaying the footer
 */

?>

<section class="contact pt-md-5 pb-md-2">
    <div class="container contact-container">
        <div class="row">
            <div class="col-12 col-md-4 mb-2 d-flex justify-content-center justify-content-md-end">
				<?php if(!empty(get_field('titulo_contactenos','options'))): ?>
                    <h1 class="call-text font-weight-bold"><?php echo get_field('titulo_contactenos','options'); ?></h1>
				<?php endif; ?>
            </div>
            <div class="col-12 col-md-7">
                <div class="contact-card px-0 py-2">
                    <ul class="contact-list-info px-3 px-md-5 py-4 py-md-0">
						<?php if(!empty(get_field('direccion_contactenos','options'))): ?>
                            <li class="d-flex align-items-md-center align-items-start flex-column flex-md-row mb-4 mb-md-0">
                                <i class="icon icon-map mr-4"></i> <span><?php echo get_field('direccion_contactenos','options'); ?></span>
                            </li>
						<?php endif; ?>
						<?php if(!empty(get_field('telefono_contactenos','options'))): ?>
                            <li class="d-flex align-items-md-center align-items-start flex-column flex-md-row mb-4 mb-md-0">
                                <i class="icon icon-phone mr-4"></i> <span><?php echo get_field('telefono_contactenos','options'); ?></span>
                            </li>
						<?php endif; ?>
						<?php if(!empty(get_field('correo_contactenos','options'))): ?>
                            <li class="d-flex align-items-md-center align-items-start flex-column flex-md-row mb-4 mb-md-0">
                                <i class="icon icon-email mr-4"></i> <span><?php echo get_field('correo_contactenos','options'); ?></span>
                            </li>
						<?php endif; ?>
                    </ul>
                    <div class="d-flex justify-content-end mx-3 my-2 px-md-5 align-items-center">
						<?php if(!empty(get_field('redes_contactenos','options'))): ?>
                            <span class="mr-4"><?php echo get_field('redes_contactenos','options'); ?></span>
						<?php endif; ?>
						<?php while (have_rows('redes_sociales','options')) : the_row(); ?>
							<?php $link = get_sub_field('url');
							$link_class = get_sub_field('clase');
							$link_title = get_sub_field('nombre');
							?>
                            <a title="<?php echo $link_title; ?>" href="<?php echo $link; ?>" target="blank"><i class="mx-2 icon icon-small icon-white icon-<?php echo $link_class; ?>"></i></a>
						<?php endwhile; ?><p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <nav class="navbar p-0 mt-4 mx-0">
        <div class="container py-2 px-0 justify-content-center">
            <hr class="text-muted d-none w-100 d-md-block">
            <div class="logo-container d-flex flex-row">
                <div class="bg-primary d-block d-sm-none"></div>
                <a class="ml-3 navbar-brand footer-logo text-center" href="<?php echo home_url(esc_html('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/core/assets/img/logo.jpg" class="d-inline-block align-top" alt="">
                </a>
                <div class="bg-primary d-block d-sm-none d-flex justify-content-end align-items-center">
                    <span class="scrollTop"> <i class="icon icon-top"></i> </span>
                </div>
            </div>

            <div class="d-md-flex flex-grow-1 flex-md-grow-0 px-5 ">
	            <?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container'=>'', 'menu_class' => 'navbar-nav flex-column flex-md-row w-100 justify-content-around justify-content-md-start' ) ); ?>
            </div>
        </div>

        <div class="container-fluid m-0 justify-content-center footer-bottom">
            <p class="m-0"> <?php echo get_field('texto_pie_de_pagina', 'options')?> </p>
        </div>
    </nav>
</footer>
<?php wp_footer(); ?>
</body>
</html>
