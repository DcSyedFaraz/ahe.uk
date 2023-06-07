<?php

use App\AcademicLevel;
use Illuminate\Database\Seeder;

class AcademicLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AcademicLevel::insert([
[
            'name'=> 'College'
        ],

            [
            'name'=>'Undergraduate'
        ],
        [
            'name'=> "Masters"
        ],
        [
            'name'=> "Mphil/PhD"
        ],
        
        ]);
    }
}
