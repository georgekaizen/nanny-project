<?php

use Illuminate\Database\Seeder;
use App\Models\Employee;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            [
                'names' => 'Marriott',
                'phonenumber' => '0712321321',
                'location' => 'Seattle, WAl.',
                'image' => 'https://placeimg.com/640/480/arch',
                'national_id' => '12345678',
                'description' => 'Best in cooking'
            ],
            [
                'names' => 'Aria',
                'phonenumber' => '0712321329',
                'location' => 'Kenyatta, WAl.',
                'image' => 'https://placeimg.com/640/480/arch',
                'national_id' => '12345679',
                'description' => 'Best in children'
            ],
            [
                'names' => 'MGM Grand',
                'phonenumber' => '0712321355',
                'location' => 'kiambu, WAl.',
                'image' => 'https://placeimg.com/640/480/arch',
                'national_id' => '12345645',
                'description' => 'Best in dishes'
            ]
        ];

        foreach ($employees as $employee) {
            Employee::create(array(
                'names' => $employee['names'],
                'phonenumber' => $employee['phonenumber'],
                 'location' => $employee['location'],
                 'image' => $employee['image'],
                 'national_id' => $employee['national_id'],
                'description' => $employee['description'],

            ));
        }
    }
}
