<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = collect([
            [
                'name'       => 'クリス・プラット',
                'email'      => 'Chris@2ndwave.jp',
                'password'   => Hash::make("Pratt"),
            ],
            [
                'name'       => 'トム・ホランド',
                'email'      => 'Tom@2ndwave.jp',
                'password'   => Hash::make("Holland"),
            ],
            [
                'name'       => 'ジェンセン・アクレス',
                'email'      => 'jensen@2ndwave.jp',
                'password'   => Hash::make("Ackles"),
            ],
        ]);

        foreach ($users as $user) {
            user::create($user);
        }
    }
}
