<?php

class m150503_151343_create_customer_table extends CDbMigration
{
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable("Contact", array('id' => 'pk',
			'name' => 'varchar(64) NOT NULL',
			'nick_name' => 'varchar(64)',
			'contact_number' => 'varchar(32)',
			'address' => 'varchar(512)',
			'company' => 'varchar(64)',
	        'date_created' => 'datetime',
			'INDEX `name` (`name`)',
			'INDEX `nick_name` (`nick_name`)',
		));
	}

	public function safeDown()
	{
		$this->dropTable('Customer');
	}
}