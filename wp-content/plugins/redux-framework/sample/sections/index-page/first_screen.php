<?php
/**
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

$vvedi_text = 'Введите текст';

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Первый экран', 'your-textdomain-here' ),
		'id'               => 'basic-first-screen',
		'subsection'       => true,
		'customizer_width' => '450px',
		'desc'             => esc_html__( 'Здесь вы сможете редактировать поля из первого экрана сайта: ', 'your-textdomain-here' ),
		'fields'           => array(
			array(
				'id'       => 'first-h1',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'desc'     => esc_html__( $vvedi_text, 'your-textdomain-here' ),
				'default'  => 'Любая мебель на заказ', 
			),
			array(
				'id'       => 'first-description',
				'type'     => 'text',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'desc'     => esc_html__( $vvedi_text, 'your-textdomain-here' ),
				'default'  => 'Выполним заказ любой сложности. Доставляем по Украине.',
			),
			array(
				'id'       => 'first-button',
				'type'     => 'text',
				'title'    => esc_html__( 'Кнопка', 'your-textdomain-here' ),
				'desc'     => esc_html__( $vvedi_text, 'your-textdomain-here' ),
				'default'  => 'Заказать звонок',
			),

		),
	)
);