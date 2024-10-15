<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SectionItem;

class SectionItemSeeder extends Seeder
{
    public function run()
    {
        SectionItem::create([
            'section_id' => 1,
            'title' => [
                'en' => 'Section Item 1 Title',
                'ar' => 'عنوان عنصر القسم 1',
            ],
            'desc' => [
                'en' => 'Description for Section Item 1',
                'ar' => 'وصف عنصر القسم 1',
            ],
        ]);

        SectionItem::create([
            'section_id' => 1,
            'title' => [
                'en' => 'Section Item 2 Title',
                'ar' => 'عنوان عنصر القسم 2',
            ],
            'desc' => [
                'en' => 'Description for Section Item 2',
                'ar' => 'وصف عنصر القسم 2',
            ],
        ]);
    }
}
