<?php

use Illuminate\Database\Seeder;
use App\Models\Reservation;


class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reservations = [
            [
                'user_id' => '1',
                'employee_details_id' => 1,
                'num_of_children' => 4,
                'start_date' => '2020-05-18',
                'end_date' => '2020-05-28'
            ],
            [
                'user_id' => '1',
                'employee_details_id' => 2,
                'num_of_children' => 2,
                'start_date' => '2020-09-18',
                'end_date' => '2020-10-28'
            ],
            [
                'user_id' => '1',
                'employee_details_id' => 3,
                'num_of_children' => 1,
                'start_date' => '2020-05-1',
                'end_date' => '2020-05-27'
            ],
            [
                'user_id' => '1',
                'employee_details_id' => 5,
                'num_of_children' => 3,
                'start_date' => '2020-04-18',
                'end_date' => '2020-05-28'
            ],
            [
                'user_id' => '1',
                'employee_details_id' => 4,
                'num_of_children' => 4,
                'start_date' => '2020-07-18',
                'end_date' => '2020-08-28'
            ]
        ];

        foreach ($reservations as $reservation) {
            Reservation::create(array(
                'user_id' => $reservation['user_id'],
                'employee_details_id' => $reservation['employee_details_id'],
                'num_of_children' => $reservation['num_of_children'],
                'start_date' => $reservation['start_date'],
                'end_date' => $reservation['end_date']
            ));
        }
    }
    }

