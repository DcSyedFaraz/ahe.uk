<?php

use App\RefrenceStyle;
use Illuminate\Database\Seeder;
use League\CommonMark\Reference\Reference;

class RefrenceStyleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RefrenceStyle::insert([
            [
                "name" => "APA",
            ],
            [
                "name" => "MLA",
            ],
            [
                "name" => "Chicago",
            ],
            [
                "name" => "Turabian",
            ],
            [
                "name" => "Harvard",
            ],
            [
                "name" => "Oxford",
            ],
            [
                "name" => "Vancouver",
            ],
            [
                "name" => "CBE",
            ],
            [
                "name" => "Other",
            ],
        ]);
    }
}
