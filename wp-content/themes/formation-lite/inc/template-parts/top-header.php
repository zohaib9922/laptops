<?php
/* store values into variables */
$hide_tphead = get_theme_mod('disable_tpbr',true);

$gettp_mail = esc_html(get_theme_mod('format_tphead_mail'));
$gettp_phn = esc_html(get_theme_mod('format_tphead_phn'));
$gettp_hrs = esc_html(get_theme_mod('format_tphead_hrs'));

$gettpbrfb = get_theme_mod('format_tphead_fb');
$gettpbrtw = get_theme_mod('format_tphead_tw');
$gettpbryt = get_theme_mod('format_tphead_yt');
$gettpbrin = get_theme_mod('format_tphead_in');
$gettpbrpi = get_theme_mod('format_tphead_pin');

if( $hide_tphead == '' ){
	echo '<div class="header-top"><div class="wrapper"><div class="flex">';
		if( !empty ( $gettp_mail || $gettp_phn ) ){
			echo '<div class="header-top-left">';
				if( !empty ( $gettp_mail ) ){
					echo '<span class="top-col has-icon"><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:'.$gettp_mail.'">'.$gettp_mail.'</a></span>';
				}if( !empty ( $gettp_phn ) ){
					echo '<span class="top-col has-icon"><i class="fa fa-phone" aria-hidden="true"></i>'.esc_html($gettp_phn).'</span>';
				}
			echo '</div>';
		} if( !empty ( $gettp_hrs || $gettpbrfb || $gettpbrtw || $gettpbryt || $gettpbrin || $gettpbrpi ) ){
			echo '<div class="header-top-right">';
				if( !empty ( $gettp_hrs ) ){
					echo '<span class="top-col has-icon"><i class="fa fa-clock-o" aria-hidden="true"></i>'.esc_html($gettp_hrs).'</span>';
				} if( !empty ( $gettpbrfb || $gettpbrtw || $gettpbryt || $gettpbrin || $gettpbrpi ) ){
					echo '<span class="top-col has-social">';
						if( !empty( $gettpbrfb ) ){
							echo '<a href="'.esc_url( $gettpbrfb ).'" target="_blank" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
						}
						if( !empty( $gettpbrtw ) ){
							echo '<a href="'.esc_url( $gettpbrtw ).'" target="_blank" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
						}
						if( !empty( $gettpbryt ) ){
							echo '<a href="'.esc_url( $gettpbryt ).'" target="_blank" title="YouTube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>';
						}
						if( !empty( $gettpbrin ) ){
							echo '<a href="'.esc_url( $gettpbrin ).'" target="_blank" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
						}
						if( !empty( $gettpbrpi ) ){
							echo '<a href="'.esc_url( $gettpbrpi ).'" target="_blank" title="Pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>';
						}
					echo '</span>';
				}
			echo '</div>';
		}
	echo '</div></div></div>';
} 
?>