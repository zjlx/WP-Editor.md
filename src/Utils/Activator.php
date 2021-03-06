<?php

namespace EditormdUtils;

class Activator {

	public static function activate() {

		// 删除老版本数据 Version:1.x~3.x
		if ( get_option( 'editormd_options' ) ) {
			delete_option( 'editormd_options' );
		}
		// 删除老版本数据 Version:4.x
		if ( get_option( 'wp-editormd_options' ) ) {
			delete_option( 'wp-editormd_options' );
		}

		// 初次载入插件写入默认数据 => 判断本地是否存在数据 不存在写入数据即可
		if ( get_option( 'editor_basics' ) == false ) {
			add_option( 'editor_basics', Activator::$defaultOptionsBasics, '', 'yes' );
		}

		if ( get_option( 'editor_style' ) == false ) {
			add_option( 'editor_style', Activator::$defaultOptionsStyle, '', 'yes' );
		}

		if ( get_option( 'syntax_highlighting' ) == false ) {
			add_option( 'syntax_highlighting', Activator::$defaultOptionsSyntax, '', 'yes' );
		}

		if ( get_option( 'editor_emoji' ) == false ) {
			add_option( 'editor_emoji', Activator::$defaultOptionsEmoji, '', 'yes' );
		}

		if ( get_option( 'editor_toc' ) == false ) {
			add_option( 'editor_toc', Activator::$defaultOptionsToc, '', 'yes' );
		}

		if ( get_option( 'editor_advanced' ) == false ) {
			add_option( 'editor_advanced', Activator::$defaultOptionsAdvanced, '', 'yes' );
		}

	}

	public static $defaultOptionsBasics = array(
		'task_list'      => 'off',
		'imagepaste'     => 'off',
		'live_preview'   => 'off',
		'sync_scrolling' => 'off',
		'html_decode'    => 'off',
		'support_front'  => 'off',
		'support_reply'  => 'off'
	);

	public static $defaultOptionsStyle = array(
		'theme_style' => 'default',
		'code_style'  => 'default',
		'editor_addres' => ''
	);

	public static $defaultOptionsSyntax = array(
		'highlight_mode_auto'            => 'off',
		'line_numbers'                   => 'off',
		'show_language'                  => 'off',
		'copy_clipboard'                 => 'off',
		'highlight_library_style'        => 'default',
		'customize_my_style'             => 'nothing',
		'customize_highlight_style'      => 'nothing',
		'customize_highlight_javascript' => 'nothing'
	);

	public static $defaultOptionsEmoji = array(
		'support_emoji' => 'off'
	);

	public static $defaultOptionsToc = array(
		'support_toc' => 'off'
	);

	public static $defaultOptionsAdvanced = array(
		'jquery_compatible' => 'off'
	);
}
