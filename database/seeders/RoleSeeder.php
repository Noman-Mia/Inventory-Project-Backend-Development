<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'description' => 'Administrator',
        ]);

        Role::create([
            'name' => 'editor',
            'description' => 'Editor',
        ]);

        Role::create([
            'name' => 'author',
            'description' => 'Author',
        ]);

        Role::create([
            'name' => 'user',
            'description' => 'user',
        ]);
    }
}
