<?php

namespace Database\Seeders;
use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::create([
            "name"=>"Osama Ismael",
            "bio"=>"profissional surgery",
            "experience_years"=> 3,
            "location"=>"Heliopoles",
            "major_id"=> 1,
            "created_at"=>now(),
        ]);
    }
}
