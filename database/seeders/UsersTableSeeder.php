<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            //admin
            [
                'name' => 'Admin',
            
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
                'status' => 'active',
            
            ],

            //informatics collage registral
            [
                'name' => 'Anduamlak Dilnessa',

                'email' => 'anduamlak@gmail.com',
                'password' => Hash::make('111'),
        
                'role' => 'collage_registral',
                'status' => 'active',
            ],

            //informatics collage dean
            [
                'name' => 'Agriculture Expert',
                'email' => 'agriexpert@gmail.com',
                'password' => Hash::make('111'),
  
                'role' => 'agri_expert',
                'status' => 'active',
            ],

            // Head
            [
                'name' => 'Mekdes Emagnu',
                'email' => 'mekdes@gmail.com',
                'password' => Hash::make('111'),
    
                'role' => 'department_head',
                'status' => 'active',
            ],

            //users                   //admin
            [
                'name' => 'Tsehay Taso',
                'email' => 'tsehay@gmail.com',
                'password' => Hash::make('111'),
    
                'role' => 'stuff',
                'status' => 'active',
            ],
        ]);

        //
    }
}
