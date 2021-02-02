<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comments = ['コメント１','コメント２','コメント３'];

        foreach ($comments as $comment) {
            DB::table('record')->insert([
                'user_id' => 1,
                'mental_health' => 1,
                'body_health' => 1,
                'comment' => $comment,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
