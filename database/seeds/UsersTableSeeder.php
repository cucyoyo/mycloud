<?php

use Illuminate\Database\Seeder;
use App\User as User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'id' => 1,
            'name' => '111_student',
            'email' => '111_student@qq.com',
            'password' => Hash::make("123456"),
            'type' => 1,
        ]);
        User::create([
            'id' => 2,
            'name' => '111_teacher',
            'email' => '111_teacher@qq.com',
            'password' => Hash::make("123456"),
            'type' => 2,
        ]);
        User::create([
            'id' => 3,
            'name' => '222_student',
            'email' => '222_student@qq.com',
            'password' => Hash::make("123456"),
            'type' => 1,
        ]);
        User::create([
            'id' => 4,
            'name' => '222_teacher',
            'email' => '222_teacher@qq.com',
            'password' => Hash::make("123456"),
            'type' => 2,
        ]);
    }
}
