<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;


class DepartmentsTableSeeder extends Seeder
{
    public function run()
    {
        $departments = [
            ['name' => 'Cardiology'],
            ['name' => 'Dermatology'],
            ['name' => 'Endocrinology'],
            ['name' => 'Gastroenterology'],
            ['name' => 'Neurology'],
        ];

        foreach ($departments as $department) {
            Department::create($department);
        }
    }
}