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
				'default'  => 'Наши лучшие работы ', 
			),
			array(
				'id'       => 'thirty-slides',
				'type'     => 'slides',
				'title'    => esc_html__( 'Слайдер', 'your-textdomain-here' ),
				'desc'     => esc_html__( $vvedi_text, 'your-textdomain-here' ),
			),
			array(
				'id'       => 'thirty-button',
				'type'     => 'text',
				'title'    => esc_html__( 'Кнопка', 'your-textdomain-here' ),
				'desc'     => esc_html__( $vvedi_text, 'your-textdomain-here' ),
				'default'  => 'Заказать звонок',
			),

		),
	)
);
