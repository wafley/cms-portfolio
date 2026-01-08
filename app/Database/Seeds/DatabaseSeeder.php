<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call('UserSeeder');
        $this->call('ProfileSeeder');
        $this->call('EducationSeeder');
        $this->call('SocialSeeder');
        $this->call('ActivitySeeder');
    }
}
