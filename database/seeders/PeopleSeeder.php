<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\People;

class PeopleSeeder extends Seeder
{
    public function run(): void
    {
        for($i = 0; $i < 200; $i++){
            People::factory()->create();
        }
    }
}
