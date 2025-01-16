<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Friend;
use App\Models\Message;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use Database\Seeders\ClassesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),
        ]);
        $this->call(ClassesSeeder::class);
        Friend::factory()
            ->count(100)
            ->has(Profile::factory())
            ->has(Message::factory()->count(10))
            ->create();
    }
}
