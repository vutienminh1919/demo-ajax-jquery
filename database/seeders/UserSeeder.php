<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user = new User();
        $user->name = 'Minh';
        $user->email = 'minh@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();

        $user = new User();
        $user->name = 'Thanh';
        $user->email = 'thanh@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();

        $user = new User();
        $user->name = 'Duc';
        $user->email = 'duc@gmail.com';
        $user->password = Hash::make('123456');
        $user->save();


}
}
