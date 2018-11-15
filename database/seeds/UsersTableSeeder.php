<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
          'name' => 'Kid Darkness',
          'email' => 'darknet21@gmail.com',
          'password' => bcrypt('strawhat')
        ]);
    }
}
