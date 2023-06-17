<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statuses = [
            [
                'id'    => '1',
                'name'  => 'Pending',
                'slug'  => 'pending',
                'for'   => 'order',
                'css_class' => 'badge-warning',
            ],
            [
                'id' => '2',
                'name' => 'In Progress',
                'slug' => 'in-progress',
                'for'   => 'order',
                'css_class' => 'badge-info',
            ],
            [
                'id' => '3',
                'name' => 'Completed',
                'slug' => 'completed',
                'for'   => 'order',
                'css_class' => 'badge-success',
            ],
            [
                'id' => '4',
                'name' => 'Unpaid',
                'slug' => 'unpaid',
                'for'   => 'invoice',
                'css_class' => 'badge-warning',
            ],
            [
                'id' => '5',
                'name' => 'Paid',
                'slug' => 'paid',
                'for'   => 'invoice',
                'css_class' => 'badge-success',
            ],
        ];

        Status::insert($statuses);
    }
}
