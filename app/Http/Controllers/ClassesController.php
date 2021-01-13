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
        $list_class = Classes::all();
        return view('listClass',  compact('list_class'));
    }
}
