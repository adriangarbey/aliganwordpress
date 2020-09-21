<?php
/**
 * Created by PhpStorm.
 * User: Nodelvis
 * Date: 16-Jan-20
 * Time: 7:30 PM
 */

?>
<div class="search-item">
    <div class="search-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
    <div class="search-summary">
        <?php echo $post_summary = get_the_excerpt($post_ID); ?>...<span class="search-more-link"><a class="more-link" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php echo pll__('Ver más'); ?></a></span>
    </div>
</div>

