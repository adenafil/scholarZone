<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BeasiswaSeeder extends Seeder
{
    /**
     * Create a scholarship (beasiswa) and attach its categories.
     *
     * @param array $data
     * @return void
     */
    public function createBeasiswaWithCategories(array $data)
    {
        // Buat beasiswa dengan field-field dari parameter
        $beasiswa = Beasiswa::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'image_url' => $data['image_url'] ?? null,
            'information_link' => $data['information_link'] ?? null,
            'enroll_link' => $data['enroll_link'] ?? null,
            'end_scholarship_date' => $data['end_beasiswa_date'],
        ]);

        // Attach kategori jika ada
        if (!empty($data['category_id'])) {
            $beasiswa->categories()->attach($data['category_id']);
        }
    }



    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->createBeasiswaWithCategories([
            'title' => 'Beasiswa Gratis Kuliah S1 di Korea Selatan oleh KAIST (Korea
Advanced Institute of Science and Technology) untuk Lulusan
SMA/Sederajat dan gap year
',
            'description' => '',
            'image_url' => 'https://ieltspresso.com/wp-content/uploads/2024/04/kaist2.jpg',
            'information_link' => 'https://indbeasiswa.com/beasiswa-sma-unggulan-ct-arsa/',
            'enroll_link' => 'https://admission.kaist.ac.kr/intl-undergraduate/notice/notice#1932',
            'end_beasiswa_date' => '2025-01-07',
            'category_id' => [1, 2],
        ]);

    }
}
