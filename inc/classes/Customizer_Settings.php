<?php
namespace Qwel_Theme;

/**
 * カスタマイザーの設定項目を配列化
 */
trait Customizer_Settings {
	protected static function make_settings_array() {
		$customizer_settings = [
			// スタイル設定
			'style' => [
				// 配色
				'primary_light_color'  => ['type'  => 'color'],
				'primary_color'        => ['type'  => 'color'],
				'primary_dark_color'   => ['type'  => 'color'],
				'secondary_color'      => ['type'  => 'color'],
			]
		];
    
    // $customizer_settings を上書きするHook
		$customizer_settings = apply_filters('qwel_theme_customizer_settings', $customizer_settings);

		$settings_array = [
			'style'  => $customizer_settings['style']
		];

		return $settings_array;
	}
}
