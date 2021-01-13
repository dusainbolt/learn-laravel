<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\User;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    function getListSubject(){
        $listSubject = Subject::all()->sortByDesc('created_at');
        return view('listSubject',  compact('listSubject'));
    }
}
