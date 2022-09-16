<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

<?php
	$with_comma = isset($with_comma) ? $with_comma : '';
	if( $post_Style == 'breadcrumb-parallax' ):
		the_category(' ');
	elseif( $post_Style == 'overlay' ):
		if($with_comma == 'true'):
			the_category(', ');
		else:
			the_category(' ');
		endif;
	elseif( $post_Style == 'breadcrumb-fixed' ): ?>
    	<div class="category-wrap"><?php
			the_category(' '); ?>
        </div><?php
	elseif( $post_Style == 'overlap' ): ?>
    	<div class="category-wrap">
            <i class="fas fa-folder"> </i>
            <?php the_category(', '); ?>
        </div><?php
	elseif( $post_Style == 'boxed' ): ?>
		<i class="fas fa-folder"> </i>
		<?php the_category(', ');
	else: ?>
		<i class="fas fa-folder"> </i>
		<?php the_category(' ');
	endif; ?>