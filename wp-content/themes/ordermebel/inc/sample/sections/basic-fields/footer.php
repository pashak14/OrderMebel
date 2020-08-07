<?php
/**
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Футер', 'your-textdomain-here' ),
		'id'               => 'basic-footer',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__( 'Здесь вы сможете редактировать поля из второго экрана сайта: ', 'your-textdomain-here' ),
		'fields'           => array(
			array(
				'id'       => 'footer',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'desc'     => esc_html__( $vvedi_text, 'your-textdomain-here' ),
				'default'  => 'Наши лучшие работы ', 
			),
			array(
				'id'           => 'facebook-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Иконка facebook' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Вставте картинку', 'your-textdomain-here' ),
				'preview_size' => 'full',
				'default'      => array(
					'url'      => 'wp-content/themes/ordermebel/assets/img/facebook.png',
				),
			),
			array(
				'id'       => 'facebook-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка facebook', 'your-textdomain-here' ),
				'desc'     => esc_html__( $vvedi_text, 'your-textdomain-here' ),
				'default'  => 'https://facebook.com',
			),
			array(
				'id'           => 'instagram-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Иконка instagram' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Вставте картинку', 'your-textdomain-here' ),
				'preview_size' => 'full',
				'default'      => array(
					'url'      => 'wp-content/themes/ordermebel/assets/img/instagram.png',
				),
			),
			array(
				'id'       => 'instagram-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Ссылка instagram', 'your-textdomain-here' ),
				'desc'     => esc_html__( $vvedi_text, 'your-textdomain-here' ),
				'default'  => 'https://instagram.com/mebel_on_order/',
			),
		),
	)
);