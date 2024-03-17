<div class="section-product mt-5" style="">
    <div class="row gx-5">
        <div class="col-lg-7 col-xs-12">
            <div class="main-img">
                <img src="{{$product->image}}" alt="" class="img-fluid w-100 large-image object-cover"
                     style="object-fit: cover">
            </div>
            <div class="row mt-4 product-images d-flex flex-wrap" style="overflow-x: auto;">
                @foreach($mediaProducts as $media)
                    <div class="col-3">
                        <img src="{{$media->url}}" alt="" class="img-fluid small-image object-cover"
                             style="height: 100%; object-fit: cover">
                    </div>
                @endforeach
                <div class="col-3">
                    <img src="{{$product->image}}" alt="" class="img-fluid small-image object-cover"
                         style="height: 100%; object-fit: cover">
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $(".product-images .small-image").click(function(){
                    var newSrc = $(this).attr('src');
                    $(".main-img .large-image").attr('src', newSrc);
                });
            });
        </script>
        <div class="col-lg-5 col-xs-12">
            <div class="d-none d-md-block">
                <div class="p-1 border-3 ms-3" style="border-color: #25AAE2">
                    <div class=" mobile-name montserrat-bold px-4" style=" font-size: 25px">
                        {{$product->name}}</div>
                </div>
                <div class=" p-1 border-3 ms-3 mb-5" style="border-color: #25AAE2">
                    <div class=" montserrat-bold ps-4" style="color: #25AAE2; font-size: 3.09vw">
                        {{ number_format($product->price, 0, ',', '.') }}</div></div>

                <div class=" p-1  ms-3" style="border-color: #25AAE2">
                    <div class=" montserrat-bold px-4" style="font-size: 25px">
                        MÔ TẢ
                    </div>
                </div>
                <div class=" p-1 border-3 ms-3" style="border-color: #25AAE2">
                    <div class=" ps-4" style="font-size: 1rem; text-align: justify; height: 35vh">
                        {!! Str::limit($product->title, $limit = 250, $end = '...') !!}
                    </div>
                </div>
                <div class=" p-1 border-3 mb-5 ms-5 " style="border-color: #25AAE2">
                    <a href="tel:0931 189 996">
                        <img src="{{asset('images/product/order.png')}}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="d-block d-md-none">
                <div class="p-1 border-3 mt-5" style="border-color: #25AAE2">
                    <div class=" montserrat-bold px-4 text-center" style=" font-size: 20px">
                        {{$product->name}}</div>
                </div>
                <div class=" p-1 border-3 mb-3" style="border-color: #25AAE2">
                    <div class=" montserrat-bold  text-center" style="color: #25AAE2; font-size: 29px">
                        {{ number_format($product->price, 0, ',', '.') }}</div>
                </div>
                <div class="  border-3 mb-3" style="border-color: #25AAE2">
                    <div class=" montserrat-bold " style="font-size: 20px">
                        MÔ TẢ
                    </div>
                </div>
                <div class=" border-3 mb-3" style="border-color: #25AAE2">
                    <div class="" style="font-size: 1rem; text-align: justify">
                        {!! Str::limit($product->title, $limit = 250, $end = '...') !!}
                    </div>
                </div>
                <div class="border-3 mb-5 " style="border-color: #25AAE2">
                    <a href="tel:0931 189 996">
                        <img src="{{asset('images/product/order.png')}}" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal-line-custom" style=" border-color: #25AAE2; ">
        <div class=" montserrat-bold row" style="font-size: 25px; color: #25AAE2">
            <div class="col-lg-4 col-xs-12 ">
                <p class="text-center-custom">THÔNG TIN SẢN PHẨM </p></div>
            <div class="col-lg-8 col-xs-12 ">
                <div class="d-none d-md-block horizontal-line me-5"></div>
            </div>
        </div>
    </div>
    <div class="p-1 border-3 ms-1 mt-5 d-none d-md-block" style="border-color: #25AAE2">
        <div class="" style="font-size: 1rem; text-align: justify;">
            {!!$product->description !!}
        </div>
    </div>
<div class="p-1 border-3 ms-1 d-block d-md-none" style="border-color: #25AAE2">
    <div class="" style="font-size: 1rem; text-align: justify">
        {!!$product->description !!}
    </div>
</div>
    <div class=" p-1 border-3 mb-5 pt-5 d-flex align-content-center justify-content-center"
         style="border-color: #25AAE2">
        <a class="btn btn-outline-info p-1 border-3" style="border-color: #25AAE2" href="/">
            <div class="btn text-white montserrat-bold px-4" style="background-color: #25AAE2; font-size: 15px">
                XEM CÁC SẢN PHẨM KHÁC
            </div>
        </a>
    </div>

</div>
<style>
    .section-product{
        padding: 0 18%
    }
    .horizontal-line-custom {
        margin-top: 2vh
    }
    .text-center-custom{
        text-align: center;
    }
    @media (max-width: 767px) {
        .section-product{
            padding: 4% 6%
        }
        .mobile-name{
            text-align: center;
        }
        .horizontal-line-custom{
            padding: 0;
        }
        .text-center-custom{
            text-align: unset;
        }
    }

    .product-images .small-image {
        cursor: pointer;
    }
    .small-image:hover{
        border: 1px solid black;
    }
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
    .table {
        width: 100%;
        border-collapse: collapse; /* Loại bỏ khoảng trắng giữa các ô */
    }

    .table th, .table td {
        border: 1px solid black; /* Thêm kẻ ô cho bảng */
        padding: 8px; /* Thêm padding để tạo khoảng trắng xung quanh nội dung của ô */
    }

    /* Thêm khả năng responsive cho bảng */
    .table-responsive {
        overflow-x: auto; /* Cho phép cuộn ngang khi nội dung quá rộng */
    }
</style>
<script>
    $(document).ready(function () {
        $('.image img').addClass('img-fluid');
        $('.image ').addClass('figure-image ');
        $('.table ').addClass('table table-bordered');
    });
</script>
