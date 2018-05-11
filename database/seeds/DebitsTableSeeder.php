<?php

use Illuminate\Database\Seeder;

class DebitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $p1 = [

        	'name' => 'Sewa Kost',
        	'description' => 'Sed aliqua veniam minim cillum aliquip velit in duis sit voluptate mollit.'

        ];

        $p2 = [

        	'name' => 'Makan',
        	
        	'description' => 'Sed aliqua veniam minim cillum aliquip velit in duis sit voluptate mollit.'

        ];

        $p3 = [

        	'name' => 'Pakean',
        	
        	'description' => 'Sed aliqua veniam minim cillum aliquip velit in duis sit voluptate mollit.'

        ];

        $p4 = [

        	'name' => 'asd 1',
        	'description' => 'Sed aliqua veniam minim cillum aliquip velit in duis sit voluptate mollit.'

        ];

        $p5 = [

        	'name' => 'qwe 1',
        	
        	'description' => 'Sed aliqua veniam minim cillum aliquip velit in duis sit voluptate mollit.'

        ];

        $p6 = [

        	'name' => 'sdsd 1',
        	
        	'description' => 'Sed aliqua veniam minim cillum aliquip velit in duis sit voluptate mollit.'

        ];
        App\Debit::create($p1);
        App\Debit::create($p2);
        App\Debit::create($p3);
        App\Debit::create($p4);
        App\Debit::create($p5);
        App\Debit::create($p6);
    }
}
