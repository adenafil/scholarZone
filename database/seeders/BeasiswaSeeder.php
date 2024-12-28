<?php

namespace Database\Seeders;

use App\Models\Beasiswa;
use Illuminate\Support\Facades\File;
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
        // Path ke file JSON
        $jsonPath = base_path('database/seeders/scholars.json');

        // Baca file JSON
        if (File::exists($jsonPath)) {
            $json = File::get($jsonPath);
            $scholars = json_decode($json, true);

            foreach ($scholars as $data) {
                // Buat beasiswa
                $beasiswa = Beasiswa::create([
                    'title' => $data['title'],
                    'description' => $data['description'],
                    'image_url' => $data['image_url'] ?? null,
                    'information_link' => $data['information_link'] ?? null,
                    'enroll_link' => $data['enroll_link'] ?? null,
                    'end_scholarship_date' => $data['end_scholarship_date'],
                    'country' => $data['country'],
                    'image_header' => $data['image_header'],
                ]);

                // Attach kategori
                if (!empty($data['category_id'])) {
                    $beasiswa->categories()->attach($data['category_id']);
                }
            }

            echo "Beasiswa data has been seeded successfully!";
        } else {
            echo "File scholars.json not found!";
        }
    }
}
