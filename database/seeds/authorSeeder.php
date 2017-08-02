<?php

use Illuminate\Database\Seeder;

class authorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         $authors = [
       ['title'=>'kosongin aja', 'content'=>'assalaam.bandung'];
       DB::table('authors')->insert($authors);
    }
}
