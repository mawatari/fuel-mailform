<?php

// PHPのmail()関数をオーバーライド
// 機能テスト時にはEmailの送信は行わない
namespace Email;

function mail($to, $subject, $message, $additional_headers, $additional_parameters)
{
	return true;
}
