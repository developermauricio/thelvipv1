<?php
if ( post_password_required() ) {
	return;
}?>

<div id="comments" class="comments-area"><?php
	if ( have_comments() ) : ?>

	    <h3><?php comments_number(esc_html__('No Comments','triss'), esc_html__('Comments ( 1 )','triss'), esc_html__('Comments ( % )','triss') );?></h3>

		<?php the_comments_navigation(); ?>

		<ul class="commentlist">
     		<?php wp_list_comments( array( 'avatar_size' => 50 ) ); ?>
        </ul>

        <?php the_comments_navigation();

    endif;

	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="nocomments"><?php esc_html_e( 'Comments are closed.','triss'); ?></p><?php
    endif;

    $fields =  array(
        "author" => "<div class='column dt-sc-one-half first'><p class='comment-form-author'><input id='author' name='author' type='text' placeholder='".__("Name","triss")."' required /></p></div>",
        "email"  => "<div class='column dt-sc-one-half'><p class='comment-form-email'><input id='email' name='email' type='text' placeholder='".__("Email","triss")."' required /></p></div>",
    );

    $comment_field = '<div class="column dt-sc-one-column first"><textarea id="comment" name="comment" cols="5" rows="3" placeholder="'.esc_attr__('Comment', 'triss').'" ></textarea></div>';

    function dt_move_comment_field_to_bottom( $fields ) {
    
        if( cs_get_option('privacy-commentform') == "true" ) {

            $content = do_shortcode( cs_get_option('privacy-commentform-msg') );
    
            $fields['comment-form-dt-privatepolicy'] = '<p class="comment-form-dt-privatepolicy">
                <input id="comment-form-dt-privatepolicy" name="comment-form-dt-privatepolicy" type="checkbox" value="yes">
                <label for="comment-form-dt-privatepolicy">'.$content.'</label> </p>';
        }

        return $fields;
    }
     
   add_filter( 'comment_form_fields', 'dt_move_comment_field_to_bottom' );

    
    ?>

	<!-- Comment Form -->
	<?php if ('open' == $post->comment_status) : 
            
                $comments_args = array(
                    'title_reply' => esc_html__( 'Leave A Reply','triss' ),
                    'fields'               => $fields,
                    'comment_field'=> $comment_field
                   );     
                    
	comment_form($comments_args);?>
    <?php endif; ?></div><!-- .comments-area -->
