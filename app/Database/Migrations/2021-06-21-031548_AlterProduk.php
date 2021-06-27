<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterProduk extends Migration
{
	public function up()
	{
		$this->forge->addColumn(
			'produk',
			[
				'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
			]
		);
	}

	public function down()
	{
		$this->forge->dropColumn('produk', 'created_at');
	}
}
