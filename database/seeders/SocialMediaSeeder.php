<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SocialMedia;

class SocialMediaSeeder extends Seeder
{
    public function run()
    {
        SocialMedia::create([
            'platform' => 'facebook',
            'link' => 'https://facebook.com/example',
        ]);

        SocialMedia::create([
            'platform' => 'twitter',
            'link' => 'https://twitter.com/example',
        ]);

        SocialMedia::create([
            'platform' => 'instagram',
            'link' => 'https://instagram.com/example',
        ]);
    }
}
