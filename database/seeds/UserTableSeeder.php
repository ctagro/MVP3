<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name'          => 'Admin',
            'email'         => 'admin@gmail.com',
            'competence_id' => 1,          
            'password'      => bcrypt('asdfqwer'),
        ]);

        User::create([
            'name'          => 'João Procópio',
            'email'         => 'louresvale@gmail.com',
            'competence_id' => 1,          
            'password'      => bcrypt('asdfqwer'),
        ]);
        
                
        User::create([
            'name'          => 'Matin',
            'email'         => 'matin@gmail.com',
            'competence_id' => 2, 
            'password'      => bcrypt('matin'),
        ]);

        
       

    }
}
