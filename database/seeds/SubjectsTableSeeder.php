<?php

use Illuminate\Database\Seeder;
use App\Models\Users\Subjects;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                DB::table('Subjects')->insert([
['Subject'=>'国語'],
['Subject'=>'数学'],
['Subject'=>'英語']
            ]);// 国語、数学、英語を追加
    }
}
