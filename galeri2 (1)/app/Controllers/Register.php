<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Register extends BaseController
{
    public function process()
    {
        // Proses validasi dan penyimpanan data pengguna
        
        // Registrasi berhasil, set flash data
        session()->setFlashdata('success', 'Registrasi berhasil! Silakan login.');

        // Redirect pengguna ke halaman login
        return redirect()->to('/login');
    }
}
