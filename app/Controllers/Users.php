<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'User Accounts',

            'users' => [
                [
                    'username'  => 'admin01',
                    'full_name' => 'Samantha Apolinar',
                    'role'      => 'Administrator',
                ],
                [
                    'username'  => 'manager01',
                    'full_name' => 'Joshua Reyes',
                    'role'      => 'Manager',
                ],
                [
                    'username'  => 'cashier01',
                    'full_name' => 'Maria Santos',
                    'role'      => 'Cashier',
                ],
                [
                    'username'  => 'cashier02',
                    'full_name' => 'Paolo Cruz',
                    'role'      => 'Cashier',
                ],
                [
                    'username'  => 'staff01',
                    'full_name' => 'Angela Garcia',
                    'role'      => 'Staff',
                ],
            ],
        ];

        return view('users/index', $data);
    }
}