<?php

namespace App\Http\Controllers;

use App\Models\ImageProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ImageProductController extends Controller
{
    public function store(Request $request)
    {
        foreach ($request->file('files') as $image) {
            $mediaproduct = new ImageProduct();
            $mediaproduct->type = 1;

            if ($image) {
                $extension = $image->getClientOriginalExtension(); // Lấy phần mở rộng của tập tin

                // Tạo tên mới dựa trên ngày tháng và số duy nhất
                $imageName = date('YmdHis') . '_' . uniqid() . '.' . $extension;

                // Di chuyển và lưu ảnh vào thư mục public/uploads/images
                $image->move(public_path('uploads/images'), $imageName);

                // Cập nhật đường dẫn của ảnh trong mediaproduct
                $mediaproduct->url = '/uploads/images/' . $imageName;
            }

            $mediaproduct->save();
        }
    }
    public function update(Request $request)
    {
        $mediaProducts = ImageProduct::where('product_id', $request->id)->get();
        foreach ($mediaProducts as $mediaProduct) {
            $mediaProduct->delete();
        }

        foreach ($request->file('files') as $image) {
            $mediaproduct = new ImageProduct();
            $mediaproduct->product_id = $request->id;
            if ($image) {
                $extension = $image->getClientOriginalExtension(); // Lấy phần mở rộng của tập tin

                // Tạo tên mới dựa trên ngày tháng và số duy nhất
                $imageName = date('YmdHis') . '_' . uniqid() . '.' . $extension;

                // Di chuyển và lưu ảnh vào thư mục public/uploads/images
                $image->move(public_path('uploads/images'), $imageName);

                // Cập nhật đường dẫn của ảnh trong mediaproduct
                $mediaproduct->url = '/uploads/images/' . $imageName;
            }
            $mediaproduct->save();
        }
    }
    public function fix (){
        $maxProductId = Product::max('id');
        $product_id = (intval($maxProductId));
        ImageProduct::whereNull('product_id')->update(['product_id' => $product_id]);
        return redirect()->route('products.index')->with('success', 'Tạo sản phẩm thành công!');
    }
}
