<div class="section-product" style="padding: 6% 18%">
    <div class="row gx-5">
        <div class="col-lg-7 col-xs-12">
            <div class="main-img">
                <img src="{{$product->image}}" alt="" class="img-fluid w-100 large-image" style="object-fit: cover">
            </div>
            <div class="row mt-4 product-images">
                @foreach($mediaProducts as $media)
                    <div class="col-3">
                        <img src="{{$media->url}}" alt="" class="img-fluid small-image"
                             style="height: 100%; object-fit: cover">
                    </div>
                @endforeach
                <div class="col-3">
                    <img src="{{$product->image}}" alt="" class="img-fluid small-image"
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
                    <div class=" montserrat-bold px-4" style=" font-size: 2.09vw">
                        {{$product->name}}</div>
                </div>
                <div class=" p-1 border-3 ms-3 mb-5" style="border-color: #25AAE2">
                    <div class=" montserrat-bold ps-4" style="color: #25AAE2; font-size: 2.09vw">
                        {{$product->price}}</div>
                </div>
                <div class=" p-1 border-3 ms-3 mb-5" style="border-color: #25AAE2">
                    <div class=" montserrat-bold px-4" style="font-size: 2.09vw">
                        MÔ TẢ
                    </div>
                </div>
                <div class=" p-1 border-3 ms-3 mb-5" style="border-color: #25AAE2">
                    <div class=" ps-4" style="font-size: 1rem; text-align: justify">
                        {!!$product->title !!}
                    </div>
                </div>
            </div>

            <div class="d-block d-md-none">
                <div class="p-1 border-3 ms-3 mt-5" style="border-color: #25AAE2">
                    <div class=" montserrat-bold px-4" style=" font-size: 20px">
                        {{$product->name}}</div>
                </div>
                <div class=" p-1 border-3 mb-5" style="border-color: #25AAE2">
                    <div class=" montserrat-bold  text-center" style="color: #25AAE2; font-size: 20px">
                        {{$product->price}}</div>
                </div>
                <div class=" p-1 border-3 text-center mb-5" style="border-color: #25AAE2">
                    <div class=" montserrat-bold px-4" style="font-size: 20px">
                        MÔ TẢ
                    </div>
                </div>
                <div class=" border-3 mb-5" style="border-color: #25AAE2">
                    <div class="" style="font-size: 1rem; text-align: justify">
                        {!!$product->title !!}
                    </div>
                </div>
            </div>


            <div class=" p-1 border-3 ms-3 mb-5" style="border-color: #25AAE2">
                <a href="tel:0931 189 996">
                    <img src="{{asset('images/product/order.png')}}" alt="" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
    <div class=" p-1 mb-5" style="border-color: #25AAE2">
        <div class=" montserrat-bold row" style="font-size: 29px; color: #25AAE2">
            <div class="col-lg-4 col-xs-12"> THÔNG TIN SẢN PHẨM</div>
            <div class="col-lg-8 col-xs-12">
                <div class="horizontal-line"></div>
            </div>
        </div>
    </div>
    <div class="border-3  mb-5" style="border-color: #25AAE2">
        <div class="" style="font-size: 1rem; text-align: justify">
            {!!$product->description !!}
        </div>
    </div>
    <div class=" p-1 border-3 ms-3 mb-5 d-flex align-content-center justify-content-center"
         style="border-color: #25AAE2">
        <a class="btn btn-outline-info p-1 border-3 ms-3" style="border-color: #25AAE2" href="/">
            <div class="btn text-white montserrat-bold px-4" style="background-color: #25AAE2; font-size: 15px">
                XEM CÁC SẢN PHẨM KHÁC
            </div>
        </a>
    </div>

</div>
<style>
    .product-images .small-image {
        cursor: pointer;
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
