<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Branch;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branch = Branch::factory()->create([
            'name' => 'Sucursal Principal',
            'location' => 'Calle Principal 123',
            'telephone' => '555-1234',
        ]);
        
        $user = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'branch_id' => $branch->id,
        ]);

        $user->assignRole('Admin');
        $this->call(RolePermissionSeeder::class);
       
    }
}