<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Nanda Admin',
            'email' => 'nanda@bprbde.co.id',
            'password' => Hash::make('12345678'),
        ]);

        //data dummy for company
        \App\Models\Company::create([
            'name' => 'PT Atlas Indonesia',
            'email' => 'nanda@atlas.co.id',
            'address' => 'Jl Kaluirang Km 17, Pesanggrahan, Pakem, Sleman, DIY',
            'latitude' => '-7.777333',
            'longitude' => '110.377993',
            'radius_km' => '0.5',
            'time_in' => '08:00',
            'time_out' => '17:00',
        ]);

        //data dummy for attendance call attendance seeders
        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
