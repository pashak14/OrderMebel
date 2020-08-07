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
		'title'      => esc_html__( 'Хеадер', 'your-textdomain-here' ),
		'id'         => 'basic-header',
		'subsection' => true,
		'desc'       => esc_html__( 'Здесь вы сможете редактировать поля из шапки сайта: ', 'your-textdomain-here' ),
		'fields'     => array(
			array(
				'id'           => 'logo',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Логотип сайта' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Вставте картинку', 'your-textdomain-here' ),
				'preview_size' => 'full',
				'default'      => array(
					'url'      => 'wp-content/themes/ordermebel/assets/img/logo.png',
				),
			),
			array(
				'id'           => 'phone-img',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Иконка телефона' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Вставте картинку', 'your-textdomain-here' ),
				'preview_size' => 'full',
				'default'      => array(
					'url'      => 'wp-content/themes/ordermebel/assets/img/phone.png',
				),
			),
			array(
				'id'           => 'myphone',
				'type'         => 'text',
				'title'        => esc_html__( 'Номер телефона' ),
				'desc'         => esc_html__( 'Введите текст', 'your-textdomain-here' ),
				'default'  	   => '+380 66 137 34 47',
			),
		),
	)
);