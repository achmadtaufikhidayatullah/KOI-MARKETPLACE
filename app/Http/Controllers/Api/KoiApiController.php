<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KoiApiController extends Controller
{
    public function terlaris()
    {
        $response = Http::get('https://app.resellr.id/api/market/2/product?filter_terlaris=true&limit=5');

        return response()->json(json_decode($response));
    }

    public function terbaru(Request $request)
    {

        $response = Http::get('https://app.resellr.id/api/market/2/product?random=1&limit=10');

        return response()->json(json_decode($response));
    }

    public function category($id)
    {
        // return redirect()->away('https://dmarket.id');

        switch ($id) {
            case 1 :
                $category = 'Fashion Apparel';
            break;
            case 2 :
                $category = 'Printed Matters';
            break;
            case 3 :
                $category = 'Lifestyle Products';
            break;
            case 4 :
                $category = 'Electronics';
            break;
            case 5 :
                $category = 'Others';
            break;
            case 6 :
                $category = 'Foods & Drinks';
            break;
            default :
                $category = 'Terlaris';
            break;
        }

        if($id == 7) {
            $dataDetail['url'] = 'https://app.resellr.id/api/market/2/product?filter_terlaris=true';
        } else {
            $dataDetail['url'] = 'https://app.resellr.id/api/market/2/product?category=' . $id;
        }

        $produks = $this->callAPI($dataDetail)['data'];
        // dd($produks);

        return view('landing.food', compact('produks', 'category'));


    }
}
