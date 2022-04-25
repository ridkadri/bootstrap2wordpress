<?php

if (!class_exists('Kirki')) {
    return;
}

//PANELS

new \Kirki\Panel(
	'b2w_theme_options_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'B2W Theme Options', 'b2w'  ),
		'description' => esc_html__( 'Use this to customize the B2W Theme', 'b2w' ),
	]
);

//SECTIONS
//Section -- Subscribe Bar

new \Kirki\Section(
	'b2w_subscribe_bar',
	[
		'title'       => esc_html__( 'Subscribe Bar', 'b2w' ),
		'description' => esc_html__( 'This is the Subscribe bar', 'b2w' ),
		'panel'       => 'b2w_theme_options_panel',
		'priority'    => 160,
	]
);

// Section -- Subscribe Bar -- Fields

new \Kirki\Field\Textarea(
	[
		'settings'    => 'subscribe_text',
		'label'       => esc_html__( 'Text Block', 'b2w' ),
		'section'     => 'b2w_subscribe_bar',
		'default'     => esc_html__( 'This is a default value', 'b2w' ),
	]
);


new \Kirki\Field\Code(
	[
		'settings'    => 'subscribe_form',
		'label'       => esc_html__( 'Subscribe Form HTML', 'b2w' ),
		'description' => esc_html__( 'Embed HTML from your preferred email marketing tool', 'b2w' ),
		'section'     => 'b2w_subscribe_bar',
		'default'     => '',
		'choices'     => [
			'language' => 'html',
		],
	]
);

// Section -- Footer

new \Kirki\Section(
	'b2w_footer_section',
	[
		'title'       => esc_html__( 'Footer', 'b2w' ),
		'description' => esc_html__( 'This is the footer', 'b2w' ),
		'panel'       => 'b2w_theme_options_panel',
		'priority'    => 160,
	]
);

new \Kirki\Field\Textarea(
	[
		'settings'    => 'footer_copyright',
		'label'       => esc_html__( 'Footer Copyright Text', 'b2w' ),
		'section'     => 'b2w_footer_section',
		'default'     => esc_html__( 'Copyright Ridtech Solutions', 'b2w' ),
        'partial_refresh' => [
            'footer_copyright' => [
                'selector' => 'footer .copyright p',
                'render_callback' => function() {
                    return get_theme_mod('footer_copyright');
                }
            ],    
        ],
	]
);


// Section -- Pre-Footer CTA

new \Kirki\Section(
	'footer_calltoaction_section',
	[
		'title'       => esc_html__( 'Call to Action', 'b2w' ),
		'description' => esc_html__( 'Call to Action Section', 'b2w' ),
		'panel'       => 'b2w_theme_options_panel',
		'priority'    => 160,
	]
);


// Section Pre-Footer CTA Fields

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'footer_calltoaction_visibility',
		'label'       => esc_html__( 'Call to Action Section', 'b2w' ),
		'description' => esc_html__( 'Manage footer call to action section visibility', 'b2w' ),
		'section'     => 'footer_calltoaction_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'b2w' ),
			'off' => esc_html__( 'Disable', 'b2w' ),
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings'    => 'footer_sub_heading',
		'label'       => esc_html__( 'Sub Heading', 'b2w' ),
		'section'     => 'footer_calltoaction_section',
        'tooltip'     => esc_html( 'Call to Action Section Sub Heading Text', 'b2w'),
		'default'     => esc_html__( 'Join the Course', 'b2w' ),
        'partial_refresh' => [
            'footer_sub_heading' => [
                'selector' => '.footer-calltoaction p.sub-title',
                'render_callback' => function() {
                    return get_theme_mod('footer_sub_heading');
                }
            ],    
        ],
	]
);


new \Kirki\Field\Text(
	[
		'settings'    => 'footer_calltoaction_heading',
		'label'       => esc_html__( 'Heading', 'b2w' ),
        'tooltip'     => esc_html( 'Call to Action Section Heading Text', 'b2w'),
		'section'     => 'footer_calltoaction_section',
		'default'     => esc_html__( 'Bootstrap to WordPress', 'b2w' ),
        'partial_refresh' => [
            'footer_calltoaction_heading' => [
                'selector' => '.footer-calltoaction h2',
                'render_callback' => function() {
                    return get_theme_mod('footer_calltoaction_heading');
                }
            ],    
        ],
	]
);


new \Kirki\Field\Textarea(
    [
        'settings' => 'footer_calltoaction_desc',
		'label'    => esc_html__( 'Description', 'b2w' ),
		'section'  => 'footer_calltoaction_section',
		'default'  => esc_html__( 'Learn how to design and build custom, beautiful & responsive WordPress websites ->', 'b2w' ),
        'partial_refresh' => [
            'footer_calltoaction_desc' => [
                'selector' => '.footer-calltoaction p.fcta-desc',
                'render_callback' => function() {
                    return get_theme_mod('footer_calltoaction_desc');
                }
            ],
        ],
    ]
);


new \Kirki\Field\Text(
    [
        'settings' => 'footer_calltoaction_button',
		'label'    => esc_html__( 'Button Text', 'b2w' ),
		'section'  => 'footer_calltoaction_section',
		'default'  => esc_html__( 'Join Now ->', ),
        'partial_refresh' => [
            'footer_calltoaction_button' => [
                'selector' => '.footer-calltoaction .btn',
                'render_callback' => function() {
                    return get_theme_mod('footer_calltoaction_button');
                }
            ],
        ],
    ]
);

new \Kirki\Field\URL(
	[
		'settings' => 'footer_cta_link',
		'label'    => esc_html__( 'Button Link', 'b2w' ),
        'tooltip'     => esc_html( 'Button URL Goes Here', 'b2w'),
		'section'  => 'footer_calltoaction_section',
		'default'  => 'https://ridkadri.com/',
		'priority' => 10,
	]
);

/* End Footer Section */