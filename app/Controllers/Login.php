<?php

namespace App\Controllers;

use App\Models\User;

class Login extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }

    // Display login page
    public function index()
    {
        return view('login');
    }

    // Process login
    public function authenticate()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if (empty($email) || empty($password)) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Email and password are required.');
        }

        $user = $this->userModel
            ->where('email', $email)
            ->first();

        if (! $user || ! password_verify($password, $user['password'])) {
            return redirect()->back()
                ->withInput()
                ->with('error', 'Invalid email or password.');
        }

        session()->set([
            'isLoggedIn' => true,
            'user_id'    => $user['id'],
            'user_email' => $user['email'],
        ]);

        return redirect()->to('/dashboard');
    }

    // End login session
    public function logout()
    {
        session()->destroy();

        return redirect()->to('/login')
            ->with('success', 'You have been logged out.');
    }
}