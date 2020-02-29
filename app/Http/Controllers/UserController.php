<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Post;
use Auth;

class UserController extends Controller
{
    public function getEmail() {

        $user = User::find(1);
        $profile = new Profile;
      
        $profile ->phone="1234567";
        $profile ->address="OMC";
        $profile ->user_id=$user->id;
        $profile ->save();       
        
        $usered = User::find(2);
        $profiled = new Profile;
            $profiled ->phone="123456723546";
            $profiled ->address="BMC";
            $profiled ->user_id= $usered ->id;
            $profiled ->save();       
        
       return "add already";
    }



    function getAllUserWithProfile() {
        $user =User::all();
        // dd($user);
        return view('userAndProfile.userData',compact('user'));
    }

    // function editUserWithProfile() {
    //     $user =User::all();
    //     // dd($user);
    //     return view('userAndProfile.userData',compact('user'));
    // }

    function delete($id) {
        $user =User::find($id);
        // dd($user);
        $user->profile()->delete();
        $user->delete();
       return redirect('profiles');
    }


    function formEdit($id) {
        $user = User::find($id);

        return view('userAndProfile.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update(['name'=>$request->name,'email'=>$request->email]);
        $user->profile()->update(['phone'=>$request->phone,'address'=>$request->address]);
        return redirect('profiles');
    }





    function formAddPost() {
        return view('userWithPost.formAddPost');
    }


    function addPost(Request $request) {
        $user = User::find(Auth::id());
        $post =new Post;

        $post->title=$request->get('title');
        $post->body=$request->get('body');
        $post->user_id=$user->id;
        $post->save();
        return "hello";
    }


    function viewPost() {
        // $user = User::find(Auth::id());
        $users = User::find(Auth::id());

        return view('userWithPost.showPost',compact('users'));
    }


  

    function editFormPost($id) {
        $post = Post::find($id);

        return view('userWithPost.formEditPost',compact('post'));
    }


    public function updatePost(Request $request, $id)
    {
        $post = Post::find($id);
        $post->update(['title'=>$request->title,'body'=>$request->body]);
      
        return redirect('viewPost');
    }

    function deletePost($id) {
        $post =Post::find($id);
        // dd($user);
        $post->delete();
       
       return redirect('viewPost');
    }
}

    
