<?php

/**
 * Model Form class Tests
 *
 * @group App
 */

class Test_Model_Form extends DbTestCase
{
	protected $tables = array(
		// テーブル名 => YAMLファイル名
		'forms' => 'form',
	);

	public function test_テスト環境であるか()
	{
		$test = Fuel::$env;
		$expected = 'test';
		$this->assertEquals($expected, $test);
	}

	public function test_find_one_by_id()
	{
		foreach ($this->form_fixt as $row)
		{
			$form = Model_Form::find($row['id']);

			foreach ($row as $field => $value){
				$test = $form->$field;
				$expected = $row[$field];
				$this->assertEquals($expected, $test);
			}
		}
	}

	public function test_save_insert()
	{
		$data = array(
			'name'       => '藤原義孝',
			'email'      => 'yoshitaka@example.jp',
			'comment'    => '君がため 惜しからざりし 命さえ 長くもがなと 思ひけるかな',
			'ip_address' => '10.11.12.13',
			'user_agent' => 'Mozilla/2.02 (Macintosh; I; PPC)',
		);

		$form = Model_Form::forge($data);

		// 新規データをDBに保存
		$ret = $form->save();

		// 保存されたデータをDBから検索
		$form = Model_Form::find($form->id);

		foreach ($data as $field => $value)
		{
			$this->assertEquals($value, $form[$field]);
		}
	}
}