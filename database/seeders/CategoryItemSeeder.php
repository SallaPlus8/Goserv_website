<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CategoryItem;

class CategoryItemSeeder extends Seeder
{
    public function run()
    {
        CategoryItem::create([
            'category_id' => 1,
            'icon' => 'path/to/icon1.png',
            'name' => [
                'en' => 'Category Item 1',
                'ar' => 'عنصر الفئة 1',
            ],
        ]);

        CategoryItem::create([
            'category_id' => 1,
            'icon' => 'path/to/icon2.png',
            'name' => [
                'en' => 'Category Item 2',
                'ar' => 'عنصر الفئة 2',
            ],
        ]);
    }
}
