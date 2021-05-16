<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function getUser($user_id)
    {
        if ($user_id) {
            $items = DB::table('users')->where('id', $user_id)->first();
            return response()->json([
                'message' => 'User got successfully',
                'data' => $items
            ], 200);
        } else {
            return response()->json(['status' => 'not found'], 404);
        }
    }

    // public function put(Request $request)
    // {
    //     $param = [
    //         'email' => $request->email
    //     ];
    //     DB::table('users')->where('email', $request->email)->update($param);
    //     return response()->json([
    //         'message' => 'User updated successfully',
    //         'data' => $param
    //     ], 200);
    // }
}
