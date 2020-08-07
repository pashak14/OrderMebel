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
		'title'            => esc_html__( 'Четвёртый экран', 'your-textdomain-here' ),
		'id'               => 'basic-fourty-screen',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__( 'Здесь вы сможете редактировать поля из четвёртого экрана сайта: ', 'your-textdomain-here' ),
		'fields'           => array(
			array(
				'id'       => 'fourty-h3',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'desc'     => esc_html__( $vvedi_text, 'your-textdomain-here' ),
				'default'  => 'Заказать звонок', 
			),
			array(
				'id'       => 'fourty-list',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Список', 'your-textdomain-here' ),
				'desc'     => esc_html__( $vvedi_text, 'your-textdomain-here' ),
			),
		),
	)
);