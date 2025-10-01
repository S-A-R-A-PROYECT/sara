<?php

namespace Database\Seeders;

use App\Models\Journey;
use App\Models\Newness;
use App\Models\Record;
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

        User::factory(10)->create();

        User::factory()
            ->has(Newness::factory()->count(3))
            ->create();

        Journey::factory()
            ->has(Record::factory()
                ->has(User::factory()->count(1))
                ->count(3))
            ->create();
    }
}
