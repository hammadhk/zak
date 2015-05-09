<?php

class m150509_173535_create_part extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable('Part', 
			array(
				'id' => 'pk',
				'name' => 'varchar(128)'
			)
		);
	}

	public function safeDown()
	{
		$this->dropTable('Part');
	}
}