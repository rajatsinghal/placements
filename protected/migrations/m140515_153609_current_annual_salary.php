<?php

class m140515_153609_current_annual_salary extends CDbMigration
{
	public function up()
	{
		$this->addColumn('registration_form', current_annual_salary', 'varchar(255)');
	}

	public function down()
	{
		echo "m140515_153609_current_annual_salary does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
