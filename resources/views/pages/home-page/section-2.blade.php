<div class="section-2 " style="">
    <div class="courses">
        <div class="d-md-flex align-content-center justify-content-center img-course pt-4 montserrat-bold d-none d-md-block"
             style="font-size: 1.5vw; color: #25AAE2">
                Về chúng tôi
        </div>
        <div class="d-flex align-content-center justify-content-center img-course pt-4 montserrat-bold d-md-none"
             style="font-size: 32px; color: #25AAE2">
            Về chúng tôi
        </div>
        <div class="d-none d-md-flex align-content-center justify-content-center img-course cabin-medium px-5 mt-3 mb-4"
             style="font-size: 1rem; text-align: justify">
                Skylight luôn tự hào là một trong những đơn vị đi đầu trong lĩnh vực cung cấp giải pháp và thiết bị công nghệ Led chiếu sáng thân thiện với môi trường được nhiều đối tác đánh giá cao.
                 Các sản phẩm và dịch vụ của Skyline được ứng dụng rộng rãi từ các công trình lớn như các khu công nghiệp, khu đô thị, các trung tâm thương mại, khu vui chơi giải trí, siêu thị, quảng trường, bến bãi, nhà xưởng, showroom cho đến các công trình dân sinh như nhà ở, trường học, bệnh viện,… trên khắp cả nước. Do đó, khi có nhu cầu về chiếu sáng công nghệ LED, Quý khách hàng hãy liên hệ với chúng tôi để được tư vấn tận tình, được cung cấp những sản phẩm đèn LED hàng đầu, cũng như được sử dụng các dịch vụ hỗ trợ, kỹ thuật và công nghệ tốt nhất.
        </div>
        <div class="d-flex d-md-none align-content-center justify-content-center img-course cabin-medium px-3"
             style="font-size: 1rem; text-align: justify">
            Skylight luôn tự hào là một trong những đơn vị đi đầu trong lĩnh vực cung cấp giải pháp và thiết bị công nghệ Led chiếu sáng thân thiện với môi trường được nhiều đối tác đánh giá cao.
             Các sản phẩm và dịch vụ của Skyline được ứng dụng rộng rãi từ các công trình lớn như các khu công nghiệp, khu đô thị, các trung tâm thương mại, khu vui chơi giải trí, siêu thị, quảng trường, bến bãi, nhà xưởng, showroom cho đến các công trình dân sinh như nhà ở, trường học, bệnh viện,… trên khắp cả nước. Do đó, khi có nhu cầu về chiếu sáng công nghệ LED, Quý khách hàng hãy liên hệ với chúng tôi để được tư vấn tận tình, được cung cấp những sản phẩm đèn LED hàng đầu, cũng như được sử dụng các dịch vụ hỗ trợ, kỹ thuật và công nghệ tốt nhất.
        </div>
        <div class="slick-carousel position-relative mt-2">
            <div class="d-flex align-content-center justify-content-center img-course montserrat-bold "
                 style="font-size: 29px; color: #25AAE2">
                Sản phẩm
            </div>
            <button class="custom-prev-arrow-course " aria-label="Previous">
                <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class=" button-shake"/>
            </button>
            <button class="custom-next-arrow-course " aria-label="Next">
                <img src="{{asset('images/arrow/right.png')}}" alt="Next" class=" button-shake"/>
            </button>
            <div class="row gx-0 img-course montserrat-bold mt-4 "
                 style="font-size: 25px; color: #25AAE2; padding: 0 4%" >
                <div class="col-lg-4 col-md-12">Đèn Downlight</div>
                <div class="col-lg-8 col-md-12">
                    <div class="horizontal-line d-none d-md-block"></div>
                </div>
            </div>
            <div class="carousel-courses">
                @foreach($courses as $course)
                    <div class="d-flex justify-content-center">
                        <div class="card rounded-custom shadow-effect"
                             style="width:20rem; height: 70% ">
                            <img class="card-img-top img-fluid object-cover " src="{{$course->image}}"
                                 alt="Card image" style="height: 10rem">
                            <div class="card-body" style="background-color: #25AAE2">
                                <p class="card-text text-start mulish-black text-white" style="height: 3rem">
                                    <strong>{{\Illuminate\Support\Str::limit($course->name,30)}}</strong></p>
                                <p class="card-text text-start mulish-black text-white" style="font-size: 23px">
                                    <strong> {{ number_format($course->price, 0, ',', '.') }}</strong></p>
                                <div class="d-flex align-content-center justify-content-start ">
                                    <a target="_blank" href="{{route('homepage.product.show',['slug' => $course->slug])}}"
                                       class=" btn-sm mb-3  btn-long button-shake montserrat" style="color: #E9D5A2; text-decoration: none;">XEM
                                        CHI TIẾT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('.carousel-courses').slick({
                    infinite: true,
                    speed: 900,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    dots: true,
                    prevArrow: $('.custom-prev-arrow-course'),
                    nextArrow: $('.custom-next-arrow-course'),
                    responsive: [
                        {
                            breakpoint: 1324,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                            }
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                variableWidth: false,
                            }
                        }
                    ]
                });
            });
        </script>

        <div class="slick-carousel position-relative">
            <button class="custom-prev-arrow-1 " aria-label="Previous">
                <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class=" button-shake"/>
            </button>
            <button class="custom-next-arrow-1 " aria-label="Next">
                <img src="{{asset('images/arrow/right.png')}}" alt="Next" class=" button-shake"/>
            </button>
            <div class="row gx-0 img-course montserrat-bold "
                 style="font-size: 25px; color: #25AAE2; padding: 0 4%" >
                <div class="col-lg-3 col-md-12">Đèn Spotlight</div>
                <div class="col-lg-9 col-md-12">
                    <div class="horizontal-line d-none d-md-block"></div>
                </div>
            </div>
            <div class="carousel-courses-1">
                @foreach($courses1 as $course)
                    <div class="d-flex justify-content-center">
                        <div class="card rounded-custom shadow-effect"
                             style="width:20rem; height: 70% ">
                            <img class="card-img-top img-fluid object-cover " src="{{$course->image}}"
                                 alt="Card image" style="height: 10rem">
                            <div class="card-body" style="background-color: #25AAE2">
                                <p class="card-text text-start mulish-black text-white" style="height: 3rem">
                                    <strong>{{\Illuminate\Support\Str::limit($course->name,30)}}</strong></p>
                                <p class="card-text text-start mulish-black text-white" style="font-size: 23px">
                                    <strong> {{ number_format($course->price, 0, ',', '.') }}</strong></p>
                                <div class="d-flex align-content-center justify-content-start ">
                                    <a target="_blank" href="{{route('homepage.product.show',['slug' => $course->slug])}}"
                                       class=" btn-sm mb-3  btn-long button-shake montserrat" style="color: #E9D5A2; text-decoration: none;">XEM
                                        CHI TIẾT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('.carousel-courses-1').slick({
                    infinite: true,
                    speed: 900,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    prevArrow: $('.custom-prev-arrow-1'),
                    nextArrow: $('.custom-next-arrow-1'),
                    responsive: [
                        {
                            breakpoint: 1324,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                            }
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                variableWidth: false,
                            }
                        }
                    ]
                });
            });
        </script>

        <div class="slick-carousel position-relative ">
            <button class="custom-prev-arrow-2 " aria-label="Previous">
                <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class=" button-shake"/>
            </button>
            <button class="custom-next-arrow-2 " aria-label="Next">
                <img src="{{asset('images/arrow/right.png')}}" alt="Next" class=" button-shake"/>
            </button>
            <div class="row gx-0 img-course pt-4 montserrat-bold "
                 style="font-size: 25px; color: #25AAE2; padding: 0 4%" >
                <div class="col-lg-5 col-md-12">Đèn Ray Nam Châm</div>
                <div class="col-lg-7 col-md-12">
                    <div class="horizontal-line d-none d-md-block"></div>
                </div>
            </div>
            <div class="carousel-courses-2">
                @foreach($courses2 as $course)
                    <div class="d-flex justify-content-center">
                        <div class="card rounded-custom shadow-effect"
                             style="width:20rem; height: 70% ">
                            <img class="card-img-top img-fluid object-cover " src="{{$course->image}}"
                                 alt="Card image" style="height: 10rem">
                            <div class="card-body" style="background-color: #25AAE2">
                                <p class="card-text text-start mulish-black text-white" style="height: 3rem">
                                    <strong>{{\Illuminate\Support\Str::limit($course->name,30)}}</strong></p>
                                <p class="card-text text-start mulish-black text-white" style="font-size: 23px">
                                    <strong> {{ number_format($course->price, 0, ',', '.') }}</strong></p>
                                <div class="d-flex align-content-center justify-content-start ">
                                    <a target="_blank" href="{{route('homepage.product.show',['slug' => $course->slug])}}"
                                       class=" btn-sm mb-3  btn-long button-shake montserrat" style="color: #E9D5A2; text-decoration: none;">XEM
                                        CHI TIẾT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('.carousel-courses-2').slick({
                    infinite: true,
                    speed: 900,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    dots: true,
                    prevArrow: $('.custom-prev-arrow-2'),
                    nextArrow: $('.custom-next-arrow-2'),
                    responsive: [
                        {
                            breakpoint: 1324,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                            }
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                variableWidth: false,
                            }
                        }
                    ]
                });
            });
        </script>

        <div class="slick-carousel position-relative ">
            <button class="custom-prev-arrow-3 " aria-label="Previous">
                <img src="{{asset('images/arrow/left.png')}}" alt="Previous" class=" button-shake"/>
            </button>
            <button class="custom-next-arrow-3 " aria-label="Next">
                <img src="{{asset('images/arrow/right.png')}}" alt="Next" class=" button-shake"/>
            </button>
            <div class="row gx-0 img-course pt-4 montserrat-bold "
                 style="font-size: 25px; color: #25AAE2; padding: 0 4%" >
                <div class="col-lg-4 col-md-12">Công tắc ổ cắm</div>
                <div class="col-lg-8 col-md-12">
                    <div class="horizontal-line d-none d-md-block"></div>
                </div>
            </div>
            <div class="carousel-courses-3">
                @foreach($courses3 as $course)
                    <div class="d-flex justify-content-center">
                        <div class="card rounded-custom shadow-effect"
                             style="width:20rem; height: 70% ">
                            <img class="card-img-top img-fluid object-cover " src="{{$course->image}}"
                                 alt="Card image" style="height: 10rem">
                            <div class="card-body" style="background-color: #25AAE2">
                                <p class="card-text text-start mulish-black text-white" style="height: 3rem">
                                    <strong>{{\Illuminate\Support\Str::limit($course->name,30)}}</strong></p>
                                <p class="card-text text-start mulish-black text-white" style="font-size: 23px">
                                    <strong> {{ number_format($course->price, 0, ',', '.') }}</strong></p>
                                <div class="d-flex align-content-center justify-content-start ">
                                    <a target="_blank" href="{{route('homepage.product.show',['slug' => $course->slug])}}"
                                       class=" btn-sm mb-3  btn-long button-shake montserrat" style="color: #E9D5A2; text-decoration: none;">XEM
                                        CHI TIẾT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $('.carousel-courses-3').slick({
                    infinite: true,
                    speed: 900,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    dots: true,
                    prevArrow: $('.custom-prev-arrow-3'),
                    nextArrow: $('.custom-next-arrow-3'),
                    responsive: [
                        {
                            breakpoint: 1324,
                            settings: {
                                slidesToShow: 3,
                                slidesToScroll: 3,
                            }
                        },
                        {
                            breakpoint: 800,
                            settings: {
                                slidesToShow: 2,
                                slidesToScroll: 2
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                variableWidth: false,
                            }
                        }
                    ]
                });
            });
        </script>
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
