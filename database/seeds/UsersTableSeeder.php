<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
              'name' => 'wanisa_bu1995',
              'email' => 'wanisa_bu1995@gmail.com',
              'password' => bcrypt('waniwanisaWITH131'),
              'code_user' => 'UD123456',
              'avatar' => '1483537975.png',
              'email_verified_at' => '2020-08-01 14:27:38',
              'provider' => 'email',
              'is_admin' => 1
            ],
            [
              'name' => 'sajjawatsadu639',
              'email' => 'sajjawatsadu639@gmail.com',
              'password' => bcrypt('sajja5639'),
              'code_user' => 'UD123456',
              'avatar' => '1483537975.png',
              'email_verified_at' => '2020-08-01 14:27:38',
              'provider' => 'email',
              'is_admin' => 1
            ],
            [
              'name' => 'kim kundad',
              'email' => 'kim.kundad@gmail.com',
              'password' => bcrypt('kim1429800'),
              'code_user' => 'UD123456',
              'avatar' => '1483537975.png',
              'email_verified_at' => '2020-08-01 14:27:38',
              'provider' => 'email',
              'is_admin' => 1
            ]
        ]);
    }
}
