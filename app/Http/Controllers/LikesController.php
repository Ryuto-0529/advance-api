<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LikesController extends Controller
{
    public function getUserLikes($user_id)
    {
        $items = Like::where('user_id', $user_id)->with('shop')->get();
        if ($user_id) {
            return response()->json([
                'message' => 'Like created successfully',
                'data' => $items
            ], 200);
        } else {
            return response()->json([
                'status' => 'not found'
            ], 404);
        }
    }

    public function putLikes(Request $request, $user_id)
    {
        $param = [
            'user_id' => $user_id,
            'shop_id' => $request->shop_id
        ];
        DB::table('likes')->insert($param);
        if ($user_id) {
            return response()->json([
                'message' => 'Like created successfully',
                'data' => $param
            ], 200);
        }
    }

    public function deleteLikes(Request $request, $user_id)
    {
        DB::table('likes')->where('shop_id', $request->shop_id)->where('user_id', $user_id)->delete();
        return response()->json([
            'message' => 'Like deleted successfully',
        ], 200);
    }
}
