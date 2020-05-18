<?php

use App\Person;
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        Person::truncate();

        Person::create([
 
             'first_name' => 'mark',
             'last_name' => 'James',
             'phone' => '09022334455',
             'email' => 'mark@gmail.com',
             'city' => 'Lagos'
 
         ]);
 
 
         Person::create([
 
             'first_name' => 'second',
             'last_name' => 'steve',
             'phone' => '09055443322',
             'email' => 'second@gmail.com',
             'city' => 'Lagos'
 
         ]);
 
 
          Person::create([
 
             'first_name' => 'Third',
             'last_name' => 'kings',
             'phone' => '08099336644',
             'email' => 'third@gmail.com',
             'city' => 'Lagos'
 
         ]);
 
 
 
          Person::create([
 
             'first_name' => 'Fourth',
             'last_name' => 'Bitron',
             'phone' => '09078633445',
             'email' => 'fourth@gmail.com',
             'city' => 'Lagos'
 
         ]);
 
        
 
          Person::create([
 
             'first_name' => 'Fifth',
             'last_name' => 'Eli',
             'phone' => '09022337765',
             'email' => 'fifth@gmail.com',
             'city' => 'Ekiti'
 
         ]);
 
        
         
    }
}
