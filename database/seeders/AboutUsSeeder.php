<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutUs;
use App\Models\AboutUsItem;
use App\Models\AboutUsAdvantage;

class AboutUsSeeder extends Seeder
{
    public function run()
    {
        $aboutUs = AboutUs::create([
            'desc1' => ['en' => 'Description 1 in English', 'ar' => 'الوصف 1 بالعربية'],
            'desc2' => ['en' => 'Description 2 in English', 'ar' => 'الوصف 2 بالعربية'],
        ]);

        AboutUsItem::create([
            'title' => 'Item 1 Title',
            'desc' => 'Item 1 Description',
            'about_us_id' => $aboutUs->id,
        ]);

        AboutUsAdvantage::create([
            'title' => 'Advantage 1 Title',
            'about_us_id' => $aboutUs->id,
        ]);
    }
}

