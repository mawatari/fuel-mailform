<?php

/**
* MyInputFilters class Tests
*
* @group App
*/
class Test_MyInputFilters extends TestCase
{
	public function test_check_encoding_invalid_sjis()
	{
		$this->setExpectedException(
			'HttpInvalidInputException', 'Invalid input data'
		);

		$input = mb_convert_encoding('SJISの文字列です。', 'SJIS');
		$test = MyInputFilters::check_encoding($input);
	}

	public function test_check_encoding_valid()
	{
		$input = '正常なUTF-8の文字列です。';
		$test = MyInputFilters::check_encoding($input);
		$expected = $input;

		$this->assertEquals($expected, $test);
	}
}
