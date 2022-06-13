<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$blogs = collect([
	    [
		'title'			=> 'ハリーポッターと賢者の石',
		'content'		=> 'ハリー魔法界1年目。'
	    ],
	    [
		'title'			=> 'ファンタスティック・ビーストと魔法使いの旅',
		'content'		=> 'ハリーが使っている教科書の作者の話。'
	    ],
	    [
		'title'			=> 'ハリーポッターと呪いの子',
		'content'		=> 'ハリーとマルフォイの子供が例のあの人を復活させてしまうかもしれない話。'
	    ]
	]);

	$user_ids = collect([
	    1,2,3,4,5,6,7,8,9,10
	]);

	foreach(range(1, 100) as $idx) {
	    $blog	= $blogs->random();
	    $user_id 	= $user_ids->random();
	    Blog::create([
		'title'			=> $blog['title'],
		'content'		=> $blog['content'],
		'created_user_id'	=> $user_id,
	 ]); 
    }
}
}
