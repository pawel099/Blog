<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUsersRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\auth;
use App\Models\User;
use App\Models\Comments;
use App\Models\Posts;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

     $user = new User();
     $user = User::paginate(1);

     return view ('admin.list',[
     'wynik'=>$user

     ]


    );
  }


/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  public function adminlite()
      {
         $post = Posts::all();

         return view ('admin.settings',[
              'wyniki'=>$post

              ]);


    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $coments= Comments::paginate(1);
        return view('admin.commentsList',[
        'comments'=>$coments
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

    $wynik = User::find(Auth::User()->id);

         return view('skin.konta',[
        'user'=>$wynik

       ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request;
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

      $user = Auth::User();

      DB::table('users')
      ->where('id',$user->id)
      ->update( [

        'name' => $request->name,
        'email' => $request->email,
        'role' => $request->role,
    ]);

 return redirect(route('index'))->with('status', __('update success'));
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/admin');
    }

   /**
        * Remove the specified resource from storage.
        *
        * @param  int  $id
        * @return \Illuminate\Http\Response
        */
       public function delete($id)
       {
           $comments = Comments::findOrFail($id);
           $comments->delete();
           return redirect('/settings');
       }


}
