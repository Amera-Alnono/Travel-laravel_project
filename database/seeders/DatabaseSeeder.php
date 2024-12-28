<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Booking;
use App\Models\Event;
use App\Models\Hotel;
use App\Models\Massage;
use App\Models\Payment;
use App\Models\Places;
use App\Models\Review;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Booking::factory(20)->create();
        User::factory(20)->create();
        Event::factory(20)->create();
        Hotel::factory(20)->create();
        Places::factory(20)->create();
        Review::factory(20)->create();
        Massage::factory(20)->create();
        Service::factory(20)->create();
        Payment::factory(20)->create();


    }
}
