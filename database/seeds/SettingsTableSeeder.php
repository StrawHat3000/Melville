<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
           'address' => 'Russia, New York',
           'contact_number' => ' 09033267831',
           'contact_email' => 'info@melvin.com'
        ]);
    }
}
