<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddKolomStokJasa extends Migration
{
	public function up()
	{
		$this->forge->addColumn('produk', [
			'stok INT(100)'
		]);
	}

	public function down()
	{
		$this->forge->dropColumn('produk', 'stok');
	}
}
