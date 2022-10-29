<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreUsersRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\auth;
use App\Models\User;
use App\Models\Comments;
use App\Models\Posts;
use App\Models\profile;

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

     ]);
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

  public function adminlite() {



   }

   /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
   */


    public function create()
    {

    }
      /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,profile $profile)

    {

    // dd($request);

    $profile = new Profile($request->all());

       if ($request->hasFile('avatar')) {
         $profile->avatar = $request->file('avatar')->store('AvatarUsers');
        }

       $profile->save();
       return redirect(route('index'))->with('status', __('update success'));

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show()
    {

     return view('admin.profile');

  }

    /**
     * Show the form for editing the specified resource.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    $user = User::find($id);

        return view('list',
        ['user'=>$user]

     );}

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request;
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request,$id)
    {


$dane = User::find($id);

if ($request->file('avatar')!=null) {


             $oldImagePath = $dane->avatar ;
             DB::table('users')

    	    ->where('id',$id)
            ->update([
             'avatar' => $request->file('avatar')->store('AvatarUsers')

              ]);

                 if ($request->hasFile('avatar')) {
                      if (Storage::exists($oldImagePath)) {
                    Storage::delete($oldImagePath);
                    $user->avatar = $request->file('avatar')->store('AvatarUsers');

    		         }

                   }
           }
              return view('admin.settings',
              ['id'=>$id]) ;
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

       }


}
