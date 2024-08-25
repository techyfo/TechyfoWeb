<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = Admin::where('email','admin@techyfo.com')->first();
        if (!$admin){
            $admin= \App\Models\Admin::create([
                'name' => 'Super Admin',
                'email' => 'admin@techyfo.com',
                'email_verified_at' => now(),
                'password' => Hash::make("password"),
            ]);
        }

    }
}
