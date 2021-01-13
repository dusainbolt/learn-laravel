<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\User;
use Illuminate\Http\Request;

class ClassesController extends Controller
{
    //xy ly request get danh sach class
    /*
     * @step1: xu ly lay du lieu danh sach class
     * @step2: xu ly truyen du lieu danh user ra view
     */
    public function getListClass(){
        $list_class = Classes::all()->sortByDesc('created_at');
        return view('listClass',  compact('list_class'));
    }

    public function addClass(Request $request){
        $class = new Classes();
        $class->name = $request->input('name');
        $class->avatar = $request->input('avatar');
        $class->userId = $request->input('userId');
        $class->subjectId = $request->input('subjectId');
        $class->save();
        dd($class);
    }
}
