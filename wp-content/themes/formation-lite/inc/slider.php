<?php
if( is_home() || is_front_page() ){
  $hideslider = get_theme_mod( 'disable_slider', '1' );
  if( $hideslider == '' ){
    $format_lite_pages = array();
    for( $bnr=1; $bnr<4; $bnr++ ) {
      $getbnr = absint( get_theme_mod('slider-slide'.$bnr));
      if ( 'page-none-selected' != $getbnr ) {
        $format_lite_pages[] = $getbnr;
      }
    }
    if( !empty($format_lite_pages) ) :
      $args = array(
        'posts_per_page' => 3,
        'post_type' => 'page',
        'post__in' => $format_lite_pages,
        'orderby' => 'post__in'
      );
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) : 
      $bnr = 1;
?>
<div class="home-slider">
  <div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
      <?php
        $i = 0;
        while ( $query->have_posts() ) : $query->the_post();
          $i++;
          $format_lite_slideno[] = $i;
          $format_lite_slidetitle[] = get_the_title();
          $format_lite_slidelink[] = esc_url(get_permalink());
          ?>
          <img src="<?php the_post_thumbnail_url('full'); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" />
          <?php
          $bnr++;
        endwhile;
      ?>
    </div><!-- nivoslider -->

    <?php
      $k = 0;
      foreach( $format_lite_slideno as $format_lite_sln ){ ?>
      <div id="slidecaption<?php echo esc_attr( $format_lite_sln ); ?>" class="nivo-html-caption">
        <?php
          if( get_theme_mod('slide_subheading') != '' ){
            echo '<h4>'.get_theme_mod('slide_subheading').'</h4>';
          }
        ?>
		<div class="sep-bar"></div>
        <h2><a href="<?php echo esc_url($format_lite_slidelink[$k] ); ?>"><?php echo esc_html($format_lite_slidetitle[$k] ); ?></a></h2>
        <?php
          if( get_theme_mod('slide_moretext',__('Learn More','formation-lite') != '' )){
        ?>
          <a class="slide-button" href="<?php echo esc_url($format_lite_slidelink[$k] ); ?>">
            <?php echo esc_html(get_theme_mod('slide_moretext',__('Explore More','formation-lite')));?>
          </a>
        <?php
          }
        ?>
      </div>
      <?php $k++;
      wp_reset_postdata();
      } 
      endif; 
      endif; 
    ?>
  </div><!-- slider wrapper -->
</div><!-- home-slider -->
<?php  }
}