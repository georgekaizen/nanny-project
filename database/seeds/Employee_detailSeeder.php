<?php

use Illuminate\Database\Seeder;
use App\Models\Employee_details;

class Employee_detailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employee_details = [
            [
                'employee_id' => 1,
                'type' => 'Luxury Suite',
                'description' => '2000 sqft, 3 king sized beds, full kitchen.',
                'price' => 980.00,
                'image' => 'https://placeimg.com/640/480/arch',
                'work_experience' => '6',
                'availability' => 'now'
            ],
            [
                'employee_id' => 1,
                'type' => 'Double',
                'description' => 'Two queen beds.',
                'price' => 200.00,
                'image' => 'https://placeimg.com/640/480/arch',
                'work_experience' => '1',
                'availability' => 'now'
            ],
            [
                'employee_id' => 2,
                'type' => 'Suite',
                'description' => 'International luxurious room.',
                'price' => 350.00,
                'image' => 'https://placeimg.com/640/480/arch',
                'work_experience' => '3',
                'availability' => 'occupied'
            ],
            [
                'employee_id' => 2,
                'type' => 'Economy',
                'description' => 'One queen bed, mini fridge.',
                'price' => 87.99,
                'image' => 'https://placeimg.com/640/480/arch',
                'work_experience' => '2',
                'availability' => 'working'
            ],
            [
                'employee_id' => 3,
                'type' => 'Suite',
                'description' => 'One ultra wide king bed, full kitchen.',
                'price' => 399.00,
                'image' => 'https://placeimg.com/640/480/arch',
                'work_experience' => '5',
                'availability' => 'now'
            ]
        ];

        foreach ($employee_details as $employee_detail) {
            Employee_details::create(array(
                'employee_id' => $employee_detail['employee_id'],
                'type' => $employee_detail['type'],
                'description' => $employee_detail['description'],
                'price' => $employee_detail['price'],
                'image' => $employee_detail['image'],
                'work_experience' => $employee_detail['work_experience'],
                'availability' => $employee_detail['availability']
            ));
        }
    }
    }
