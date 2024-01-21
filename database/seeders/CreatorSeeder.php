<?php

namespace Database\Seeders;

use App\Models\Creator;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating creators
        $creators = [
            'ΚΕΑΤ-Παράρτημα Θεσσαλονίκης',
            'SCIFY',
            'ΚΕΑΤ-Παράρτημα Θεσσαλονίκης',
            'ΚΕΑΤ-Παράρτημα Aθηνα',
            'SHAPES ΕU team',
            // Add more creators as needed
        ];

        foreach ($creators as $creatorName) {
            Creator::create(['name' => $creatorName]);
        }
    }
}
