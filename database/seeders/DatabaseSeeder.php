<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use MoonShine\Models\MoonshineUser;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        MoonshineUser::query()->create(
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@a.a',
                'password' => bcrypt('123456'),
            ]
        );
    }
}
