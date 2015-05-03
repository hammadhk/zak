<?php

class m150503_161752_create_job extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable("Job", array('id' => 'pk',
			'description' => 'varchar(2048) NOT NULL',
	        'created_on' => 'datetime DEFAULT current_timestamp NOT NULL',
	        'estimated_end_date' => 'datetime',
	        'completed_on' => 'datetime',
			'actual_price' => 'int(11) NOT NULL DEFAULT 0',
			'discount' => 'int(11) NOT NULL DEFAULT 0',
			'final_price' => 'int(11) NOT NULL DEFAULT 0',
		));
	}

	public function safeDown()
	{
		$this->dropTable("Job");
	}
}