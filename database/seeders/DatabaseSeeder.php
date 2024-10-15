<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            UserSeeder::class,

            SectionSeeder::class,
            SectionItemSeeder::class,
            AdvantageSeeder::class,
            CategorySeeder::class,
            CategoryItemSeeder::class,
            RequestSeeder::class,
            PackageSeeder::class,
            BlogSeeder::class,
            CommentSeeder::class,
            ContactUsSeeder::class,
            SocialMediaSeeder::class,

        ]);
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
