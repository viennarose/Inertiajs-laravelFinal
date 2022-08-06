<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Appointment;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appointments = [
            [
                'name' => 'Vienna Pepito',
                'contact' => '9168662208',
                'service' => 'Root Canal Treatment',
                'schedule' => '2022-08-15'
            ],
            [
                'name' => 'James Santos',
                'contact' => '9156565464',
                'service' => 'Tooth Extraction',
                'schedule' => '2022-09-10'
            ],
            [
                'name' => 'John Peter',
                'contact' => '934465763',
                'service' => 'Tooth Cleaning',
                'schedule' => '2022-08-11'
            ]

        ];

        foreach($appointments as $ap){
            Appointment::create($ap);
        }
    }
}
