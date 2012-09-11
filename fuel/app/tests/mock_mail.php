<?php

// PHPのmail()関数をオーバーライド
// 機能テスト時にはEmailの送信は行わない
namespace Email;

function mail($to, $subject, $message, $additional_headers, $additional_parameters)
{
	$data = array(
		'to'                    => $to,
		'subject'               => $subject,
		'message'               => $message,
		'additional_headers'    => $additional_headers,
		'additional_parameters' => $additional_parameters,
	);

	\Config::set('_tests.mail.data', $data);

	return true;
}
