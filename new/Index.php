<?php

class Post
{

  public $title;

  public $published;

  function __construct($title, $published)
  {
    $this -> title = $title;

    $this -> published = $published;

  }
}

$posts = [

  new Post('My First Post', true),

  new Post('My Second Post', true),

  new Post('My Third Post', true),

  new Post('My Forth Post', false),
];

// $modified = array_map(function ($post) {
//
//   $post -> published = true;
//
//   return $post;
//
// }, $posts);

// $unpublishedPosts = array_filter($posts, function($post) {
//
// return !$post -> published;
//
// });
//
// $unpublishedPosts = array_filter($posts, function($post) {
//
// return !$post -> published;
//
// });

$modified = array_map(function ($post) {

  return (array) $post;

  return $post;

}, $posts);

$titles = array_column($posts, 'title');


var_dump($titles);


 ?>
