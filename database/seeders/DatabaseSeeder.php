<?php

namespace Database\Seeders;

<<<<<<< HEAD
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
=======
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
>>>>>>> 6f63f15ae31d3258c4b56862751e4a7ffa5bf0eb

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        \App\Models\User::factory(1)->create([
            'name' => 'Admin',
            'email' => 'iago.pereira@gmail.com',
            'password' => Hash::make('12345678'),
            'admin' => true
        ]);
=======
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
>>>>>>> 6f63f15ae31d3258c4b56862751e4a7ffa5bf0eb
    }
}
