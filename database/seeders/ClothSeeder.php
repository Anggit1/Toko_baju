<?php

namespace Database\Seeders;

use App\Models\Cloth;
use Illuminate\Database\Seeder;

class ClothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Cloth::count() == 0) {
            Cloth::factory(10)->create();
        }
    }
}