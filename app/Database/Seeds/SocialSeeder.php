<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SocialSeeder extends Seeder
{
    public function run()
    {
        $socialModel = new \App\Models\Social();

        $socials = [
            [
                'platform'   => 'Email',
                'url'        => 'mailto:alwafielgin@gmail.com',
                'icon'       => 'fas fa-envelope',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'platform'   => 'WhatsApp',
                'url'        => 'https://wa.me/6282320549874',
                'icon'       => 'fab fa-whatsapp',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'platform'   => 'GitHub',
                'url'        => 'https://github.com/wafley',
                'icon'       => 'fab fa-github',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'platform'   => 'LinkedIn',
                'url'        => 'https://www.linkedin.com/in/aalwf',
                'icon'       => 'fab fa-linkedin',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        foreach ($socials as $social) {
            $socialModel->save($social);
        }
    }
}
