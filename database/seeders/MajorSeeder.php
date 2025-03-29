<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Major::create([
            "name"=>"Dentist",
            "created_at"=>now(),
        ]);

        Major::create([
            "name"=>"Surgery",
            "created_at"=>now(),
        ]);
    }
}
