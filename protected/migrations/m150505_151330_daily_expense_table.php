<?php

class m150505_151330_daily_expense_table extends CDbMigration
{
// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
		$this->createTable('DailyExpense', array(
				'id' => 'pk',
				'description' => 'varchar(512)',
				'expense' => 'int(11)',
				'date' => 'datetime DEFAULT CURRENT_TIMESTAMP',
				'expense_item_id' => 'int(11)',
				'FOREIGN KEY (expense_item_id) references DailyExpenseItem(id) '
			));
	}

	public function safeDown()
	{
		$this->dropTable('DailyExpense');
	}
}