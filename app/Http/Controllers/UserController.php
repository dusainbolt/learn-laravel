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
        $list_user = User::all();
        return view('listUser',  compact('list_user'));
    }

    public function addUser(){
        $php = 3;

    }
}
