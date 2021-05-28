<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0; $i < 20; $i++){
            $employee = new Employee();

            $employee->login = Str::random(10);

            $employee->password = Hash::make('password');

            $employee->district_id = 1;

            $employee->save();
        }

    }
}
