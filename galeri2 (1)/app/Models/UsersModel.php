<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user'; // Nama tabel dalam database
    protected $primaryKey = 'id'; // Primary key dari tabel
    protected $allowedFields = ['username', 'email', 'password']; // Kolom-kolom yang diizinkan untuk diisi

    protected $returnType = 'array'; // Jenis data yang dikembalikan oleh model

    // Metode untuk mencari pengguna berdasarkan username
    public function getUserByUsername($username)
    {
        return $this->where('username', $username)
                    ->first();
    }
}
