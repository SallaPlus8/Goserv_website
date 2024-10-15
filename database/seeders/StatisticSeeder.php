<?php

namespace Database\Seeders;

use App\Models\Statistic;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatisticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Statistic::create([
            'completed_projects' => 150,
            'current_client' => 50,
            'current_projects' => 10,
            'satisfied_client' => 45,
            'icon' => 'path/to/icon1.png',
            'name' => [
                'en' => 'Statistics 1',
                'ar' => 'الإحصائية 1',
            ],
        ]);

        Statistic::create([
            'completed_projects' => 200,
            'current_client' => 60,
            'current_projects' => 15,
            'satisfied_client' => 55,
            'icon' => 'path/to/icon2.png',
            'name' => [
                'en' => 'Statistics 2',
                'ar' => 'الإحصائية 2',
            ],
        ]);
    }
}
