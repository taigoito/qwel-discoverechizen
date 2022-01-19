<?php
namespace DE_Theme;

/**
 * カスタマイザーの設定項目を登録
 */
trait Customizer {
  use \DE_Theme\Base,
    \DE_Theme\Customizer_Settings;

  protected static $customize  = '';
  protected static $priority   = 0;

  public static function setup_customizer($wp_customize) {
    self::$customize = $wp_customize;
    self::add_panel(self::$db_name);

    // セクションを取得
    $sections = self::get_sections();

    // 設定項目の配列
    $settings_array = self::make_settings_array($sections);

    // $settings_array を順次処理
    foreach ($settings_array as $section => $keys) {
      // セクション追加
      self::add_section($section);

      // 設定追加
      foreach ($keys as $key => $args) {
        self::add_control($section, $key, $args);
      }
    }
  }

  /**
   * パネル追加
   */
  protected static function add_panel($name) {
    //パネルを登録
    self::$customize->add_panel($name, [
      'title'        => self::get_title($name),
      'description'  => '',
      'priority'     => 90 // メニュー設定の手前
    ]);
  }

  /**
   * セクション追加
   */
  protected static function add_section($name) {
    // セクションを登録
    self::$customize->add_section($name, [
      'panel'        => self::$db_name,
      'title'        => self::get_title($name),
      'description'  => '',
      'priority'     => self::$priority
    ]);
    self::$priority++;
  }

  /**
   * 設定追加
   */
  protected static function add_control ($section, $key, $args = []) {
    // 設定キー
    $setting_key = self::$db_name . '[' . $section . '][' . $key . ']';

    // 設定タイプ
    $type = isset($args['type']) ? $args['type'] : '';

    // 設定を登録
    self::$customize->add_setting($setting_key, [
      'default'            => isset($args['default']) ? $args['default'] : self::get_default_data($section, $key),
      'sanitize_callback'  => isset($args['sanitize']) ? $args['sanitize'] : self::get_sanitize_name($type)
    ]);

    // 全ての設定タイプで共通のコントロールに渡す引数
    $control_instance  = null;
    $control_args      = [
      'section'            => $section,
      'settings'           => $setting_key,
      'type'               => $type,
      'label'              => self::get_title($key),
      'description'        => isset($args['description']) ? $args['description'] : ''
    ];

    // 設定タイプに応じた引数を追加
    if ($type === 'radio' || $type === 'select') {
      // 選択項目の追加
      $control_args['choices'] = isset($args['choices']) ? $args['choices'] : [];

    } else if ($type === 'image') {
      // Image_Control
      $control_instance = new \WP_Customize_Image_Control(self::$customize, $setting_key, $control_args);

    } else if ($type === 'color') {
      // Color_Control
      $control_instance = new \WP_Customize_Color_Control(self::$customize, $setting_key, $control_args);

    }

    // インスタンス未生成の場合
    if ($control_instance === null) $control_instance = new \WP_Customize_Control(self::$customize, $setting_key, $control_args);

    // コントロールを設置
    self::$customize->add_control($control_instance, $control_args);
  }

  /**
   * 設定キーからタイトルを生成
   */
  protected static function get_title($key) {
    $arr = explode('_', $key);
    $title = [];
    foreach ($arr as $elem) {
      array_push($title, ucfirst($elem));
    }
    $title = implode(' ', $title);
    return $title; 
  }
  
  /**
	 * 設定タイプからサニタイズ関数名を取得
	 */
	protected static function get_sanitize_name($type = false) {
		switch ($type) {
			case 'checkbox':
				return ['\DE', 'sanitize_checkbox'];
      case 'number':
				return ['\DE', 'sanitize_float'];
			case 'radio':
			case 'select':
				return ['\DE', 'sanitize_select'];
			case 'image':
				return ['\DE', 'sanitize_image'];
			case 'color':
				return 'sanitize_hex_color';
			default: // text | textarea
				return 'wp_kses_post';
		}
	}
  
  // チェックボックス
  public static function sanitize_checkbox($input) {
    return ((isset($input) && true === $input) ? true : false);
  }

  // 数値
  public static function sanitize_float($input) {
    return floatval($input);
  }
  
  // ラジオボタン, セレクトボックス
  public static function sanitize_select($input, $setting = null) {
    $input = sanitize_key($input);
    if ($setting) {
      $choices = $setting->manager->get_control($setting->id)->choices;
      return (array_key_exists($input, $choices) ? $input : $setting->default);
    } else {
      return $input;
    }
  }
  
  // 画像アップローダー
  public static function sanitize_image($input, $setting = null) {
    $mimes = [
      'jpg|jpeg|jpe' => 'image/jpeg',
      'gif'          => 'image/gif',
      'png'          => 'image/png',
      'bmp'          => 'image/bmp',
      'tif|tiff'     => 'image/tiff',
      'ico'          => 'image/x-icon'
    ];
    $file = wp_check_filetype($input, $mimes);
    return ($file['ext'] ? $input : $setting->default);
  }  
}
