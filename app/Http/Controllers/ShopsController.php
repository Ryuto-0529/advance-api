<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Support\Facades\DB;

class ShopsController extends Controller
{
    public function getShops() {
        $items = Shop::all();
        return response()->json([
            'message' => 'Shops got successfully',
            'data' => $items
        ], 200);
    }

    public function getShop($shop_id)
    {
        if ($shop_id) {
            $items = Shop::find($shop_id);
            // $items->areas->area;
            // $items->genres->genre;
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
