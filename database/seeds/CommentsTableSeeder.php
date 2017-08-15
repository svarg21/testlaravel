<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert(
            array(
                [
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'user_id' => '1',
                    'post_id' => '1',
                    'content' => 'test content',
                    'parent' => '0',
                ],
                [
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'user_id' => '2',
                    'post_id' => '1',
                    'content' => 'test content user2',
                    'parent' => '1',
                ],
                [
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'user_id' => '1',
                    'post_id' => '1',
                    'content' => 'test content qwdqwfqwrqwr',
                    'parent' => '0',
                ],

            )
        );
    }
}
