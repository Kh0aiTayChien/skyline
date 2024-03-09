<div class="section-product" style="padding: 6% 8%">
<div class="row gx-5">
    <div class="col-7">
        <div class="main-img">
            <img src="{{$product->image}}" alt="" class="img-fluid w-100" style="object-fit: cover">
        </div>
        <div class="row mt-4">
{{--            <div class="col-3"><img src="{{$product->image}}" alt="" class="img-fluid"></div>--}}
{{--            <div class="col-3"><img src="{{$product->image}}" alt="" class="img-fluid"></div>--}}
{{--            <div class="col-3"><img src="{{$product->image}}" alt="" class="img-fluid"></div>--}}
{{--            <div class="col-3"><img src="{{$product->image}}" alt="" class="img-fluid"></div>--}}
            @foreach($mediaProducts as $media)
                <div class="col-3"><img src="{{$media->url}}" alt="" class="img-fluid" style="height: 100%; object-fit: cover"></div>
            @endforeach
        </div>
    </div>
    <div class="col-5">
        <div class="p-1 border-3 ms-3" style="border-color: #25AAE2">
            <div class=" montserrat-bold px-4" style=" font-size: 2.09vw">
                {{$product->name}}</div>
        </div>
        <div class=" p-1 border-3 ms-3 mb-5" style="border-color: #25AAE2">
            <div class=" montserrat-bold ps-4" style="color: #25AAE2; font-size: 2.09vw">
                {{$product->price}}</div>
        </div>
        <div class=" p-1 border-3 ms-3 mb-5" style="border-color: #25AAE2">
            <div class=" montserrat-bold px-4" style="font-size: 2.09vw">
                MÔ TẢ</div>
        </div>
        <div class=" p-1 border-3 ms-3 mb-5" style="border-color: #25AAE2">
            <div class=" ps-4" style="font-size: 1rem; text-align: justify">
               {!!$product->title !!}
            </div>
        </div>
    </div>
</div>
    <div class=" p-1 mb-5 mt-5" style="border-color: #25AAE2">
        <div class=" montserrat-bold row" style="font-size: 2.09vw; color: #25AAE2">
            <div class="col-4"> THÔNG TIN SẢN PHẨM</div>
            <div class="col-8">
                <div class="horizontal-line"></div>
            </div>
        </div>
    </div>
    <div class=" p-1 border-3 ms-3 mb-5" style="border-color: #25AAE2">
        <div class="  ps-4" style="font-size: 1rem; text-align: justify">
            {!!$product->description !!}
        </div>
    </div>
    <div class=" p-1 border-3 ms-3 mb-5 d-flex align-content-center justify-content-center" style="border-color: #25AAE2">
        <a class="btn btn-outline-info p-1 border-3 ms-3" style="border-color: #25AAE2" href="/">
            <div class="btn text-white montserrat-bold px-4" style="background-color: #25AAE2; font-size: 15px">
                XEM CÁC SẢN PHẨM KHÁC</div>
        </a>
    </div>

</div>
<style>
    .horizontal-line {
        position: relative;
        margin: 20px auto; /* Khoảng cách trên và dưới */
        height: 4px; /* Độ dày của đường */
        background-color: #25AAE2; /* Màu sắc của đường */
    }
    .horizontal-line::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        height: 2px; /* Độ dày của đường */
        background-color: #25AAE2; /* Màu sắc của đường */
        transform: translateY(-50%);
    }
</style>
