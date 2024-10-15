<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run()
    {
        Category::create([
            'section_id' => 1,
            'icon' => 'path/to/icon1.png',
            'name' => [
                'en' => 'Category 1',
                'ar' => 'الفئة 1',
            ],
        ]);

        Category::create([
            'section_id' => 1,
            'icon' => 'path/to/icon2.png',
            'name' => [
                'en' => 'Category 2',
                'ar' => 'الفئة 2',
            ],
        ]);
    }
}
