<?php

class Post
{
  public $title;
  public $published;

  public function __construct($title, $published)
  {
    $this->title = $title;
    $this->published = $published;
  }
}


$posts = [
  new Post('My First Post', true),
  new Post('My Second Post', true),
  new Post('My Third Post', true),
  new Post('My Fourth Post', false),
];

$unpublishedPosts = array_filter($posts, function ($posts) {
  return !$posts->published;
});
var_dump($unpublishedPosts);

$modified = array_map(function ($posts) {
  $posts->published = true;
  return $posts;
}, $posts);

var_dump($modified);

$titles = array_column($posts, 'title');
var_dump($titles);
