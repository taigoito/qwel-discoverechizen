<?php

/**
 * 補助的な働きをする関数群
 */

// スネークケースからキャメルケースに変換
if (!function_exists('str_to_camel')) {
  function str_to_camel($str) {
    return lcfirst(strtr(ucwords(strtr($str, ['_' => ' '])), [' ' => '']));
  }
}

//キャメルケースからスネークケースに変換
if (!function_exists('str_to_snake')) {
  function str_to_snake($str) {
    return ltrim(strtolower(preg_replace('/[A-Z]/', '_\0', $str)), '_');
  }
}
