<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Advantage;

class AdvantageSeeder extends Seeder
{
    public function run()
    {
        Advantage::create([
            'section_id' => 1,
            'title' => [
                'en' => 'Advantage 1 Title',
                'ar' => 'عنوان الميزة 1',
            ],
        ]);

        Advantage::create([
            'section_id' => 1,
            'title' => [
                'en' => 'Advantage 2 Title',
                'ar' => 'عنوان الميزة 2',
            ],
        ]);
    }
}
