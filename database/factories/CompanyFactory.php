<?php

namespace Database\Factories;

use App\Models\User;

/**
 * Run the database seeders.
 *
 * @return void
 */
public function run()
{
    User::factory()
        ->count(50)
        ->hasPosts(1)
        ->create();
}
