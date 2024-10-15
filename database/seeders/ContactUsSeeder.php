<?php

namespace Database\Seeders;

use App\Models\ContactUs;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ContactUs::create([
            'type' => 'email',
            'value' => 'info@example.com',
        ]);

        ContactUs::create([
            'type' => 'phone',
            'value' => '+123456789',
        ]);
    }
}
