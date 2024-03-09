<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Cart;
use App\Models\Image;
use App\Models\Product;
use App\Models\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use App\Models\Category;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $categoryImgSlug = "anh-banner-trang-chu";
        $images = Image::whereHas('category', function ($query) use ($categoryImgSlug) {
            $query->where('slug', $categoryImgSlug);
        })->get();


        $courses = Product::where('category_id', 2)->get();
        $courses1 = Product::where('category_id', 3)->get();
        $courses2 = Product::where('category_id', 4)->get();
        $courses3 = Product::where('category_id', 5)->get();

        return view('pages/home-page/index', ['images' => $images, 'courses' => $courses, 'courses1' => $courses1, 'courses2' => $courses2, 'courses3' => $courses3]);
    }
}
