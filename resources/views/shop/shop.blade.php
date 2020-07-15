@extends('shop.layout.shopLayout')
@section('shop-content')

    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pages-title-text text-center">
                        <h2>Shop</h2>
                        <ul class="text-left">
                            <li><a href="{{ route('home.index') }}">Home </a></li>
                            <li><span> // </span>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pages-title-end -->
    {{--    @include('shop.layout.information-layout')--}}
    <!-- shop content section start -->
    <!-- product-grid-view content section start -->
    <section class="pages products-page section-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="sidebar left-sidebar">
                        <div class="s-side-text">
                            <div class="sidebar-title clearfix">
                                <h4 class="floatleft">Categories</h4>
                                <h5 class="floatright"><a href="#">All</a></h5>
                            </div>
                            <div class="categories left-right-p">
                                <ul id="accordion" class="panel-group clearfix">
                                    @foreach($pets as $pet)
                                        <li class="panel">
                                            <div data-toggle="collapse" data-parent="#accordion"
                                                 data-target="#collapse1">
                                                <div class="medium-a">
                                                    {{ $pet->name }}
                                                </div>
                                            </div>
                                            <div class="panel-collapse collapse in" id="collapse1">
                                                <div class="normal-a">
                                                    @foreach($pet->categories as $category)
                                                        <a href="#">{{ $category->name }}</a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="s-side-text">
                            <div class="sidebar-title">
                                <h4>price</h4>
                            </div>
                            <div class="range-slider clearfix">
                                <form action="#" method="get">
                                    <label><span>You range</span> <input type="text" id="amount" readonly/></label>
                                    <div id="slider-range"></div>
                                </form>
                            </div>
                        </div>
                        <div class="s-side-text">
                            <div class="sidebar-title clearfix">
                                <h4 class="floatleft">size</h4>
                                <h5 class="floatright"><a href="#">All</a></h5>
                            </div>
                            <div class="size-select clearfix">
                                <a href="#">m</a>
                                <a href="#">s</a>
                                <a href="#">l</a>
                                <a href="#">sl</a>
                                <a href="#">xl</a>
                            </div>
                        </div>
                        <div class="s-side-text">
                            <div class="sidebar-title clearfix">
                                <h4 class="floatleft">fur color</h4>
                                <h5 class="floatright"><a href="#">All</a></h5>
                            </div>
                            <div class="color-select clearfix">
                                <span></span>
                                <span></span>
                                <span class="outline"></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="s-side-text">
                            <div class="banner clearfix">
                                <a href="#"><img src="{{ asset('img/1920x800/CROP-500-BENNY-MEAN-250x400.jpg') }}"
                                                 alt=""/></a>
                                <div class="banner-text">
                                    <h2>best</h2> <br/>
                                    <h2 class="banner-brand">brand</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-9">
                    <div class="right-products">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="section-title clearfix">
                                    <ul>
                                        <li>
                                            <ul class="nav-view">
                                                <li class="active"><a data-toggle="tab" href="#grid"> <i
                                                            class="mdi mdi-view-module"></i> </a></li>
                                                <li><a data-toggle="tab" href="#list"> <i class="mdi mdi-view-list"></i>
                                                    </a></li>
                                            </ul>
                                        </li>
                                        <li class="sort-by floatright">
                                            Showing 1-9 of 89 Results
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="tab-content grid-content">
                                <div class="tab-pane fade in active text-center" id="grid">
                                    @foreach($products as $product)
                                        <div class="col-xs-12 col-sm-6 col-md-4">
                                            <div class="single-product">
                                                <div class="product-img">
                                                    <div class="pro-type">
                                                        <span>{{$product->sale}}</span>
                                                    </div>
                                                    <a href="{{ route('shop.detail',$product->id) }}"><img
                                                            src="{{ asset('storage/' . $product->image) }}"
                                                            alt="Product Title" height="370" width="255"/></a>
                                                    <div class="actions-btn">
                                                        @if($product->status == 1)
                                                            <a href="{{route('shop.addToCart',['productId'=>$product->id])}}"><i
                                                                    class="mdi mdi-cart"></i></a>
                                                        @endif
                                                        <a href="#" data-toggle="modal" data-target="#quick-view{{$product->id}}"><i
                                                                class="mdi mdi-eye"></i></a>
                                                        <a href="#"><i class="mdi mdi-heart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-dsc">
                                                    <p><a href="#"></a>{{ $product->product_code }}</p>
                                                    <div class="ratting">
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star"></i>
                                                        <i class="mdi mdi-star-half"></i>
                                                        <i class="mdi mdi-star-outline"></i>
                                                    </div>
                                                    <span>${{ $product->price }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        @include('shop.layout.information-shop')
                                     @endforeach
                                <!-- single product end -->
                                </div>

                                <div class="tab-pane fade in" id="list">
                                    @foreach($products as $product)
                                        <div class="col-xs-12">
                                            <div class="single-list-view">
                                                <div class="row">

                                                    <div class="col-xs-12 col-md-4">
                                                        <div class="list-img">
                                                            <div class="product-img">
                                                                <div class="pro-type sell">
                                                                    <span>{{ $product->sale }}</span>
                                                                </div>
                                                                <a href="{{ route('shop.detail',$product->id) }}"><img
                                                                        src="{{ asset('storage/' . $product->image) }}"
                                                                        alt="Product Title" height="370"
                                                                        width="255"/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-12 col-md-8">
                                                        <div class="list-text">
                                                            <h3>{{ $product->product_code }}</h3>
                                                            <span>{{ $product->category->name }}</span>
                                                            <div class="ratting floatright">
                                                                <p>( 27 Rating )</p>
                                                                <i class="mdi mdi-star"></i>
                                                                <i class="mdi mdi-star"></i>
                                                                <i class="mdi mdi-star"></i>
                                                                <i class="mdi mdi-star-half"></i>
                                                                <i class="mdi mdi-star-outline"></i>
                                                            </div>
                                                            <h5>
                                                                <del>$79.30</del>
                                                                ${{ $product->price }}</h5>
                                                            <p>{{ $product->characteristics }}</p>
                                                            <div class="list-btn">
                                                                @if($product->status == 1)
                                                                <a href="{{route('shop.addToCart',['productId'=>$product->id])}}">add
                                                                    to cart</a>
                                                                <a href="{{ route('shop.showCart') }}">wishlist</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <!-- single product end -->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="pagnation-ul">
                                    {{ $products->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-grid-view content section end -->

    <!-- shop content section end -->
@endsection
