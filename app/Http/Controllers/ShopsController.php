<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Support\Facades\DB;

class ShopsController extends Controller
{
    public function getShops() {
        $items = Shop::with('area', 'genre', 'like')->get();
        return response()->json([
            'message' => 'Shops got successfully',
            'data' => $items
        ], 200);
    }

    public function getShop($shop_id)
    {
        $items = Shop::where('id', $shop_id)->with('area', 'genre', 'like')->get();
        if ($shop_id) {
            return response()->json([
                'message' => 'Shop got successfylly',
                'data' => $items,
            ], 200);
        } else {
            return response()->json([
                'status' => 'not found'
            ], 404);
        }
    }
}
