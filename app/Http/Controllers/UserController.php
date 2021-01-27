<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function getCourseRequest(){
        $user = User::find(rand(3,63));
        $user->courseRequest;

        return response()->json([
            "meta" => ["code" => "TEST", "msg" => null],
            "data" => $user],
            SC_DATA_INVALID);

    }

    public function deleteAdmin($id){
        $admin = User::find($id);
        $admin->delete();
        return response()->json([
            "meta" => ["code" => SC_SUCCESS, "msg" => "MSG_DELETE_SUCCESS"],
            "data" => $admin],
            SC_SERVER_ERROR);
    }

    //xy ly request de update admin
    /*
     * @step1: lay id user trong route
     * @step2: update user thong qua id
     */
    public function updateAdmin(Request $request, $id)
    {
        try {
            $validate = Validator::make($request->all(), [
                "fullName" => "required|min:2|max:25",
                "birthday" => "required|integer",
                "email" => "required|email",
                "phoneNumber" => "required|integer",
                "job" => "required|min:4|max:15",
                "avatar" => "required|url",
                "facebook" => "required|url",
                "gender" => "required|integer",
                "country" => "required|min:4|max:25",
                "role" => "required|integer",
                "status" => "required|integer",
            ]);
            if ($validate->fails()) {
                return response()->json([
                    "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->all()],
                    "data" => $validate->errors()->keys()],
                    SC_DATA_INVALID);
            }
            $admin = User::find("1231232132");
            $admin->fullName = $request->fullName;
            $admin->country = $request->country;
            $admin->birthday = $request->birthday;
            $admin->email = $request->email;
            $admin->phoneNumber = $request->phoneNumber;
            $admin->job = $request->job;
            $admin->avatar = $request->avatar;
            $admin->facebook = $request->facebook;
            $admin->gender = $request->gender;
            $admin->country = $request->country;
            $admin->role = $request->role;
            $admin->status = $request->status;
            $admin->save();
            //xem cai gia tri co duoc sua khi toi save khong hay no cache van lay fullName cua luc find
            dd($admin->toArray());
        } catch (ModelNotFoundException $ex) { // User not found
            return response()->json([],
                SC_QUERY_ERROR);
        } catch (\Exception $ex) { // Anything that went wrong
            return response()->json([
                "meta" => ["code" => SC_SERVER_ERROR, "msg" => "SERVER LOI"],
                "data" => $ex],
                SC_SERVER_ERROR);
        }
    }

    //xy ly request get danh sach user
    /*
     * @step1: xu ly lay du lieu danh sach user
     * @step2: xu ly truyen du lieu danh user ra view
     */
    public function getListUser()
    {
        $listUser = User::all()->sortByDesc('created_at');
        return view('listUser', compact('listUser'));
    }

    public function addUserAdmin(Request $request)
    {
        $validate = Validator::make($request->all(), [
            "fullName" => "required|min:2|max:25",
            "birthday" => "required|integer",
            "email" => "required|unique:users|email",
            "phoneNumber" => "required|unique:users|integer",
            "job" => "required|min:4|max:15",
            "avatar" => "required|url",
            "facebook" => "required|unique:users|url",
            "gender" => "required|integer",
            "country" => "required|min:4|max:25",
            "role" => "required|integer",
            "status" => "required|integer",
        ]);
        if ($validate->fails()) {
            return response()->json([
                "meta" => ["code" => "MSG_VALIDATE_ERROR", "msg" => $validate->errors()->all()],
                "data" => $validate->errors()->keys()],
                SC_DATA_INVALID);
        }
        $admin = new User();
        $admin->fullName = $request->fullName;
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
