<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    protected array $models = [];

    public function __construct()
    {
        $this->models['userModel'] = new \App\Models\User();
    }

    public function index()
    {
        return view('auth/login');
    }

    public function process()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'password' => 'required|min_length[6]'
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $user = $this->models['userModel']->where('username', $username)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'Username tidak ditemukan')->withInput();
        }

        if (!password_verify($password, $user->password)) {
            return redirect()->back()->with('error', 'Password salah')->withInput();
        }

        $sessionData = [
            'user_id'   => $user->id,
            'username'  => $user->username,
            'logged_in' => true
        ];

        session()->set($sessionData);

        return redirect()->to('/admin/dashboard');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('login');
    }
}
