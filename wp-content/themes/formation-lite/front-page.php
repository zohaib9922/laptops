<?php
/**
 *
 * @package Formation Lite
 *
 */

get_header(); ?>

<?php

/**********
* Slider Sections
**********/
get_template_part('inc/slider');


/**
** Home Page Section
*/
$hidefeat = get_theme_mod( 'format_hide_feat','1' );
if( $hidefeat == '' ){
  echo '<div class="features"><div class="wrapper"><div class="flex">';
    for( $feat = 1; $feat<4; $feat++ ) {
      if( get_theme_mod( 'feat'.$feat,true ) !='' ){
        $feat_query = new WP_Query( array( 'page_id' => get_theme_mod( 'feat'.$feat ) ) );
        while( $feat_query->have_posts() ) : $feat_query->the_post();
		if ( has_post_thumbnail()) {
			$imgSrc = wp_get_attachment_image_src( get_post_thumbnail_id(), 'formation-lite-homepage-thumb');
			$imgUrl = $imgSrc[0];
		}else{
			$imgUrl = get_template_directory_uri().'/images/img_404.png';
		}
		$getfeatthumb = '';
          if( has_post_thumbnail() ){
            $getfeatthumb .= '<div class="features-thumb"><span><img src="'.$imgUrl.'"></span></div><!-- boxes thumb -->';
          }
          echo '<div class="features-box"><div class="inner">'.$getfeatthumb.'<div class="features-content"><h3><a href="'.get_the_permalink().'">'.get_the_title().'</a></h3><p>'.get_the_excerpt().'</p>'.( get_theme_mod('format_feat_more') != '' ? '<a href="'.get_the_permalink().'" class="features-more">'.get_theme_mod('format_feat_more').'</a>':'').'</div><!-- features content --></div><!-- inner --></div><!-- services -->';
        endwhile;
      }
    }
  echo '</div></div></div>';
}

$hideabt = get_theme_mod('format_abt_hide','1');
if( $hideabt == '' ){
  echo '<div class="about-section"><div class="wrapper"><div class="flex flex-center">';
    if( get_theme_mod( 'about_page',true ) !='' ){
      $welcome_query = new WP_Query(array('page_id' => get_theme_mod( 'about_page' )));
      while( $welcome_query->have_posts() ) : $welcome_query->the_post();
        echo '<div class="col"><div class="about-thumb">'.get_the_post_thumbnail().'</div></div><div class="col"><div class="about-content"><h2>'.get_the_title().'</h2><p>'.get_the_excerpt().'</p>'.( get_theme_mod('format_abt_more') != '' ? '<a href="'.get_the_permalink().'" class="about-more"><span>'.get_theme_mod('format_abt_more').'</span></a>':'').'</a></div></div>';
      endwhile;
    }
  echo '</div></div></div>';
}
?>
<div class="main-container">
  <div class="content-area">
    <div class="middle-align content_sidebar">
        <div class="site-main" id="sitemain">
          <?php
            if ( have_posts() ) :
              // Start the Loop.
              while ( have_posts() ) : the_post();
                /*
                * Include the post format-specific template for the content. If you want to
                * use this in a child theme, then include a file called called content-___.php
                * (where ___ is the post format) and that will be used instead.
                */
                get_template_part( 'content-page', get_post_format() );

              endwhile;
                // Previous/next post navigation.
                the_posts_pagination();
                wp_reset_postdata();

              else :
                // If no content, include the "No posts found" template.
                get_template_part( 'no-results' );

            endif;
          ?>
        </div>
        <?php get_sidebar();?>
        <div class="clear"></div>
    </div>
  </div>
<?php get_footer(); ?>