<?php

class m150505_151110_daily_expense_item_table extends CDbMigration
{
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('DailyExpenseItem', array(
				'id' => 'pk',
				'name' => 'varchar(512)',
			));
	}

	public function safeDown()
	{
		$this->dropTable('DailyExpenseItem');
	}
}