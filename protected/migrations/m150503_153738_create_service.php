<?php

class m150503_153738_create_service extends CDbMigration
{
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable("Service",
				array('id' => 'pk',
					'name' => 'varchar(64) NOT NULL',
					'nick_name' => 'varchar(64)',
					'INDEX `name` (`name`)',
   	 ));
	}

	public function safeDown()
	{
		$this->dropTable("Service");
	}
}