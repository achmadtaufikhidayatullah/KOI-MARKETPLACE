<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KoiApiController extends Controller
{
    public function terlaris()
    {
        $response = Http::get('https://app.resellr.id/api/market/7/product?filter_terlaris=true&limit=5');

        return response()->json(json_decode($response));
    }

    public function terbaru(Request $request)
    {

        $response = Http::get('https://app.resellr.id/api/market/7/product?random=1&limit=10');

        return response()->json(json_decode($response));
    }

    public function allproduk(Request $request)
    {

        $response = Http::get('https://app.resellr.id/api/market/7/product?random=1&limit=10');

        return response()->json(json_decode($response));
    }

    public function category()
    {
        // return redirect()->away('https://dmarket.id');

        // switch ($_GET['id']) {
        //     case 11 :
        //         $category = 'Green';
        //     break;
        //     case 12 :
        //         $category = 'Organic';
        //     break;
        //     case 13 :
        //         $category = 'Healty';
        //     break;
        //         $category = 'Foods & Drinks';
        //     break;
        //     default :
        //         $category = 'Terlaris';
        //     break;
        // }

        if($_GET['id'] == 7) {
            $url = 'https://app.resellr.id/api/market/7/product?filter_terlaris=true';
        } else {
            $url = 'https://app.resellr.id/api/market/7/product?category=' . $_GET['id'];
        }

        $produks = Http::get($url);
        return($produks);

        // return view('landing.food', compact('produks'));


    }
}
