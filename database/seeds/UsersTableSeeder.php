<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$user = User::where('email', 'kiattisak.ch1995@gmail.com')->first();
        if(!$user)
        {*/
            User::create([
                'firstname' => 'Kiattisak',
                'lastname' => 'Chantharamaneechote',
                'email' => 'kiattisak.ch1995@gmail.com',
                'password' => Hash::make('Nutnut4407'),
                'phone' => '0918526769',
                'role' => 'admin'
            ]);
        //}
    }
}
