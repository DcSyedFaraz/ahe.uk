<?php

use App\Fare;
use Illuminate\Database\Seeder;

class FareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fare::insert([
            //College
            ['academic_level_id'=>1,
             'deadline_id'=>1,
             'per_page_price'=>40
            ],
            ['academic_level_id'=>1,
             'deadline_id'=>2,
             'per_page_price'=>45
            ],
            ['academic_level_id'=>1,
             'deadline_id'=>3,
             'per_page_price'=>55
            ],
            ['academic_level_id'=>1,
             'deadline_id'=>4,
             'per_page_price'=>60
            ],
            ['academic_level_id'=>1,
             'deadline_id'=>5,
             'per_page_price'=>65
            ],
            ['academic_level_id'=>1,
             'deadline_id'=>6,
             'per_page_price'=>70
            ],
            ['academic_level_id'=>1,
            'deadline_id'=>7,
            'per_page_price'=>75
           ],
           ['academic_level_id'=>1,
           'deadline_id'=>8,
           'per_page_price'=>85
          ],
          ['academic_level_id'=>1,
          'deadline_id'=>9,
          'per_page_price'=>105
         ],
         ['academic_level_id'=>1,
          'deadline_id'=>10,
          'per_page_price'=>115
         ],
         ['academic_level_id'=>1,
         'deadline_id'=>11,
         'per_page_price'=>155
        ],
        ['academic_level_id'=>1,
         'deadline_id'=>12,
         'per_page_price'=>175
        ],

        //UnderGraduate

        ['academic_level_id'=>2,
        'deadline_id'=>1,
        'per_page_price'=>50
       ],
       ['academic_level_id'=>2,
        'deadline_id'=>2,
        'per_page_price'=>55
       ],
       ['academic_level_id'=>2,
        'deadline_id'=>3,
        'per_page_price'=>65
       ],
       ['academic_level_id'=>2,
        'deadline_id'=>4,
        'per_page_price'=>70
       ],
       ['academic_level_id'=>2,
        'deadline_id'=>5,
        'per_page_price'=>75
       ],
       ['academic_level_id'=>2,
        'deadline_id'=>6,
        'per_page_price'=>80
       ],
       ['academic_level_id'=>2,
       'deadline_id'=>7,
       'per_page_price'=>85
      ],
      ['academic_level_id'=>2,
      'deadline_id'=>8,
      'per_page_price'=>95
     ],
     ['academic_level_id'=>2,
     'deadline_id'=>9,
     'per_page_price'=>115
    ],
    ['academic_level_id'=>2,
     'deadline_id'=>10,
     'per_page_price'=>125
    ],
    ['academic_level_id'=>2,
    'deadline_id'=>11,
    'per_page_price'=>165
   ],
   ['academic_level_id'=>2,
    'deadline_id'=>12,
    'per_page_price'=>185
   ],

    // Master's
    [
        'academic_level_id'  => 3, // master
        'deadline_id'        => 1, // 20 days
        'per_page_price'     => 60
     ],
     [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 2, // 15 days
         'per_page_price'     => 65
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 3, // 10 days
         'per_page_price'     => 75
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 4, // 7 days
         'per_page_price'     => 80
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 5, // 5 days
         'per_page_price'     =>85
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 6, // 4 days
         'per_page_price'     => 90
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 7, // 3 days
         'per_page_price'     => 95
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 8, // 2 days
         'per_page_price'     => 105
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 9, // 1 days
         'per_page_price'     => 125
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 10, // 12 hours
         'per_page_price'     => 135
      ],
      [
         'academic_level_id'  => 3, // master
         'deadline_id'        => 11, // 6 hours
         'per_page_price'     => 175
      ],
      [
        'academic_level_id'  => 3, // master
        'deadline_id'        => 12, // 6 hours
        'per_page_price'     => 195
     ],

    //   Mphil And PHD

    [
        'academic_level_id'=>4,
        'deadline_id'=>1,
        'per_page_price'=>7
    ],
    [
        'academic_level_id'=>4,
        'deadline_id'=>2,
        'per_page_price'=>9
    ]
     ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>3,
        'per_page_price'=>11
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>4,
        'per_page_price'=>13
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>5,
        'per_page_price'=>15
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>6,
        'per_page_price'=>17
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>7,
        'per_page_price'=>19
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>8,
        'per_page_price'=>21
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>9,
        'per_page_price'=>23
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>10,
        'per_page_price'=>25
    ]
    ,
    [
        'academic_level_id'=>4,
        'deadline_id'=>11,
        'per_page_price'=>27
    ]

        ]);
    }
}
