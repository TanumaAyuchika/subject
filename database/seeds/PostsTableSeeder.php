<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
  {
    DB::table('posts')->insert([
        'title' => '命名の心得',
        'body' => '命名はデータを基準に考える',
    ]);
    DB::table('posts')->insert([
        'title' => 'エラー文',
        'body' => '読めるようになれば怖くない',
    ]);
    
     factory(App\Post::class, 3)->create();
  }
  
}
