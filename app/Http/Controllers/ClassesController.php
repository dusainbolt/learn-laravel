<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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
        $classFirst = $list_class[0];
        return view('listClass',  compact('list_class'));
    }

    // chuc nang don gian truyen userId va tra ve cac lop hoc ma thang user do tao
    public function getClassManagerForUser($userId){
        try {
            $user = User::find($userId);
//            $list_class = $user->classes;


//     $users = User::withCount(['subject', 'classes'])->where('id', $userId)->get();
//            dd($users->toArray());
            $list_class = $user->classes;
//            dd($user_2->toArray());*/
////            dd($user->withClassesSubject);
//            return response()->json($user->classes,
//                SC_QUERY_ERROR);
            return view('classManagerForUser',  compact('list_class'));
         }catch (ModelNotFoundException $ex) { // User not found
            return response()->json([],
                SC_QUERY_ERROR);
        } catch (\Exception $ex) { // Anything that went wrong
            return response()->json([
                "meta" => ["code" => SC_SERVER_ERROR, "msg" => "SERVER LOI"],
                "data" => $ex],
                SC_SERVER_ERROR);
        }
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
