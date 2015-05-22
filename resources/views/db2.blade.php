<?php
// // select
// $posts = DB::select('select * from post');
// foreach ($posts as $post) {
//     echo $post->title . '<br>';
// }

// // select query with parameter
// $posts = DB::select('select * from post where status = ?', array('draft'));
// foreach ($posts as $post) {
//     echo $post->title . '<br>';
// }

// // insert
// DB::update('insert into post(title, content) values (?, ?)', array('Postingan baru', 'Konten baru bro'));

// // update
// DB::update('update post set content = ? where id = ?', array('Update postingan baru', 4));

// // delete
// $deletedCount = DB::delete('delete from post where comment_count = 0');
// echo $deletedCount;

// // general statement
// DB::statement('alter table post add column created datetime null');

// // transaction
// DB::transaction(function(){
//     ...query 1
//     ...query 2
// });

// select multiple row
$posts = DB::table('post')->get();
foreach ($posts as $post) {
    echo $post->title . '<br>';
}

echo "<br>";

// select satu row
$post = DB::table('post')->where('id', 1)->first();
	echo $post->title.' '.$post->status . '<br>';

// select kolom tertentu
$post = DB::table('post')->select('id', 'title')->where('id', 1)->first();

echo "<br>";
// select satu kolom
$lastArticleTitle = DB::table('post')->orderBy('id', 'desc')->pluck('title');
echo 'Judul artikel terakhir: ' . $lastArticleTitle . '<br>';

// DB::update('insert into post values (?,?,?,?,?)',array(4,'halo','content 4',0,'publish'));

$query = DB::table('post')->addSelect('id','title','comment_count');
// $query->addSelect('title');
$query->where('status', 'publish');
$query->where('id', '>', 1);
$query->where('comment_count', 0);

echo "<br>";
$posts = $query->get();
// $posts = DB::table('post')->get();
$posts = DB::table('post')->skip(1)->take(3)->get();
foreach ($posts as $post) {
    echo $post->id . ' : '. $post->title . ' : '. $post->comment_count .'<br>';
}


?>