<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produk extends Seeder
{
	public function run()
	{
		$produk_data = [
			[
				'nama' => 'Kripik Singkong',
				'deskripsi'  => 'Kripik singkong adalah lorem adalsi sini atau',
				'harga' => 20000,
				'gambar' => 'kripik.jpg',
				'status' => 1,
				'stok' => 25,
			],
			[
				'nama' => 'Madu Pramuka',
				'deskripsi'  => 'Madu Pramuka adalah lorem adalsi sini atau',
				'harga' => 99999,
				'gambar' => 'madu.jpg',
				'status' => 1,
				'stok' => 17,
			],

		];
		$this->db->table('produk')->insertBatch($produk_data);

		// foreach ($produk_data as $data) {
		// 	// insert semua data ke tabel
		// }
	}
}
