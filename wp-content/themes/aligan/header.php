<?php
/**
 * Header file for the Padit theme.
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<?php
wp_body_open();
?>
<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light custom-shadow">
        <div class="container">
            <a class="navbar-brand col-6 mx-0 col-md-4 text-left" href="<?php echo home_url(esc_html('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/core/assets/img/logo.jpg" class="d-inline-block align-top" alt="">
            </a>

            <button class="navbar-toggler col-2 border-0" type="button" data-toggle="collapse"
                    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon icon-menu"></span>
            </button>

            <div class="collapse navbar-collapse col-md-8" id="navbarNav">
                <div
                        class="d-flex flex-column flex-md-row justify-content-between align-items-md-center  pl-2 w-100">

					<?php wp_nav_menu( array( 'theme_location' => 'main_menu', 'container'=>'', 'menu_class' => 'navbar-nav' ) ); ?>

                    <div class="social flex-grow-1 flex-md-grow-0 align-items-end">
                        <div class="d-flex justify-content-between">
                            <div class="d-flex search-container mx-3">
                                <i class="mx-2 icon icon-search"></i>
                                <form role="search" method="post" id="aligan-search-form" class="search-form">
                                    <input id="pageSearch" name="search" class="search" type="search" placeholder="<?php echo pll__('Buscador'); ?>">
		                            <?php wp_nonce_field('search_action'); ?>
                                </form>

                            </div>
                            <div class="activeLanguage">
	                            <?php dynamic_sidebar( 'idioma' ); ?>
                            </div>
                        </div>

                        <div>
	                        <?php while (have_rows('redes_sociales','options')) : the_row(); ?>
			                        <?php $link = get_sub_field('url');
			                        $link_class = get_sub_field('clase');
			                        $link_title = get_sub_field('nombre');
			                        ?>
                                    <a title="<?php echo $link_title; ?>" href="<?php echo $link; ?>" target="blank"><i class="mx-2 icon icon-small icon-<?php echo $link_class; ?>"></i></a>
	                        <?php endwhile; ?>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </nav>
</header>
