<section class="intro" style="background: url('<?php _e( get_theme_mod( 'scis_splash_image' ) ); ?>') no-repeat bottom center fixed ;">
<div class="intro-body content-section">
<div class="container">
<div class="row">
<div class="col-md-12">

<?php
//will use variables for tagline and intro, and set on the theme options page.
?>
<p class="brand-heading"><?php _e( get_theme_mod( 'scis_splash_title' ) ); ?></p>
<p class="brand-sub-heading"><?php _e( get_theme_mod( 'scis_splash_subtitle' ) ); ?></p>

<?php
//Hard-coded
?>
</div>
</div>
</div>
</div>
</section>
<section class="container content-section text-center" id="about">
<div class="row">
<div class="col-lg-8 col-lg-offset-2">

<?php if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
    include( get_page_template() );
} ?>

</div>
</div>
</section>
<?php
//end Front Page Template.
?>
