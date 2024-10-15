<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Package::create([
            'image' => 'path/to/image1.png',
            'price' => 100.50,
            'name' => [
                'en' => 'Package 1',
                'ar' => 'الحزمة 1',
            ],
            'category_id' => 1, // افترض أن الـ category_id موجود بالفعل
        ]);

        Package::create([
            'image' => 'path/to/image2.png',
            'price' => 150.75,
            'name' => [
                'en' => 'Package 2',
                'ar' => 'الحزمة 2',
            ],
            'category_id' => 2, // افترض أن الـ category_id موجود بالفعل
        ]);
    }
}
