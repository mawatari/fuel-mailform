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
		'form' => 'form',
	);

	public function test_find_one_by_id()
	{
		foreach ($this->form_fixt as $row)
		{
			$form = Model_Form::find_one_by_id($row['id']);

			foreach ($row as $field => $value){
				$test = $form->$field;
				$expected = $row[$field];
				$this->assertEquals($expected, $test);
			}
		}
	}
}
