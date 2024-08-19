<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Admin User
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'), 
            'role' => 'admin',
        ]);

        // Create Author User
        User::create([
            'name' => 'Author User',
            'email' => 'author@author.com',
            'password' => Hash::make('author'),
            'role' => 'author',
        ]);

        User::create([
            'name' => 'Regular User',
            'email' => 'user@user.com',
            'password' => Hash::make('user'),
            'role' => 'user',
        ]);
    }
}
