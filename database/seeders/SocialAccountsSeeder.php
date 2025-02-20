<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SocialAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $platforms = ['Facebook', 'Instagram', 'Twitter', 'LinkedIn'];
        $users = ['John Doe', 'Jane Smith', 'Alice Johnson', 'Bob Brown'];

        foreach ($platforms as $platform) {
            foreach ($users as $user) {
                DB::table('social_accounts')->insert([
                    'platform' => $platform,
                    'account_name' => $user,
                    'active_status' => true,
                    'connection_type' => 'Official',
                    'connection_status' => 'Connected',
                    'account_type' => 'Profile',
                    'social_id' => Str::random(10),
                    'token' => Hash::make(Str::random(20)),
                    'refresh_token' => Hash::make(Str::random(20)),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}

