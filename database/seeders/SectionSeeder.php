<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Section;

class SectionSeeder extends Seeder
{
    public function run()
    {
        // إدخال بيانات مترجمة
        Section::create([
            'title' => [
                'en' => 'English Title 1',
                'ar' => 'العنوان باللغة العربية 1',
            ],
            'desc' => [
                'en' => 'English description for section 1',
                'ar' => 'الوصف باللغة العربية للقسم 1',
            ],
            'image' => 'path/to/image1.jpg',
            'link' => 'https://example1.com',
        ]);

        Section::create([
            'title' => [
                'en' => 'English Title 2',
                'ar' => 'العنوان باللغة العربية 2',
            ],
            'desc' => [
                'en' => 'English description for section 2',
                'ar' => 'الوصف باللغة العربية للقسم 2',
            ],
            'image' => 'path/to/image2.jpg',
            'link' => 'https://example2.com',
        ]);
    }
}
