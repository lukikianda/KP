<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@app.com',
               'division'=>'Administrasi',
               'type'=>1,
               'password'=> bcrypt('password'),
            ],
            [
               'name'=>'Manager User',
               'email'=>'manager@app.com',
               'division'=>'Administrasi',
               'type'=> 2,
               'password'=> bcrypt('password'),
            ],
            [
               'name'=>'User',
               'email'=>'user@app.com',
               'division'=>'Administrasi',
               'type'=>0,
               'password'=> bcrypt('password'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}