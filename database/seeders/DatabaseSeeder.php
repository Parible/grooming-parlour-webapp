<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Customer;
use App\Models\Transactions;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'   => 'Admin',
            'email'  => 'testadmin@gmail.com',
            'password'   => Hash::make('Admin@12'),
             'role' => 'admin',
        ]);
        User::create([

          
            'name'   => 'User',
            'email'  => 'testuser@gmail.com',
            'password'   => Hash::make('User@12'),
             'role' => 'user',
        ]);
        Customer::factory()->count(200)->create();
        // Transactions::factory()->count(200)->create();
        // User::factory()->count(20)->create();
       ;
    }
}
