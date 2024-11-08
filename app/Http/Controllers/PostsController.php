<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Posts;
 
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostsController extends Controller
{


 /**
     * Display a listing of the resource.
     *
     * @return View
*/
    public function index(): View
    {
         
        $posts = Posts::all();
        return view( 'page',['posts'=>$posts 
        ]);
    }


 /**
     * Display the specified resource.
     * @param  Request $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
*/


    public function comments(Request $request,$id): RedirectResponse {
    
    $comments = new Comments($request->all());
    $comments->save();
    return redirect (route('view_article',['id' => $id]))->with('status', __('shop.product.status.store.success'));
   
   }


/**
     * Show the form for editing the specified resource.
     * @param  int  $id
     * @return View
     
*/

    public function article($id): View {
    $posts = Posts::find($id);
    return view('posts',['viewposts'=>$posts]);
    
    }
    
}
