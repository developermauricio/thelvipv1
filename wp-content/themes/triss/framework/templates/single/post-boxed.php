<?php
	$format = !empty( $Post_Meta['post-format-type'] ) ? $Post_Meta['post-format-type'] : 'standard';

	$template = 'framework/templates/single/entry-image.php';
	$template_args['post_ID'] = $ID;
	$template_args['meta'] = $Post_Meta;
	$template_args['post_Style'] = $Post_Style; ?>

    <!-- Featured Image -->
    <div class="entry-thumb single-preview-img">
        <div class="blog-image">
			<?php triss_get_template( $template, $template_args ); ?>
        </div>

		<div class="entry-details">

			<?php
			$template = 'framework/templates/single/entry-date.php'; ?>
			<!-- Entry Date -->
			<div class="entry-date">
				<i class="far fa-calendar-alt"></i>
				<?php triss_get_template( $template, $template_args ); ?>
			</div><!-- Entry Date -->

			<?php
			$template = 'framework/templates/single/entry-content.php';
			triss_get_template( $template );
			?>

		</div>

		<div class="entry-boxed">
            <div class="entry-bottom-details">

				<?php
				// Getting values from theme options...
				$template = 'framework/templates/single/entry-elements-loop.php';
				$template_args['ID'] = $ID;
				$template_args['Post_Style'] = $Post_Style;
				$template_args['Post_Meta'] = $Post_Meta;

				triss_get_template( $template, $template_args ); ?>

            </div>
        </div>

		<?php
//		$template = 'framework/templates/single/entry-commentbox.php';
		//triss_get_template( $template, $template_args );
		?>

    </div><!-- Featured Image -->