<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->delete();
        DB::table('clients')->insert([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'johndoe@test.com',
            'phone' => '1234567890',
            'user_id' => 1,
        ]);

        DB::table('clients')->insert([
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'janedoe@test.com',
            'phone' => '0987654321',
            'user_id' => 2,
        ]);

        DB::table('clients')->insert([
            'first_name' => 'Ana',
            'last_name' => 'Anić',
            'email' => 'anaanic@test.com',
            'phone' => '0984354321',
            'user_id' => 3,
        ]);
    }
}
