<?php
/**
 * Formation Lite Theme Customizer
 *
 * @package Formation Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function formation_lite_customize_register( $wp_customize ) {
	
function formation_lite_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
	$wp_customize->get_setting( 'blogname' )->formation_lite         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->formation_lite  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
	    'selector' => '.site-title a',
	    'render_callback' => 'formation-lite_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
	    'selector' => '.site-title p',
	    'render_callback' => 'formation-lite_customize_partial_blogdescription',
	) );

	$wp_customize->add_setting('format_headerbg-color', array(
		'default' => '#ffffff',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'format_headerbg-color',array(
			'label' => __('Header Background color','formation-lite'),
			'description'	=> __('Select background color for header.','formation-lite'),
			'section' => 'colors',
			'settings' => 'format_headerbg-color'
		))
	);
		
	$wp_customize->add_setting('format_color_scheme', array(
		'default' => '#1872C5',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'format_color_scheme',array(
			'label' => __('Color Scheme','formation-lite'),
			'description'	=> __('Select theme main color from here.','formation-lite'),
			'section' => 'colors',
			'settings' => 'format_color_scheme'
		))
	);
	
	$wp_customize->add_setting('format_footer-color', array(
		'default' => '#152545',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'format_footer-color',array(
			'label' => __('Footer Background color','formation-lite'),
			'description'	=> __('Select background color for footer.','formation-lite'),
			'section' => 'colors',
			'settings' => 'format_footer-color'
		))
	);

	/**
	**	Header Information
	**/
	$wp_customize->add_section(
        'format_tp_head',
        array(
            'title' => __('Top Header Bar', 'formation-lite'),
            'priority' => null,
			'description'	=> __('Add information for top header here.','formation-lite'),	
        )
    );

    $wp_customize->add_setting('format_tphead_mail',array(
		'sanitize_callback'	=> 'sanitize_text_field',
		'transport' => 'refresh'
	));
	
	$wp_customize->add_control('format_tphead_mail',array(
		'type'	=> 'text',
		'label'	=> __('Add E-mail address here','formation-lite'),
		'section'	=> 'format_tp_head'
	));
	
	$wp_customize->selective_refresh->add_partial('format_tphead_mail', array(
        'selector' => '.header-top-left'
    ));

	$wp_customize->add_setting('format_tphead_phn',array(
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('format_tphead_phn',array(
		'type'	=> 'text',
		'label'	=> __('Add phone number here','formation-lite'),
		'section'	=> 'format_tp_head'
	));

	$wp_customize->add_setting('format_tphead_hrs',array(
		'sanitize_callback'	=> 'sanitize_text_field',
		'transport' => 'refresh'
	));
	
	$wp_customize->add_control('format_tphead_hrs',array(
		'type'	=> 'text',
		'label'	=> __('Add working hours here','formation-lite'),
		'section'	=> 'format_tp_head'
	));
	
	$wp_customize->selective_refresh->add_partial('format_tphead_hrs', array(
        'selector' => '.header-top-right'
    ));
	
	$wp_customize->add_setting('format_tphead_fb',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('format_tphead_fb',array(
		'type'	=> 'url',
		'label'	=> __('Add Facebook link here.','formation-lite'),
		'section'	=> 'format_tp_head'
	));
	
	$wp_customize->add_setting('format_tphead_tw',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('format_tphead_tw',array(
		'type'	=> 'url',
		'label'	=> __('Add Twitter link here.','formation-lite'),
		'section'	=> 'format_tp_head'
	));

	$wp_customize->add_setting('format_tphead_yt',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('format_tphead_yt',array(
		'type'	=> 'url',
		'label'	=> __('Add Youtube link here.','formation-lite'),
		'section'	=> 'format_tp_head'
	));

	$wp_customize->add_setting('format_tphead_in',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('format_tphead_in',array(
		'type'	=> 'url',
		'label'	=> __('Add Linkedin link here.','formation-lite'),
		'section'	=> 'format_tp_head'
	));

	$wp_customize->add_setting('format_tphead_pin',array(
		'sanitize_callback'	=> 'esc_url_raw'
	));

	$wp_customize->add_control('format_tphead_pin',array(
		'type'	=> 'url',
		'label'	=> __('Add Pinterest link here.','formation-lite'),
		'section'	=> 'format_tp_head'
	));

	$wp_customize->add_setting('disable_tpbr',array(
		'default' => true,
		'sanitize_callback' => 'formation_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control( 'disable_tpbr', array(
		'settings' => 'disable_tpbr',
		'section'   => 'format_tp_head',
		'label'     => __('Check this to hide section.','formation-lite'),
		'type'      => 'checkbox'
    ));
	 
	
	/**
	**	Slider Start
	**/
	$wp_customize->add_section(
        'slider_rotator',
        array(
            'title' => __('Slider', 'formation-lite'),
            'priority' => null,
			'description'	=> __('Recommended image size (1420x720). Slider will work only when you select the static front page.','formation-lite'),	
        )
    );

    $wp_customize->add_setting('slide_subheading',array(
		'default'	=> __('','formation-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('slide_subheading',array(
		'label'	=> __('Add slide sub heading text.','formation-lite'),
		'section'	=> 'slider_rotator',
		'setting'	=> 'slide_subheading',
		'type'	=> 'text'
	));

    $wp_customize->add_setting('slider-slide1',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('slider-slide1',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for slide one:','formation-lite'),
		'section'	=> 'slider_rotator'
	));

	$wp_customize->add_setting('slider-slide2',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('slider-slide2',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for slide two:','formation-lite'),
		'section'	=> 'slider_rotator'
	));

	$wp_customize->add_setting('slider-slide3',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('slider-slide3',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for slide three:','formation-lite'),
		'section'	=> 'slider_rotator'
	));

	$wp_customize->add_setting('slide_moretext',array(
		'default'	=> __('','formation-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('slide_moretext',array(
		'label'	=> __('Add slider button text.','formation-lite'),
		'section'	=> 'slider_rotator',
		'setting'	=> 'slide_moretext',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('disable_slider',array(
		'default' => true,
		'sanitize_callback' => 'formation_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	)); 

	$wp_customize->add_control( 'disable_slider', array(
	   'settings' => 'disable_slider',
	   'section'   => 'slider_rotator',
	   'label'     => __('Check this to hide slider.','formation-lite'),
	   'type'      => 'checkbox'
    ));
	
	
	/**
	**	Homepage Sections
	**/
	$wp_customize->add_section(
        'format_feat_sec',
        array(
            'title' => __('First Section', 'formation-lite'),
            'priority' => null,
			'description'	=> __('Select pages for display content in homepage. This section will be displayed only when you select the static front page.','formation-lite'),	
        )
    );

    $wp_customize->add_setting('feat1',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('feat1',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for first box','formation-lite'),
		'section'	=> 'format_feat_sec'
	));

	$wp_customize->add_setting('feat2',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('feat2',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for second box','formation-lite'),
		'section'	=> 'format_feat_sec'
	));
	
	$wp_customize->add_setting('feat3',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('feat3',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for third box','formation-lite'),
		'section'	=> 'format_feat_sec'
	));
	
	$wp_customize->add_setting('format_feat_more',array(
		'default'	=> __('','formation-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('format_feat_more',array(
		'label'	=> __('Add read more button text.','formation-lite'),
		'section'	=> 'format_feat_sec',
		'setting'	=> 'format_feat_more',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('format_hide_feat',array(
		'default' => true,
		'sanitize_callback' => 'formation_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'format_hide_feat', array(
		'settings' => 'format_hide_feat',
		'section'   => 'format_feat_sec',
		'label'     => __('Check this to hide section.','formation-lite'),
		'type'      => 'checkbox'
    ));
	
	
	/**
	**	Setting up HomePage
	**/
	$wp_customize->add_section(
        'format_abt_sec',
        array(
            'title' => __('Second Section', 'formation-lite'),
            'priority' => null,
			'description'	=> __('Select page for display content in homepage. This section will be displayed only when you select the static front page.','formation-lite'),	
        )
    );

    $wp_customize->add_setting('about_page',array(
		'default' => '0',
		'capability' => 'edit_theme_options',
		'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('about_page',array(
		'type'	=> 'dropdown-pages',
		'label'	=> __('Select page for second section','formation-lite'),
		'section'	=> 'format_abt_sec'
	));

	$wp_customize->add_setting('format_abt_more',array(
		'default'	=> __('Read More','formation-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('format_abt_more',array(
		'label'	=> __('Add read more button text.','formation-lite'),
		'section'	=> 'format_abt_sec',
		'setting'	=> 'format_abt_more',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('format_abt_hide',array(
		'default' => true,
		'sanitize_callback' => 'formation_lite_sanitize_checkbox',
		'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'format_abt_hide', array(
		'settings' => 'format_abt_hide',
		'section'   => 'format_abt_sec',
		'label'     => __('Check this to hide section.','formation-lite'),
		'type'      => 'checkbox'
     ));
}
add_action( 'customize_register', 'formation_lite_customize_register' );	

function formation_lite_css(){ ?>
	<style>
		#header,
		.sitenav ul li.menu-item-has-children:hover > ul,
		.sitenav ul li.menu-item-has-children:focus > ul,
		.sitenav ul li.menu-item-has-children.focus > ul{
			background-color:<?php echo esc_attr(get_theme_mod('format_headerbg-color','#ffffff')); ?>;
		}		
		.header-top,
		.nivo-directionNav a,
		.features-thumb,
		.about-content a.about-more,
		h3.widget-title,
		.nav-links .current,
		.nav-links a:hover,
		p.form-submit input[type="submit"]{
			background-color:<?php echo esc_attr(get_theme_mod('format_color_scheme','#1872C5')); ?>;
		}
		a, 
		.tm_client strong,
		.postmeta a:hover,
		#sidebar ul li a:hover,
		.blog-post h3.entry-title,
		a.blog-more:hover,
		#commentform input#submit,
		input.search-submit,
		.blog-date .date,
		.sitenav ul li.current_page_item a,
		.sitenav ul li a:hover,
		.sitenav ul li.current_page_item ul li a:hover{
			color:<?php echo esc_attr(get_theme_mod('format_color_scheme','#1872C5')); ?>;
		}
		a.features-more:before,
		a.features-more:after{
			border-color:<?php echo esc_attr(get_theme_mod('format_color_scheme','#1872C5')); ?>;
		}		
		.copyright-wrapper{
			background-color:<?php echo esc_attr(get_theme_mod('format_footer-color','#152545')); ?>;
		}
	</style>
<?php }
add_action('wp_head','formation_lite_css');

function formation_lite_customize_preview_js() {
	wp_enqueue_script( 'formation-lite-customize-preview', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20141216', true );
}
add_action( 'customize_preview_init', 'formation_lite_customize_preview_js' );