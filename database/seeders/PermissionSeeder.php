<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Liste des permissions du portfolio
        $permissions = [
            'edit post',
            'delete post',
            'create user',
            'edit user',
            'delete user'
        ];

        // Création des permissions
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}