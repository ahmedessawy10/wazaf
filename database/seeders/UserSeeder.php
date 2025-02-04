<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employer;
use App\Models\Candidate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $candidate = User::create([
            'name' => 'Candidate',
            'email' => 'candidate@example.com',
            'role' => 'candidate',
            'password' => Hash::make('1234')
        ]);
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'role' => 'admin',
            'password' => Hash::make('1234')
        ]);
        $employer = User::create([
            'name' => 'employer',
            'email' => 'employer@example.com',
            'role' => 'employer',
            'password' => Hash::make('1234')
        ]);


        Candidate::create([
            'user_id' => $candidate->id,
            'job_title' => 'developer',
            'summary' => 'summary',
            'date_of_birth' => '2000-11-11',
            'phone' => 'phone',
            'country' => 'country',
            'city' => 'city',
            'address' => 'address',
            'military_status' => 'yes',
            'gender' => 'male',

        ]);

        Employer::create([
            'user_id' => $employer->id,
            'company_name' => 'company_name',
            'company_email' => 'company_email',
            'about_us' => 'nice company',
            'phone' => '010091232',
        ]);
    }
}
