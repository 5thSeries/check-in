<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Group;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->state([
            'name' => 'Alex Howes',
            'email' => 'alex@alexhowes.co.uk',
        ])->create();

        Group::factory()->hasStudents(10)->create();
    }
}
