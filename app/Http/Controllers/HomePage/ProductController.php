<?php

namespace App\Http\Controllers\HomePage;

use App\Models\Cart;
use App\Models\ImageProduct;
use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    public function index(Request $request)
    {
//        $products = Product::all();
//        $sessionCookie = config('session.cookie');
//        if ($request->Cookie($sessionCookie) == null) {
//            $sessionId = Str::uuid()->toString();
//            $cookie = Cookie::make($sessionCookie, $sessionId, 1440);
//            return response()
//                ->view('pages/san-pham/index', ['products' => $products])
//                ->withCookie($cookie);
//        } else {
//            $sessionId = $request->Cookie($sessionCookie);
//            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
//                $query->where('session_code', $sessionId);
//            })->get();
//
//            return view('pages/san-pham/index', ['products' => $products, 'carts' => $carts]);
//        }
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        $mediaProducts = ImageProduct::where('product_id', $product->id)->take(3)->get();

        return response()->view('pages/chi-tiet-san-pham/index',
            ['product' => $product, 'mediaProducts' => $mediaProducts]);
    }
}
