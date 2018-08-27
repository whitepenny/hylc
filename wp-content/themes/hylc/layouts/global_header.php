
<div class="masthead">
    <div class="header-logo">
        <?php 
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>
        
        <a href="/">
        <img src="<?php echo $logo['0']; ?>" alt="">
        </a>
    </div>

    <nav id="site-navigation" class="main-navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'menu_id' => 'primary-menu' ) ); ?>
    </nav>


    <div class="header-social">
        <?php get_template_part( 'social-menu' ); ?>
    </div>

</div>



<div class="mobile-nav-trigger mobile_nav_handle">
    <i class="fa fa-lg fa-bars"></i>
</div>