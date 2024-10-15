<?php

namespace Database\Seeders;

use App\Models\Request;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Request::create([
            'phone' => '0123456789',
            'email' => 'example@example.com',
            'link' => 'http://example.com',
            'name' => [
                'en' => 'Request 1',
                'ar' => 'طلب 1',
            ],
        ]);

        Request::create([
            'phone' => '0987654321',
            'email' => 'test@test.com',
            'link' => 'http://test.com',
            'name' => [
                'en' => 'Request 2',
                'ar' => 'طلب 2',
            ],
        ]);
    }
}
