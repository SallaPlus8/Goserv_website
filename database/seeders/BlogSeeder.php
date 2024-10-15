<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Blog::create([
            'image' => 'path/to/image1.png',
            'title_en'=>'title',
            'title_ar'=>'عنوان',

            'user_id' => 1, // افترض أن user_id موجود بالفعل
            'content_en' => 'This is the content of the first blog in English.',
            'content_ar' => 'هذا هو محتوى المقال الأول باللغة العربية.',
            'category_id' => 1, // افترض أن category_id موجود بالفعل
        ]);

        Blog::create([
            'image' => 'path/to/image2.png',
            'title_en'=>'title',
            'title_ar'=>'عنوان',
            'user_id' => 2, // افترض أن user_id موجود بالفعل
            'content_en' => 'This is the content of the second blog in English.',
            'content_ar' => 'هذا هو محتوى المقال الثاني باللغة العربية.',
            'category_id' => 2, // افترض أن category_id موجود بالفعل
        ]);
    }
}
