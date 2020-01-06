<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('books') -> insert([
            ['title'=>'Bonjour',
            'description'=>'comment ça va'],
            ['title'=>'Bonjour',
            'description'=>'comment ça va'],
            ['title'=>'Bonjour',
            'description'=>'comment ça va'],
            ['title'=>'Bonjour',
            'description'=>'comment ça va']  
        ]);
    }
}
