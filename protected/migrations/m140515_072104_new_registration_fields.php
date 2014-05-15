<?php
class m140515_072104_new_registration_fields extends CDbMigration
{

	public function safeUp() {
		$this->addColumn('registration_form', 'role', 'varchar(255)');
		$this->addColumn('registration_form', 'github_url', 'varchar(255)');
		$this->addColumn('registration_form', 'stackoverflow_url', 'varchar(255)');
		$this->addColumn('registration_form', 'challenging_work', 'TEXT');
		$this->addColumn('registration_form', 'scaled_up_applications', 'TEXT');
		$this->addColumn('registration_form', 'sql_vs_nosql', 'TEXT');
		$this->addColumn('registration_form', 'liked_mobile_apps', 'TEXT');
	}

	public function safeDown() {
		$this->dropColumn('registration_form', 'role');
		$this->dropColumn('registration_form', 'github_url');
		$this->dropColumn('registration_form', 'stackoverflow_url');
		$this->dropColumn('registration_form', 'challenging_work');
		$this->dropColumn('registration_form', 'scaled_up_applications');
		$this->dropColumn('registration_form', 'sql_vs_nosql');
		$this->dropColumn('registration_form', 'liked_mobile_apps');
	}
}