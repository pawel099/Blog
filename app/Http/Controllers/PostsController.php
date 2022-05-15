<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\RedirectResponse ;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\auth;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Models\Comments;
use App\Models\Posts;
use App\Models\User;


class PostsController extends Controller
{

/**
     * Display a listing of the resource.
     *
     * @return View
     */

public function index(): View
{

$id = Auth::user()->id;
 $user= DB::Table('Posts')->where('user_id' ,$id)
 ->orderBy('email', 'asc')->limit(5)->get();

 return view("posts.post", [
 'dane' => $user

 ]);

}


/**
* Show the application dashboard.
*
* @return \Illuminate\Contracts\Support\Renderable
*/

/**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


public function create()

 {

  $image = Posts::all();
  $id = Auth::user()->id;

  $user = User::find($id);
  return view("posts.add",[
  'dane' => $user,

 ]);

 }
     /**
     * Store a newly created resource in storage.
     *
     * @param StorePostRequest $request
     * @param posts $posts
     * @return RedirectResponse
*/


public function store(StorePostRequest $request,posts $posts): RedirectResponse
  {

  //dd($request);

 $posts = new Posts($request->all());

   if ($request->hasFile('image')) {
      $posts->image_path = $request->file('image')->store('imagesPosts');
   }

   $posts->save();
   return redirect(route('index'))->with('status', __('update success'));

  }




  /**
       * Store a newly created resource in storage.
       *
       * @param StorePostRequest $request
       * @param int $id
       * @return RedirectResponse
  */


 public function article($id) {

 $post= Posts::find($id);
 return view('frontend-page.viewPosts',[
 'viewposts'=>$post
 ]
 );



 }











    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

 public function show($id)
 {
        //
 }

    /**
     * Show the form for editing the specified resource.
     * @param  Posts $post
     * @return \Illuminate\Http\Response
     */

 public function edit(posts $posts)

{
      return view("posts.edits", [
      'posts' => $posts
   ]);
}

    /**
         * Update the specified resource in storage.
         *
         * @param StorePostRequest $request
         * @param  Posts $posts
         * @return RedirectResponse
         */

  public function update(StorePostRequest $request,Posts $posts) {

     $oldImagePath = $posts->image_path;
     $posts->fill($request->validated());

      if ($request->hasFile('image')) {
         if (Storage::exists($oldImagePath)) {
              Storage::delete($oldImagePath);
            }
               $posts->image_path = $request->file('image')->store('imagesPosts');
         }

     $posts->save();
     return redirect(route('index'))->with('status', __('update success'));



}

  /**
      * Remove the specified resource from storage.
      *
      * @param  int $id
      * @return RedirectResponse
      */

     public function destroy($id)
     {

         $posts = Posts::findOrFail($id);
         $posts->delete();
         return redirect(route('index'))->with('status', __('update success'));


     }

 }
