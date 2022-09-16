    <?php
        /**
         * triss_hook_content_after hook.
         * 
         */
        do_action( 'triss_hook_content_after' );
    ?>

        <!-- **Footer** -->
        <footer id="footer">
            <div class="container">
            <?php
                /**
                 * triss_footer hook.
                 * 
                 * @hooked triss_vc_footer_template - 10
                 *
                 */
                do_action( 'triss_footer' );
            ?>
            </div>
        </footer><!-- **Footer - End** -->

    </div><!-- **Inner Wrapper - End** -->
        
</div><!-- **Wrapper - End** -->
<?php
    
    do_action( 'triss_hook_bottom' );

    wp_footer();
?>
</body>
</html>