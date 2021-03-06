<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user =  User::create([
                  'name' => 'Kid Darkness',
                  'email' => 'darknet21@gmail.com',
                  'password' => bcrypt('strawhat'),
                  'admin' => 1
                ]);

        Profile::create([
          'user_id' => $user->id,
           'avatar' => 'uploads/avatars/1.jpg',
           'about'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
           'facebook' => 'facebook.com',
           'instagram' => 'instagram.com'
        ]);
    }
}
