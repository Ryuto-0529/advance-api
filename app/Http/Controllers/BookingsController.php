<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Booking;

class BookingsController extends Controller
{
    public function getUserBookings($user_id)
    {
        if ($user_id) {
            $items = Booking::where('user_id', $user_id)->first();
            return response()->json([
                'message' => 'User bookings got successfully',
                'data' => $items
            ], 200);
        } else {
            return response()->json([
                'status' => 'not found'
            ], 404);
        }
    }

    public function postBooking(Request $request, $shop_id)
    {
        if ($shop_id) {
            $param = [
                'user_id' => $request->user_id,
                'shop_id' => $shop_id,
                'date_time' => $request->date_time,
                'user_number' => $request->user_number
            ];
            DB::table('bookings')->insert($param);


            return response()->json([
                'message' => 'Booking created seccessfully',
                'data' => $param
            ], 200);
        }
    }

    public function deleteBooking($booking_id)
    {
        $item = DB::table('bookings')->where('id', $booking_id)->delete();
        if ($item) {
            return response()->json([
                'message' => 'Booking deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'not found',
            ], 404);
        }
    }
}
