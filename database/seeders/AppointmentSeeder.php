<?php

namespace Database\Seeders;
use App\Models\Appointment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointment::create([
            "name"=>"Ahmed Mohamed",
            "phone"=>"0092838322",
            "email"=>"ahmed@test.com",
            "doctor_id"=> 1,
            "created_at"=>now(),
        ]);

       
    }
}
