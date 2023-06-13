<?php

use App\Deadline;
use Illuminate\Database\Seeder;

class DeadlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Deadline::insert([
            [
                'name'=>'20 Days'
            ],
            [
                'name' => '15 Days',

            ],
            [
                'name' => '10 Days',

            ],
            [
                'name' => '7 Days',
            ],
            [
                'name' => '6 Days',
            ],
            [
                'name' => '5 Days',
            ],
            [
                'name' => '4 Days',
            ],
            [
                'name' => '3 Days',
            ],
            [
                'name' => '48 Hours',
            ],
            [
                'name' => '24 Hours',
            ],
            [
                'name' => '12 Hours',
            ],
            [
                'name' => '6 Hours',
            ],
        ]);
    }
}
