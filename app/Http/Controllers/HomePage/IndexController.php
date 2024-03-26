<?php

namespace App\Http\Controllers\HomePage;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Cart;
use App\Models\Image;
use App\Models\Product;
use App\Models\Session;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use App\Models\Category;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        SEOMeta::setTitle(' SKYLIGHT');
        SEOMeta::setDescription('Skylight luôn tự hào là một trong những đơn vị đi đầu trong  lĩnh vực cung cấp giải pháp và thiết bị công nghệ Led chiếu sáng
        thân thiện với môi trường được nhiều đối tác đánh giá cao.' );

        OpenGraph::setDescription('Skylight luôn tự hào là một trong những đơn vị đi đầu trong  lĩnh vực cung cấp giải pháp và thiết bị công nghệ Led chiếu sáng
        thân thiện với môi trường được nhiều đối tác đánh giá cao.' );
        OpenGraph::setTitle('SKYLIGHT');
        OpenGraph::setUrl('https://skylight.net.vn/');
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage('https://skylight.net.vn/uploads/images/vidu2.png');

        TwitterCard::setTitle('THE MINATO RESIDENCE - Căn hộ cao cấp chuẩn 100% Nhật Đầu tiên tại Miền Bắc');
        TwitterCard::setSite('https://skylight.net.vn/uploads/images/vidu2.png');

        JsonLd::setTitle('SKYLIGHT');
        JsonLd::setDescription('Skylight luôn tự hào là một trong những đơn vị đi đầu trong  lĩnh vực cung cấp giải pháp và thiết bị công nghệ Led chiếu sáng
        thân thiện với môi trường được nhiều đối tác đánh giá cao.' );
        JsonLd::addImage('https://skylight.net.vn/uploads/images/vidu2.png');
        $categoryImgSlug = "anh-banner-trang-chu";
        $images = Image::whereHas('category', function ($query) use ($categoryImgSlug) {
            $query->where('slug', $categoryImgSlug);
        })->get();


        $courses = Product::where('category_id', 2)->limit(8)->get();
        $courses1 = Product::where('category_id', 3)->limit(8)->get();
        $courses2 = Product::where('category_id', 4)->limit(8)->get();
        $courses3 = Product::where('category_id', 5)->limit(8)->get();

        return view('pages/home-page/index', ['images' => $images, 'courses' => $courses, 'courses1' => $courses1, 'courses2' => $courses2, 'courses3' => $courses3]);
    }

    public function document()
    {
        return view('pages/document/index');
    }
}
