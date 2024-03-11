<?php

namespace App\Controllers;

use App\Models\UserModel2;
use CodeIgniter\Controller;

class Login extends BaseController
{
    public function __construct()
    {
        $this->UserModel2 = new UserModel2();

    }
    public function index()
    {
        // Menampilkan halaman login (login.php)
        return view('login');
    }

    public function process()
    {
        // Ambil data dari form registrasi
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
    
        // Validasi data registrasi, jika diperlukan
    
        // Enkripsi password sebelum disimpan
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        // Simpan data pengguna ke dalam database
        $userModel = new UserModel2();
        $userData = [
            'username' => $username,
            'email' => $email,
            'password' => $hashedPassword
        ];
        $userModel->insert($userData);
    
        // Redirect pengguna ke halaman login
        return redirect()->to('/login');
    }
    

    public function logout()
    {
        // Hapus session dan arahkan ke halaman beranda
        session()->destroy();
        return redirect()->to('/beranda');
    }
}
