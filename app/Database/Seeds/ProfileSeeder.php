<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        $profileModel = new \App\Models\Profile();

        $profile = [
            'full_name' => 'Elgin Al-wafi',
            'headline'  => 'Game Developer, Web Developer, UI/UX Desainer',
            'about'     => 'I am a fullstack programmer with experience in building functional, efficient, and clean web solutions.',
            'email'     => 'alwafielgin@gmail.com',
            'phone'     => '082320549874',
            'address'   => 'BTN. Griya Cinangsi Asri Blok B No.86 RT024/RW007, Desa Cinangsi, Kec. Cibogo, Kab. Subang Jawa Barat, Indonesia',
            'photo'     => 'default.jpg'
        ];

        $profileModel->save($profile);
    }
}
