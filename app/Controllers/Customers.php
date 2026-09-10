<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Customer Accounts',

            'customers' => [
                [
                    'full_name' => 'Angel Santos',
                    'email'     => 'angel.santos@example.com',
                    'phone'     => '09171234567',
                ],
                [
                    'full_name' => 'Bea Cruz',
                    'email'     => 'bea.cruz@example.com',
                    'phone'     => '09182345678',
                ],
                [
                    'full_name' => 'Carl Reyes',
                    'email'     => 'carl.reyes@example.com',
                    'phone'     => '09193456789',
                ],
                [
                    'full_name' => 'Dani Girl',
                    'email'     => 'danigirl@example.com',
                    'phone'     => '09204567890',
                ],
                [
                    'full_name' => 'Ella Mendoza',
                    'email'     => 'ella.mendoza@example.com',
                    'phone'     => '09215678901',
                ],
            ],
        ];

        return view('customers/index', $data);
    }
}