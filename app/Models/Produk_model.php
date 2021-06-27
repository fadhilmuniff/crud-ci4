<?php

namespace App\Models;

use CodeIgniter\Model;

class Produk_model extends Model
{
    protected $table = 'produk';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;

    // protected $table      = 'news';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['id', 'nama', 'deskripsi', 'harga', 'gambar', 'status', 'stok'];


    public function tambah_produk($data)
    {
        $query = $this->db->table('produk')->insert($data);
        return $query;
    }
    public function delete_produk($id)
    {
        $query = $this->db->table('produk')->delete(['id' => $id]);
        return $query;
    }
    public function edit_produk($data, $id)
    {
        $query = $this->db->table('produk')->update($data, (['id' => $id]));
        return $query;
    }
}
