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
		'title'            => esc_html__( 'Третий экран', 'your-textdomain-here' ),
		'id'               => 'basic-thirty-screen',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__( 'Здесь вы сможете редактировать поля из третьего экрана сайта: ', 'your-textdomain-here' ),
		'fields'           => array(
			array(
				'id'       => 'thirty-h3',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'desc'     => esc_html__( $vvedi_text, 'your-textdomain-here' ),
				'default'  => 'Как мы работаем', 
			),
			array(
				'id'       => 'thirty-card-1',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Первая карточка', 'your-textdomain-here' ),
				'desc'     => esc_html__( $vvedi_text, 'your-textdomain-here' ),
			),
			array(
				'id'       => 'thirty-card-2',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Вторая карточка', 'your-textdomain-here' ),
				'desc'     => esc_html__( $vvedi_text, 'your-textdomain-here' ),
			),
			array(
				'id'       => 'thirty-card-3',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Третья карточка', 'your-textdomain-here' ),
				'desc'     => esc_html__( $vvedi_text, 'your-textdomain-here' ),
			),
			array(
				'id'       => 'thirty-card-4',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Четвёртая карточка', 'your-textdomain-here' ),
				'desc'     => esc_html__( $vvedi_text, 'your-textdomain-here' ),
			),
		),
	)
);