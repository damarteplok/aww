<?php

use Illuminate\Database\Seeder;

class CreditsTableSeeder extends Seeder
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

        	'name' => 'Gaji',
        	'description' => 'Sed aliqua veniam minim cillum aliquip velit in duis sit voluptate mollit.'

        ];

        $p2 = [

        	'name' => 'Tunjangan',
        	
        	'description' => 'Sed aliqua veniam minim cillum aliquip velit in duis sit voluptate mollit.'

        ];

        $p3 = [

        	'name' => 'Bonus',
        	
        	'description' => 'Sed aliqua veniam minim cillum aliquip velit in duis sit voluptate mollit.'

        ];

        $p4 = [

        	'name' => 'Gaji 1',
        	'description' => 'Sed aliqua veniam minim cillum aliquip velit in duis sit voluptate mollit.'

        ];

        $p5 = [

        	'name' => 'Tunjangan 1',
        	
        	'description' => 'Sed aliqua veniam minim cillum aliquip velit in duis sit voluptate mollit.'

        ];

        $p6 = [

        	'name' => 'Bonus 1',
        	
        	'description' => 'Sed aliqua veniam minim cillum aliquip velit in duis sit voluptate mollit.'

        ];
        App\Credit::create($p1);
        App\Credit::create($p2);
        App\Credit::create($p3);
        App\Credit::create($p4);
        App\Credit::create($p5);
        App\Credit::create($p6);
    }
}
