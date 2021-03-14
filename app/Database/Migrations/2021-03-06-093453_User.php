<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			'id' => [
				'type'	=> 'int',
				'constraint' => '11',
				'unsigned' => true,
				'auto_increment' => true,
			],
			'id_user' => [
				'type'	=> 'int',
				'constraint' => '5',
				'unsigned' => true,
			],
			'username' => [
				'type'	=> 'varchar',
				'constraint' => '100'
			],
			'fullname' => [
				'type'	=> 'varchar',
				'constraint' => '100',
				'null' => true,
			],
			'email' => [
				'type'	=> 'varchar',
				'constraint' => '100'
			],
			'password' => [
				'type'	=> 'varchar',
				'constraint' => '100'
			],
			'image' => [
				'type'	=> 'varchar',
				'constraint' => '100',
				'null' => true,
				'default' => 'default.png'
			],
			'phone' => [
				'type'	=> 'varchar',
				'constraint' => '100',
				'null' => true,
			],
			'phone' => [
				'type'	=> 'varchar',
				'constraint' => '100'
			],
			'age' => [
				'type'	=> 'varchar',
				'constraint' => '100',
				'null' => true,
			],
			'birthday' => [
				'type'	=> 'Date',
				'null' => true,
			],
			'gender' => [
				'type'	=> 'varchar',
				'constraint' => '100',
				'null' => true,
			],
			'address' => [
				'type'	=> 'varchar',
				'constraint' => '100',
				'null' => true,
			],
			'city' => [
				'type'	=> 'varchar',
				'constraint' => '100',
				'null' => true,
			],
			'job' => [
				'type'	=> 'varchar',
				'constraint' => '100',
				'null' => true,
			],
			'national' => [
				'type'	=> 'varchar',
				'constraint' => '100',
				'null' => true,
			],
			'role' => [
				'type'	=> 'ENUM',
				'constraint' => "'user', 'admin'",
				'default' => 'user'
			],
			'type' => [
				'type'	=> 'int',
				'constraint' => '1',
				'default' => '0'
			],
			'last_activity' => [
				'type'	=> 'datetime',
				'null' => true
			],
			'created_at' => [
				'type' => 'datetime',
				'null' => true
			],
			'updated_at' => [
				'type' => 'datetime',
				'null' => true
			]
		]);

		$this->forge->addKey('id', true);
		$this->forge->createTable('user');
	}

	public function down()
	{
		//
		$this->forge->dropTable('user');
	}
}
