<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = new User;
        $admin->name = 'Admin';
        $admin->email = 'admin@local.com';
        $admin->password = Hash::make('admin');
        $admin->save();
        $admin->roles()->attach(Role::where('name', 'admin')->first());

        $user = new User;
        $user->name = 'User';
        $user->email = 'user@local.com';
        $user->password = Hash::make('user');
        $user->save();
        $user->roles()->attach(Role::where('name', 'user')->first());
    }
}
