<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //xy ly request get danh sach user
    /*
     * @step1: xu ly lay du lieu danh sach user
     * @step2: xu ly truyen du lieu danh user ra view
     */
    public function getListUser(){
        $listUser = User::all()->sortByDesc('created_at');
        return view('listUser',  compact('listUser'));
    }

    public function addUserAdmin(Request $request){
        $admin = new User();
        $admin->fullName = $request->input('fullName');
        $admin->birthday = $request->input('birthday');
        $admin->email = $request->input('email');
        $admin->phoneNumber = $request->input('phoneNumber');
        $admin->job = $request->input('job');
        $admin->avatar = $request->input('avatar');
        $admin->facebook = $request->input('facebook');
        $admin->gender = $request->input('gender');
        $admin->country = $request->input('country');
        $admin->role = $request->input('role');
        $admin->status = $request->input('status');
        $admin->save();
        dd($admin);
    }
}
