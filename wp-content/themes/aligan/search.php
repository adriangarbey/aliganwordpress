<?php

get_header(); ?>
<section id="search-content" class="search-content">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-content">
                    <div class="page-title">
                        <h1><?php echo pll__('Resultados de búsqueda'); ?></h1>
                    </div>
                    <?php if (have_posts()) : ?>
			                    <?php if (have_posts()) : ?>
				                    <?php
				                    while (have_posts()) : the_post();
					                    get_template_part('templates/content', 'search');
				                    endwhile;
				                    the_posts_pagination(array(
					                    'prev_text' => pll__('Anterior'),
					                    'next_text' => pll__('Siguiente'),
					                    'before_page_number' => '',
				                    ));
			                    endif;
			                    ?>
                    <?php else :  ?>
                        <div class="search-empty"><p><?php echo pll__('No se han encontrado resultados.'); ?></p></div>
                    <?php endif; ?>
            </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
