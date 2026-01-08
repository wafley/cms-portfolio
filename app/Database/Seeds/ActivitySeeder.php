<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ActivitySeeder extends Seeder
{
    public function run()
    {
        $activityModel = new \App\Models\Activity();

        $activities = [
            [
                'activity_date'    => date('Y-m-d'),
                'title'            => 'Belajar CodeIgniter 4',
                'description'      => 'Membuat migration, model, dan seeder untuk portfolio pribadi',
                'picture'          => 'dummy-1.webp',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
            [
                'activity_date'    => date('Y-m-d'),
                'title'            => 'Ngoding Portfolio Website',
                'description'      => 'Implementasi fitur social links dan daily activity',
                'picture'          => 'dummy-2.webp',
                'created_at'       => date('Y-m-d H:i:s'),
                'updated_at'       => date('Y-m-d H:i:s'),
            ],
        ];

        foreach ($activities as $activity) {
            $activityModel->save($activity);
        }
    }
}
