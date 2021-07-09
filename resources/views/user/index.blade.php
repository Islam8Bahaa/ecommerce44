@extends('layouts.user')
@section('title')
    Welcome
@endsection
@section('content')

<main>
        <section>
            <div class="collection">
                <div class="container">
                    <div class="trend">
                        <div class="woman">
                            <img src="{{URL::asset('userpanel/img/fashion-pretty-cool-young-girl-shopping-bags-wearing-black-hat-white-pants-over-colorful-orange-background-79063329.jpg')}}"
                                alt="">
                            <div class="text">
                                <h3 class="main-color"> Hot Collection</h3>
                                <h1> New Trend For Women</h1>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil rem tempore magni
                                    harum
                                    repellendus nulla. Molestiae adipisci unde sapiente incidunt? Corporis error sequi
                                    temporibus a molestiae maiores distinctio quod impedit?</p>
                                <button>Shop Now</button>
                            </div>
                        </div>
                        <div class="men">
                            <div class="box">
                                <img src="{{URL::asset('userpanel/img/pexels-photo-842811.jpeg')}}" alt="">
                            </div>
                            <div class="box">
                                <img src="{{URL::asset('userpanel/img/82782504fb584f1112f99ddf55107945.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Collection-->
        <!-- Start feature -->
        <section>
            <div class="feature">
                <div class="container">
                    <div class="item">
                        <div class="line"></div>
                        <h2> Featuerd Items </h2>
                        <div class="line"></div>
                    </div>
                    <div class="All">
                        <ul>
                            <li><a href="">All</a></li>
                            <li><a href="">Men</a></li>
                            <li><a href="">Women</a></li>
                            <li><a href="">Kids</a></li>
                        </ul>
                    </div>
                    <!-------------------------------------------Start Swiper-------------------------------------------->
                    <div class="swiper-container mySwiper">
                        <div class="swiper-wrapper">
                            <!------------------------- Slide One-------------------->
                            <div class="swiper-slide">
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{URL::asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!---------------------Slide Two--------------------->
                            <div class="swiper-slide">
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!---------------------Slide Three--------------------->
                            <div class="swiper-slide">
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!---------------------Slide Four--------------------->
                            <div class="swiper-slide">
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-container mySwiper">
                            <div class="swiper-wrapper">
                                <!---------------------Slide One--------------------->
                                <div class="swiper-slide">
                                    @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                                <!---------------------Slide Two--------------------->
                                <div class="swiper-slide">
                                    @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                                <!---------------------Slide Three--------------------->
                                <div class="swiper-slide">
                                    @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                                <!---------------------Slide Four--------------------->
                                <div class="swiper-slide">
                                    @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-------------------------------------------End Swiper-------------------------------------------->
                </div>
            </div>
        </section>
        <!-- End feature -->
        <!--Start image-->
        <section>
            <div class="image">
                <div class="container">
                    <div class="photo">
                        <div class="box">
                            <img src="{{URL::asset('userpanel/img/photo-1426523038054-a260f3ef5bc9.jpg')}}" alt="">
                            <div class="discount">
                                <h1>70% OFF</h1>
                            </div>
                            <div class="text">
                                <p>Tao Kinben Na?</p>
                            </div>
                        </div>
                        <div class="box">
                            <img src="{{URL::asset('userpanel/img/photo-1590399830582-0bd885dee8e2.jpg')}}" alt="">
                            <div class="na">
                                <span>AMR CHEHARA KHARAP NA</span>
                            </div>
                            <div class="dia">
                                <span><span class="main-color">Chehara</span> Dia Ki hoy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End image-->
        <!--Start Top-->
        <section>
            <div class="top">
                <div class="container">
                    <div class="trend">
                        <div class="line"></div>
                        <h2> Trending Items </h2>
                        <div class="line"></div>
                    </div>
                    <div class="first">
                        @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                    </div>
                    <div class="second">
                        @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @foreach ($products as $product)
                                <div class="box">
                                    <img src="{{asset('uploads/products/' . $product->pimg)}}" alt="">
                                    <div class="price">
                                        <span> {{$product->pprice}} L.E</span>
                                    </div>
                                    <div class="text">
                                        <h2>{{$product->pname}}</h2>
                                        <div class="star">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="sm-icons">
                                            <div><i class="fas fa-heart"></i></div>
                                            <div><a href="{{route('cart.add' , $product->id)}}"><i class="fas fa-shopping-cart"></i></a></div>
                                            <div><i class="fas fa-share"></i></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                    </div>
                    <div class="button">
                        <button>LOAD MORE</button>
                    </div>
                </div>
            </div>
        </section>
        <!--End Top-->
        <!-- Start Shoes-->
        <section>
            <div class="shoes">
                <div class="container">
                    <div class="items">
                        <div class="quote main-color">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div class="text">
                            <p>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vitae aliquam voluptatum unde
                                atque! Officia, perspiciatis labore alias voluptates, assumenda magnam est reiciendis
                                quis,
                                dolorem voluptatem minus voluptate eveniet eius praesentium?"</p>
                        </div>
                        <div class="pic">
                            <img src="{{URL::asset('userpanel/img/photo-1509967419530-da38b4704bc6.jpg')}}" alt="">
                            <h5>MD SHAHIN ALAM</h5>
                            <p>CEO OF TTCM</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Shoes-->
        <!--Start Blog-->
        <section>
            <div class="latest">
                <div class="container">
                    <div class="text">
                        <div class="line"></div>
                        <h2> Latest Blog </h2>
                        <div class="line"></div>
                    </div>
                    <div class="blog">
                        <div class="box">
                            <img src="{{URL::asset('userpanel/img/photo-1499887142886-791eca5918cd.jpg')}}" alt="">
                            <div class="text-1">
                                <h2>Some Headline Here</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit dignissimos harum odio
                                    error ex
                                    provident.</p>
                                <button>READ MORE</button>
                            </div>
                        </div>
                        <div class="box">
                            <img src="{{URL::asset('userpanel/img/photo-1499887142886-791eca5918cd.jpg')}}" alt="">
                            <div class="text-1">
                                <h2>Some Headline Here</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit dignissimos harum odio
                                    error ex
                                    provident.</p>
                                <button>READ MORE</button>
                            </div>
                        </div>
                        <div class="box">
                            <img src="{{URL::asset('userpanel/img/photo-1499887142886-791eca5918cd.jpg')}}" alt="">
                            <div class="text-1">
                                <h2>Some Headline Here</h2>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit dignissimos harum odio
                                    error ex
                                    provident.</p>
                                <button>READ MORE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog-->
        <!--Start Theme-->
        <section>
            <div class="theme">
                <div class="container">
                    <div class="text">
                        <div class="line"></div>
                        <h2> Shop By Brand </h2>
                        <div class="line"></div>
                    </div>
                    <div class="icon">
                        <div class="box">
                            <img src="{{URL::asset('userpanel/img/themeforest-logo-768x363.png')}}" alt="">
                        </div>
                        <div class="box">
                            <img src="{{URL::asset('userpanel/img/themeforest-logo-768x363.png')}}" alt="">
                        </div>
                        <div class="box">
                            <img src="{{URL::asset('userpanel/img/themeforest-logo-768x363.png')}}" alt="">
                        </div>
                        <div class="box">
                            <img src="{{URL::asset('userpanel/img/themeforest-logo-768x363.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--  End Theme-->
        <section>
            <div class="about">
                <div class="container">
                    <div class="footer">
                        <div class="box">
                            <h4>SHOPS</h4>
                            <p>New in</p>
                            <p>Women</p>
                            <p>Men</p>
                            <p>Schuhe Shoes</p>
                            <p> Bag & Accessories</p>
                            <p>Top Brands</p>
                            <p>Sale & Special Offers</p>
                            <p>Look Book</p>
                        </div>
                        <div class="box">
                            <h4>INFORMATION</h4>
                            <p>New in</p>
                            <p>Women</p>
                            <p>Men</p>
                            <p>Schuhe Shoes</p>
                            <p> Bag & Accessories</p>
                            <p>Top Brands</p>
                            <p>Sale & Special Offers</p>
                            <p>Look Book</p>
                        </div>
                        <div class="box">
                            <h4>CUSTOMER SERVICE</h4>
                            <p>New in</p>
                            <p>Women</p>
                            <p>Men</p>
                            <p>Schuhe Shoes</p>
                            <p> Bag & Accessories</p>
                            <p>Top Brands</p>
                            <p>Sale & Special Offers</p>
                            <p>Look Book</p>
                        </div>
                        <div class="box">
                            <h4>NEWSLETTER</h4>
                            <p>Sign Up For News Letter</p>
                            <div class="input">
                                <input type="email" placeholder="Type Your Email">
                            </div>
                            <button>SUBSCRIBE</button>
                            <div class="sm-icons">
                                <div><i class="fab fa-facebook"></i></div>
                                <div><i class="fab fa-twitter"></i></div>
                                <div><i class="fab fa-youtube"></i></div>
                                <div><i class="fab fa-google"></i></div>
                                <div><i class="fab fa-vimeo-v"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Main-->
</main>

    @endsection
