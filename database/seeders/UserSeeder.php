<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Israel Quintana Paucar',
            'email' => 'iaquintanapa@gmail.com',
            'password' => bcrypt('87654321')
        ]);

        User::factory(99)->create();
    }
}
