<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;
use Illuminate\Session\Store;

class PostController extends Controller
{
    public function getIndex(Store $session){
      $post = new Post();
      $posts = $post->getPosts($session);
      return view('blog.index', ['posts' => $posts]);
    }

    public function getPost(Store $session, $id){
      $post = new Post();
      $single_post = $post->getPost($session, $id);
      return view('blog.post', ['post' => $single_post]);
    }

    public function getAdminIndex(Store $session){
      $post = new Post();
      $posts = $post->getPosts($session);
      return view('admin.index', ['posts' => $posts]);
    }

    public function getAdminEdit(Store $session, $id){
      $post = new Post();
      $edit_post = $post->getPost($session, $id);
      return view('admin.edit', ['post' => $edit_post, 'post_id' => $id]);
    }

    public function postAdminEdit(Store $session, $id, Request $request){
      $this->validate($request, ['title' => 'required|Min:5',
                                 'content' => 'required|Min:10']);
      $post = new Post();
      $post->editPosts($session, $request->input('id'), $request->input('title'), $request->input('content'));
      return redirect()->route('admin.index')->with('info', 'Post edited, New Title: ' . $request->input('title'));
    }

    public function getAdminCreate(Store $session){
      return view('admin.create');
    }

    public function postAdminCreate(Store $session, Request $request){
      $this->validate($request, ['title' => 'required|Min:5',
                                 'content' => 'required|Min:10']);
      $post = new Post();
      $post->addPost($session, $request->input('title'), $request->input('content'));
      return redirect()->route('admin.index')->with('info', 'Post created, Title: ' . $request->input('title'));
    }
}
