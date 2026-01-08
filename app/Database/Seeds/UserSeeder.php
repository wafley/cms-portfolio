<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userModel = new \App\Models\User();

        $users = [
            [
                'username' => 'admin',
                'password' => '12345678',
            ],
        ];

        foreach ($users as $user) {
            $userModel->save($user);
        }
    }
}
