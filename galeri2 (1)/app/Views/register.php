<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Register extends BaseController
{
    public function index()
    {
        // Menampilkan halaman registrasi (vw_register.php)
        return view('vw_register');
    }

    public function process()
    {
        // Ambil data dari form registrasi
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $password_confirm = $this->request->getPost('password_confirm');

        // Lakukan validasi data
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required|alpha_numeric|min_length[5]|max_length[255]|is_unique[users.username]',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
            'password_confirm' => 'required|matches[password]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Jika validasi gagal, kembali ke halaman registrasi dengan pesan error
            return redirect()->to('/register')->withInput()->with('error', $validation->getErrors());
        }

        // Simpan data pengguna ke database
        $userModel = new UserModel();
        $userData = [
            'username' => $username,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ];
        $userModel->insert($userData);

        // Set flash data untuk menampilkan pesan sukses
        session()->setFlashdata('success', 'Registrasi berhasil! Silakan login.');

        // Redirect pengguna ke halaman login
        return redirect()->to('/login');
    }
}
