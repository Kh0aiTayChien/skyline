<div class="section-1 d-flex justify-content-center align-items-center position-relative">
    <div class="d-flex align-content-center justify-content-center position-absolute"style="z-index: 998; bottom: 26vh">
        <div class="btn text-white montserrat-extrabold d-none d-md-block" style="font-size: 29px; text-align: justify">
            <p> Skyline luôn tự hào là một trong những đơn vị đi đầu trong</p>
            <p> lĩnh vực cung cấp giải pháp và thiết bị công nghệ Led chiếu sáng</p>
            <p>thân thiện với môi trường được nhiều đối tác đánh giá cao.</p>
        </div>
        <div class="btn text-white montserrat-extrabold d-block d-md-none px-5" style="font-size: 15px; text-align: justify">
            <p> Skyline luôn tự hào là một trong những đơn vị đi đầu trong</p>
            <p> lĩnh vực cung cấp giải pháp và thiết bị công nghệ Led chiếu sáng</p>
            <p>thân thiện với môi trường được nhiều đối tác đánh giá cao.</p>
        </div>
    </div>
    <div class="d-flex align-content-center justify-content-center position-absolute"style="z-index: 998; bottom: 12vh">
        <div class="btn btn-outline-info p-1 border-3 ms-3" style="border-color: #25AAE2">
            <div class="btn text-white montserrat-extrabold px-4" style="background-color: #25AAE2; font-size: 15px">
                NHẬN THÔNG TIN TƯ VẤN</div>
        </div>
    </div>
    <div id="section-1-carousel" class="carousel slide w-100" data-bs-ride="carousel">
        <div class="carousel-indicators">
{{--            @foreach($images as $key => $image)--}}
{{--                <button type="button" data-bs-target="#section-1-carousel"--}}
{{--                        data-bs-slide-to="{{$key}}" class="{{$key == 0 ? 'active' : ''}}"--}}
{{--                        aria-label="Slide {{$key + 1}}"></button>--}}
{{--            @endforeach--}}
        </div>
        <div class="carousel-inner">
            @foreach($images as $key => $image)
                <div class="carousel-item {{$key == 0 ? 'active' : ''}}">
                    <img src="{{$image->image_url}}" class="img-slide" alt="img-slide">
                </div>
            @endforeach
        </div>
{{--        <button class="carousel-control-prev" type="button" data-bs-target="#section-1-carousel" data-bs-slide="prev">--}}
{{--            <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class=" button-shake img-carousel-arrow"/>--}}
{{--            <span class="visually-hidden">Previous</span>--}}
{{--        </button>--}}
{{--        <button class="carousel-control-next" type="button" data-bs-target="#section-1-carousel" data-bs-slide="next">--}}
{{--            <img src="{{asset('images/arrow/right.png')}}" alt="Previous" class=" button-shake img-carousel-arrow"/>--}}
{{--            <span class="visually-hidden">Next</span>--}}
{{--        </button>--}}
    </div>
</div>
