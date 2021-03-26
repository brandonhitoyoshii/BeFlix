<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 12; $i++){
            $num = rand(9,13);
            for($j = 1; $j <= $num; $j++){
                DB::table('episodes')->insert([
                    'movie_id' => $i, 
                    'episode' => $j, 
                    'title' => Str::random(12). ' '. Str::random(12)
                ]);
            }
        }
    }
}
