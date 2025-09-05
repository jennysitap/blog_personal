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
       $this->call(users_seed::class);
       $this->call(categories_seed::class);
       $this->call(PostSeeder::class);
       //php artisan migrate:fresh --seed
    }
}
