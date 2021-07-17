<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
               'nom'=>'Admin',
               'prenom'=>'Admin',
               'sexe'=>'M',
               'telephone1'=>'622 44 55 66',
               'telephone2'=>'622 44 55 66',
               'pieceIdentite'=>'45125535E2',
               'email'=>'admin@gmail.com',
                'id_role'=>'1',
                'photo'=>'Admin',
               'password'=> bcrypt('12345678'),
            ],
            [
                'nom'=>'Chef tribunal',
                'prenom'=>'Admin',
                'sexe'=>'M',
                'telephone1'=>'622 44 55 66',
                'telephone2'=>'622 44 55 66',
                'pieceIdentite'=>'45125535E2',
                'email'=>'chef@gmail.com',
                 'id_role'=>'2',
                 'photo'=>'Admin',
                'password'=> bcrypt('12345678'),
             ],
             [
                'nom'=>'User',
                'prenom'=>'Admin',
                'sexe'=>'M',
                'telephone1'=>'622 44 55 66',
                'telephone2'=>'622 44 55 66',
                'pieceIdentite'=>'45125535E2',
                'email'=>'user@gmail.com',
                 'id_role'=>'3',
                 'photo'=>'Admin',
                'password'=> bcrypt('12345678'),
             ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
