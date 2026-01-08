<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EducationSeeder extends Seeder
{
    public function run()
    {
        $educationModel = new \App\Models\Education();

        $educations = [
            [
                'institution' => 'SD Negeri Harumanis Subang',
                'degree'      => '',
                'start_year'  => 2013,
                'end_year'    => 2016,
                'description' => 'Belajar dasar-dasar membaca, menulis, berhitung, serta pengenalan ilmu pengetahuan umum.',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'institution' => 'SD Negeri 160 Palembang',
                'degree'      => '',
                'start_year'  => 2016,
                'end_year'    => 2019,
                'description' => 'Mengasah kemampuan akademik dan sosial, serta mengikuti berbagai kegiatan ekstrakurikuler.',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'institution' => 'SMP Negeri 6 Subang',
                'degree'      => '',
                'start_year'  => 2019,
                'end_year'    => 2022,
                'description' => 'Fokus pada pengembangan kemampuan analisis, ilmu pengetahuan dasar, serta teknologi sederhana.',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'institution' => 'SMK Negeri 2 Subang',
                'degree'      => 'Software Engineering',
                'start_year'  => 2022,
                'end_year'    => 2025,
                'description' => 'Mempelajari pengembangan perangkat lunak, pemrograman, dan praktik proyek IT.',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        foreach ($educations as $education) {
            $educationModel->save($education);
        }
    }
}
