<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class DefaultController extends Controller
{

   public function getIndex( $id = null )
   {
     $data['getpost'] = Post::find($id);

     $data['posts'] = Post::all();

     return view('default.index', $data);
   }


   public function getInfo()
   {
      return view('default.info');
   }

   public function postSavepost(Request $request)
   {
     $postNew =  Post::find($request->id);

     if( !$postNew )
       $postNew = new Post;


       $postNew->name =  $request->name;
       $postNew->save();

      return back();
   }


   public function getDelete($id)
   {
    $post =  Post::find($id);

    if($post)
      $post->delete();

      return back();

   }

}
