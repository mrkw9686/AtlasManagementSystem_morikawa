<?php

use Illuminate\Database\Seeder;
use App\Models\Users\User;

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
            ['under_name' => '山田','over_name' => '山田','over_name_kana' => 'ヤマダ','under_name_kana' => 'サンダ','mail_address' => 'yy@gmail.com','sex' => '2','birth_day' => '1996.2.2','role'=>'1','password' => bcrypt('0000')]
            ]);
    }
}
