<?php
//Shortcodes for Visual Composer

add_action( 'vc_before_init', 'furnilife_vc_shortcodes' );
function furnilife_vc_shortcodes() {
	
	//Site logo
	vc_map( array(
		'name' => esc_html__( 'Logo', 'furnilife'),
		'base' => 'roadlogo',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'),
		'params' => array(
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Logo Link?', 'furnilife' ),
				'param_name' => 'logo_link',
				'value' => array(
					'Yes'	=> 'yes',
					'No'	=> 'no',
				),
			),
		)
	) );

	//Main Menu
	vc_map( array(
		'name' => esc_html__( 'Main Menu', 'furnilife'),
		'base' => 'roadmainmenu',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'),
		'params' => array(
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Upload sticky logo image', 'furnilife' ),
				'param_name' => 'sticky_logoimage',
				'value' => '',
			),
		)
	) );

	//Categories Menu
	vc_map( array(
		'name' => esc_html__( 'Categories Menu', 'furnilife'),
		'base' => 'roadcategoriesmenu',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'),
		'params' => array(
		)
	) );

	//Language Currency Switcher
	vc_map( array(
		'name' => esc_html__( 'Language, Currency Switcher', 'furnilife'),
		'base' => 'roadlangswitch',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'),
		'params' => array(
		)
	) );

	//Date time sale
	vc_map( array(
		'name' => esc_html__( 'Countdown time', 'furnilife'),
		'base' => 'roadtimesale',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'), 
	) );

	//Social Icons
	vc_map( array(
		'name' => esc_html__( 'Social Icons', 'furnilife'),
		'base' => 'roadsocialicons',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'),
		'params' => array(
		)
	) );

	//Mini Cart
	vc_map( array(
		'name' => esc_html__( 'Mini Cart', 'furnilife'),
		'base' => 'roadminicart',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'),
		'params' => array(
		)
	) );

	//Products Search
	vc_map( array(
		'name' => esc_html__( 'Product Search', 'furnilife'),
		'base' => 'roadproductssearch',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'),
		'params' => array(
		)
	) );

	//Copyright
	// vc_map( array(
	// 	'name' => esc_html__( 'Copyright information', 'furnilife'),
	// 	'base' => 'roadcopyright',
	// 	'class' => '',
	// 	'category' => esc_html__( 'Theme', 'furnilife'),
	// 	'params' => array(
	// 	)
	// ) );
	//Brand logos
	vc_map( array(
		'name' => esc_html__( 'Brand Logos', 'furnilife' ),
		'base' => 'ourbrands',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of columns', 'furnilife' ),
				'param_name' => 'colsnumber',
				'value' => esc_html__( '6', 'furnilife' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of rows', 'furnilife' ),
				'param_name' => 'rowsnumber',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
					),
			),
		)
	) ); 
	//Categories carousel
	vc_map( array(
		'name' => esc_html__( 'Categories Carousel', 'furnilife' ),
		'base' => 'categoriescarousel',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of columns', 'furnilife' ),
				'param_name' => 'colsnumber',
				'value' => esc_html__( '6', 'furnilife' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of rows', 'furnilife' ),
				'param_name' => 'rowsnumber',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
					),
			),
		)
	) );
	
	//MailPoet Newsletter Form
	vc_map( array(
		'name' => esc_html__( 'Newsletter Form (MailPoet)', 'furnilife' ),
		'base' => 'wysija_form',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Form ID', 'furnilife' ),
				'param_name' => 'id',
				'value' => '',
				'description' => esc_html__( 'Enter form ID here', 'furnilife' ),
			),
		)
	) );
	
	//Latest posts
	vc_map( array(
		'name' => esc_html__( 'Latest posts', 'furnilife' ),
		'base' => 'latestposts',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of posts', 'furnilife' ),
				'param_name' => 'posts_per_page',
				'value' => esc_html__( '5', 'furnilife' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Image scale', 'furnilife' ),
				'param_name' => 'image',
				'value' => array(
						'Wide'	=> 'wide',
						'Square'	=> 'square',
					),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Excerpt length', 'furnilife' ),
				'param_name' => 'length',
				'value' => esc_html__( '20', 'furnilife' ),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of columns', 'furnilife' ),
				'param_name' => 'colsnumber',
				'value' => esc_html__( '4', 'furnilife' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of rows', 'furnilife' ),
				'param_name' => 'rowsnumber',
				'value' => array(
						'1'	=> '1',
						'2'	=> '2',
						'3'	=> '3',
						'4'	=> '4',
					),
			),
		)
	) );
	
	//Testimonials
	vc_map( array(
		'name' => esc_html__( 'Testimonials', 'furnilife' ),
		'base' => 'woothemes_testimonials',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number of testimonial', 'furnilife' ),
				'param_name' => 'limit',
				'value' => esc_html__( '10', 'furnilife' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Display Author', 'furnilife' ),
				'param_name' => 'display_author',
				'value' => array(
					'Yes'	=> 'true',
					'No'	=> 'false',
				),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Display Avatar', 'furnilife' ),
				'param_name' => 'display_avatar',
				'value' => array(
					'Yes'	=> 'true',
					'No'	=> 'false',
				),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Avatar image size', 'furnilife' ),
				'param_name' => 'size',
				'value' => '',
				'description' => esc_html__( 'Avatar image size in pixels. Default is 50', 'furnilife' ),
			),
			array(
				'type' => 'dropdown',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Display URL', 'furnilife' ),
				'param_name' => 'display_url',
				'value' => array(
					'Yes'	=> 'true',
					'No'	=> 'false',
				),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Category', 'furnilife' ),
				'param_name' => 'category',
				'value' => esc_html__( '0', 'furnilife' ),
				'description' => esc_html__( 'ID/slug of the category. Default is 0', 'furnilife' ),
			),
		)
	) );
	
	
	//Rotating tweets
	vc_map( array(
		'name' => esc_html__( 'Rotating tweets', 'furnilife' ),
		'base' => 'rotatingtweets',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Twitter user name', 'furnilife' ),
				'param_name' => 'screen_name',
				'value' => '',
			),
		)
	) );

	//Twitter feed
	vc_map( array(
		'name' => esc_html__( 'Twitter feed', 'furnilife' ),
		'base' => 'AIGetTwitterFeeds',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'),
		'params' => array(
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Your Twitter Name(Without the "@" symbol)', 'furnilife' ),
				'param_name' => 'ai_username',
				'value' => '',
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number Of Tweets', 'furnilife' ),
				'param_name' => 'ai_numberoftweets',
				'value' => '',
			),
			// array(
			// 	'type' => 'textfield',
			// 	'holder' => 'div',
			// 	'class' => '',
			// 	'heading' => esc_html__( 'Your Title', 'furnilife' ),
			// 	'param_name' => 'ai_tweet_title',
			// 	'value' => '',
			// ),
		)
	) );
	 
	
	//Counter
	vc_map( array(
		'name' => esc_html__( 'Counter', 'furnilife' ),
		'base' => 'furnilife_counter',
		'class' => '',
		'category' => esc_html__( 'Theme', 'furnilife'),
		'params' => array(
			array(
				'type' => 'attach_image',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Image icon', 'furnilife' ),
				'param_name' => 'image',
				'value' => '',
				'description' => esc_html__( 'Upload icon image', 'furnilife' ),
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Number', 'furnilife' ),
				'param_name' => 'number',
				'value' => '',
			),
			array(
				'type' => 'textfield',
				'holder' => 'div',
				'class' => '',
				'heading' => esc_html__( 'Text', 'furnilife' ),
				'param_name' => 'text',
				'value' => '',
			),
		)
	) );
}
?>