<?php

/**
 * Model Mail class Tests
 *
 * @group App
 */

class Test_Model_Mail extends TestCase
{
	public function test_テスト環境であるか()
	{
		$test = Fuel::$env;
		$expected = 'test';
		$this->assertEquals($expected, $test);
	}

	public function test_send()
	{
		$mail = new Model_Mail();

		$post = array(
			'email' => 'foo@example.com',
			'name' => '送信者',
			'comment' => 'メール送信のテスト',
		);
		$mail->send($post);

		// mail()関数からのデータを代入
		$mail_data = Config::get('_tests.mail.data');

		// 管理者 <fuelphp@yahoo.co.jp>
		$expected = '=?UTF-8?B?566h55CG6ICF?= <fuelphp@yahoo.co.jp>';
		$this->assertEquals($expected, $mail_data['to']);

		// コンタクトフォーム
		$expected = '=?UTF-8?B?44Kz44Oz44K/44Kv44OI44OV44Kp44O844Og?=';
		$this->assertEquals($expected, $mail_data['subject']);

		$pattern = '/名前: ' . preg_quote($post['name']) . '/u';
		$this->assertRegExp($pattern, $mail_data['message']);

		$pattern = '/メールアドレス: ' . preg_quote($post['email']) . '/u';
		$this->assertRegExp($pattern, $mail_data['message']);

		$pattern = '/' . preg_quote($post['comment']) . '/u';
		$this->assertRegExp($pattern, $mail_data['message']);

		// From: 送信者 <foo@example.com>
		$pattern = '/'
			. preg_quote('From: =?UTF-8?B?6YCB5L+h6ICF?= <foo@example.com>')
			. '/u';
		$this->assertRegExp($pattern, $mail_data['additional_headers']);

		$pattern = '/-oi -f ' . preg_quote($post['email']) . '/u';
		$this->assertRegExp($pattern, $mail_data['additional_parameters']);
	}
}
