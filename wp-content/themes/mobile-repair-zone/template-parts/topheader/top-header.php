<?php
/**
 * Displays main header
 *
 * @package Mobile Repair Zone
 */
?>

<div class="top_header py-2 text-center text-md-left">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 align-self-center">
                <div class="navbar-brand">
                    <?php if ( has_custom_logo() ) : ?>
                        <div class="site-logo"><?php the_custom_logo(); ?></div>
                    <?php endif; ?>
                    <?php $blog_info = get_bloginfo( 'name' ); ?>
                        <?php if ( ! empty( $blog_info ) ) : ?>
                            <?php if ( is_front_page() && is_home() ) : ?>
                            <?php if( get_theme_mod('mobile_repair_zone_logo_title',true) != ''){ ?>
                                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php }?>
                            <?php else : ?>
                                <?php if( get_theme_mod('mobile_repair_zone_logo_title',true) != ''){ ?>
                                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                                 <?php }?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php
                            $description = get_bloginfo( 'description', 'display' );
                            if ( $description || is_customize_preview() ) :
                        ?>
                        <?php if( get_theme_mod('mobile_repair_zone_logo_text',true) != ''){ ?>
                            <p class="site-description"><?php echo esc_html($description); ?></p>
                        <?php }?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 align-self-center text-center text-md-right">
                <?php if(get_theme_mod('mobile_repair_zone_location') != ''){ ?>
                    <span class="mr-3"><i class="fas fa-map-marker-alt mr-3"></i><?php echo esc_html(get_theme_mod('mobile_repair_zone_location','')); ?></span>
                <?php }?>
                <?php if(get_theme_mod('mobile_repair_zone_email') != ''){ ?>
                    <span class="mr-3"><i class="fas fa-envelope mr-3"></i><?php echo esc_html(get_theme_mod('mobile_repair_zone_email','')); ?></span>
                <?php }?>
                <?php if(get_theme_mod('mobile_repair_zone_phone') != ''){ ?>
                    <span><i class="fas fa-phone mr-3"></i><?php echo esc_html(get_theme_mod('mobile_repair_zone_phone','')); ?></span>
                <?php }?>
            </div>
        </div>
    </div>
</div>