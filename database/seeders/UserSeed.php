<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=array(
            [
                'name'=>'Gabriel',
                'lastname'=>'Pinto',
                'email'=>'gpinto.personal@gmail.com',
                'password'=>\Hash::make('123456')
            ],
            [
                'name'=>'Admin',
                'lastname'=>'Admin',
                'email'=>'admin@gmail.com',
                'password'=>\Hash::make('123456')
            ],
            [
                'name'=>'Marcos',
                'lastname'=>'Flores',
                'email'=>'marcos.flores.r@gmail.com',
                'password'=>\Hash::make('123456')
            ],
        );
        User::insert($data);
    }
}
