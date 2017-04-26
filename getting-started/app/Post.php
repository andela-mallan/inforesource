<?php

namespace App;

class Post{

  public function getPosts($session){
    if(!$session->has('posts')){
      $this->createDummyData($session);
    }
    return $session->get('posts');
  }

  public function getPost($session, $id){
    if(!$session->has('posts')){
      $this->createDummyData($session);
    }
    return $session->get('posts')[$id];
  }

  public function editPosts($session, $id, $title, $content){
    if(!$session->has('posts')){
      $this->createDummyData($session);
    }
    $posts = $session->get('posts');
    $posts[$id] = ['title' => $title, 'content' => $content];
    $session->put('posts', $posts);
  }

  public function addPost($session, $title, $content){
    if(!$session->has('posts')){
      $this->createDummyData($session);
    }
    $posts = $session->get('posts');
    array_push($posts, ['title' => $title, 'content' => $content]);
    $session->put('posts', $posts);
  }

  private function createDummyData($session){
    $posts = [
      [
        'title' => 'Laravel',
        'content' => 'Getting started with laravel pluralsight tutorials'
      ],
      [
        'title' => 'Some other title',
        'content' => 'Some other content'
      ]
    ];
    return $session->put('posts', $posts);
  }
}
