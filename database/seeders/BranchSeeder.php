<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Branch;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Branch::factory()->create([
            'name' => 'Sucursal Principal',
            'location' => 'Calle Principal 123',
            'telephone' => '555-1234',
        ]);
    }
}
