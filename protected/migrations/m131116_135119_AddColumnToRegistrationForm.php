<?php

class m131116_135119_AddColumnToRegistrationForm extends CDbMigration
{
	public function up()
	{
		$this->addColumn('registration_form', 'hiwicket_user_engagement_strategy', 'varchar(255)');
	}

	public function down()
	{
		$this->dropColumn('registration_form', 'hiwicket_user_engagement_strategy');
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