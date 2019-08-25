<?php
use App\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::where('email','qiuxan@gmail.com')->first();

        if(!$user){
            User::create([
                'name'=>'Xian QIu',
                'email'=>'qiuxan@gmail.com',
                'password'=>Hash::make('2302509'),
                'role'=>'admin',
                ]
            );

        }
        //
    }
}
