<?php

namespace Fuel\Migrations;

class Create_sample2s
{
	public function up()
	{
		\DBUtil::create_table('sample2s', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'tiltle' => array('constraint' => 255, 'type' => 'varchar'),
			'content' => array('type' => 'text'),
			'created_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),
			'updated_at' => array('constraint' => 11, 'type' => 'int', 'null' => true),

		), array('id'));
	}

	public function down()
	{
		\DBUtil::drop_table('sample2s');
	}
}