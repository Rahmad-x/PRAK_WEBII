<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginProcess()
    {
        $session = session();
        $model = new UserModel();
        
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        $user = $model->where('username', $username)->first();

        if ($user) {
            // Menggunakan password_verify demi keamanan hash password
            if (password_verify($password, $user['password']) || $password === $user['password']) {
                $session->set([
                    'id'         => $user['id'],
                    'username'   => $user['username'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to('/buku');
            }
        }

        return redirect()->back()->with('error', 'Username atau Password salah!');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}