<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DefaultAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  User::factory(10)->create();
         DB::table('users')->insert([
            'name' => 'arbree',
            'email' => 'alam.ct013@gmail.com',
            'password' => Hash::make('arbree123'),
        ]);

    }
}
