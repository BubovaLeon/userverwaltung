<?php

use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
                'title' => 'Meetup',
                'description' => 'Example Meetup',
                'datetime' => new DateTime,
                'duration' => 90,
                'creator' => 'Admin User',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]);

        DB::table('events')->insert([
                'title' => 'Sports',
                'description' => 'Sports Meetup',
                'datetime' => new DateTime,
                'duration' => 45,
                'creator' => 'Admin User',
                'created_at' => new DateTime,
                'updated_at' => new DateTime
            ]);
    }
}
