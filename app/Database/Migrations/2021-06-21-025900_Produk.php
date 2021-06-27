<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produk extends Migration
{
	public function up()
	{
		// Membuat kolom/field untuk tabel news
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'deskripsi'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'harga' => [
				'type'           => 'INT',
				'constraint'     => 100
			],
			'gambar'      => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'status'      => [
				'type'           => 'INT',
				'constraint'     => 1
			],
		]);

		// Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel news
		$this->forge->createTable('produk', TRUE);
	}



	public function down()
	{
		$this->forge->dropTable('news');
	}
}
