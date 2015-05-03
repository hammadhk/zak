<?php

class m150503_165615_create_job_service extends CDbMigration
{
	public function safeUp()
	{
		$this->createTable("JobService",
			array('id' => 'pk',
			'job_id' => 'int(11) NOT NULL',
			'item_id' => 'int(11) NOT NULL',
			'model' => 'varchar(32)',
			'actual_price' => 'int(11) NOT NULL DEFAULT 0',
	        'date_created' => 'datetime DEFAULT current_timestamp',
			'FOREIGN KEY (job_id) REFERENCES Job(id)',
		));
	}

	public function safeDown()
	{
		$this->dropTable("JobService");
	}
}