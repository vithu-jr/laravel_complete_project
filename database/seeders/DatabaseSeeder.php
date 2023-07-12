<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Task;
use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Listing::factory(10)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'laravel senior devloper',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme corp',
        //     'location' => 'Boston, MN',
        //     'email' => 'email@email.com',
        //     'website' => 'http://www.acme.com',
        //     'description' => 'but also the leap into electronic typesetting, 
        //                remaining essentially unchanged. It was popularised 
        //                in the 1960s with the release of Letraset sheets containing 
        //                Lorem Ipsum passages, and more recently with desktop publishing 
        //                software like Aldus PageMaker including versions of Lorem Ipsum'
        // ]);

        // Listing::create([
        //     'title' => 'full stack devloper',
        //     'tags' => 'laravel, back-end, api',
        //     'company' => 'Start industries',
        //     'location' => 'NewYork, NY',
        //     'email' => 'email12@email.com',
        //     'website' => 'http://www.starkindustries.com',
        //     'description' => 'but also the leap into electronic typesetting, 
        //                remaining essentially unchanged. It was popularised 
        //                in the 1960s with the release of Letraset sheets containing 
        //                Lorem Ipsum passages, and more recently with desktop publishing 
        //                software like Aldus PageMaker including versions of Lorem Ipsum'
        // ]);

        // Task::create([
        //     'task' => 'test case 001',
        //     'description' => 'Lorem Ipsum passages, and more recently with desktop publishing 
        //                       software like Aldus PageMaker including versions of Lorem Ipsum',
        //     'deadline' => '1st may, 2023'
        // ]);

        // Task::create([
        //     'task' => 'test case 002',
        //     'description' => 'Lorem Ipsum passages, and more recently with desktop publishing 
        //                       software like Aldus PageMaker including versions of Lorem Ipsum',
        //     'deadline' => '31st may, 2023'
        // ]);

    }
}
