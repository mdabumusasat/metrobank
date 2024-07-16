<?php
$options = metrobank_WSH()->option();
$allowed_html = wp_kses_allowed_html( 'post' );
$image_logo = $options->get( 'image_normal_logo' );
$logo_dimension = $options->get( 'normal_logo_dimension2' );
$logo_type = '';
$logo_text = '';
$logo_typography = '';
global $wp_query;
$page_id = ( $wp_query->is_posts_page ) ? $wp_query->queried_object->ID : get_the_ID();
$options = metrobank_WSH()->option();
?>

<?php metrobank_template_load( 'templates/footer/footer.php', compact( 'page_id' ) );?>

<?php if(!$options->get( 'to_top' ) ):?>
<!-- scroll to top -->

<div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go To Top</div>
                </div>
            </div>
        </div>
<?php endif; ?>
<!--Search Popup-->
</main>
<?php wp_footer(); ?>
</body>
</html>
