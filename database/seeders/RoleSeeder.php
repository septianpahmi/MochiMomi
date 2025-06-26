<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        $user = User::create([
            'name' => 'Admin MochiMomi',
            'email' => 'admin@mochi.com',
            'password' => bcrypt('12345678'),
        ]);
        $user->assignRole('admin');
        $user = User::create([
            'name' => 'User MochiMomi',
            'email' => 'user@mochi.com',
            'password' => bcrypt('12345678'),
            'phone' => '08123456789'
        ]);
        $user->assignRole('user');
    }
}
