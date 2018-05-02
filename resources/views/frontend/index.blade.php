@extends('frontend.master')

@section('content')
    <div class="col-sm-8 col-sm-offset-2">
        @if(Session::has('success-msg'))
            <p class="alert alert-success">{{ Session::get('success-msg') }}</p>
        @endif
        @if(Session::has('paid-msg'))
            <p class="alert alert-success">{{ Session::get('paid-msg') }}</p>
        @endif
    </div>

    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#slider-carousel" data-slide-to="1"></li>
                            <li data-target="#slider-carousel" data-slide-to="2"></li>
                        </ol>

                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-sm-6">
                                    <h1><span>NYALLAY'S</span> Online Grocery Food Shopping </h1>
                                    <h2> Shop Online</h2>
                                    <p> Online grocery shopping can save you time, stress, gas money, and expose you to new types of foods and brands you can’t get at your local grocery store.. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    {{--<img src="/assets_frontend/images/home/girl1.jpg" class="girl img-responsive" alt="" />--}}
                                    {{--<img src="/assets_frontend/images/home/pricing.png"  class="pricing" alt="" />--}}
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>NYALLAY'S</span> Online Grocery Food Shopping</h1>
                                    <h2>Open 24/7</h2>
                                    <p> Nyallay’s Online Grocery Food Shopping offers a pretty good variety of items and prices are reasonable. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    {{--<img src="/assets_frontend/images/home/girl2.jpg" class="girl img-responsive" alt="" />--}}
                                    {{--<img src="/assets_frontend/images/home/pricing.png"  class="pricing" alt="" />--}}
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-sm-6">
                                    <h1><span>NYALLAY'S</span> Online Grocery Food Shopping</h1>
                                    <h2>Free Shipping on Staten Island </h2>
                                    <p> Online grocery shopping can save you time, stress, gas money, and expose you to new types of foods and brands you can’t get at your local grocery store. </p>
                                    <button type="button" class="btn btn-default get">Get it now</button>
                                </div>
                                <div class="col-sm-6">
                                    {{--<img src="/assets_frontend/images/home/girl3.jpg" class="girl img-responsive" alt="" />--}}
                                    {{--<img src="/assets_frontend/images/home/pricing.png" class="pricing" alt="" />--}}
                                </div>
                            </div>

                        </div>

                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section><!--/slider-->


    <section>
        <div class="container">
            <div class="row">
                @include('frontend.sidebar')



                <div class="col-sm-9 padding-right">
                    @if(sizeof($featured)>0)

                        {{--<div class="recommended_items"><!--recommended_items-->--}}
                        {{--<h2 class="title text-center">Featured items</h2>--}}

                        {{--<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">--}}
                        {{--<div class="carousel-inner">--}}
                        {{--<div class="item active">--}}
                        {{--@foreach ($featured as $feature)--}}

                        {{--<div class="col-sm-4">--}}
                        {{--<div class="product-image-wrapper" onclick="location.href='/product_details/{{$feature->id}}'">--}}
                        {{--<div class="single-products">--}}
                        {{--<div class="productinfo text-center">--}}
                        {{--@if (sizeof($feature->images) > 0)--}}
                        {{--<img style="width: 150px;height: 150px" src="{{$feature->images[0]->image}}" alt="" />--}}
                        {{--@endif--}}
                        {{--<h2 style='text-decoration: line-through;'>${{$feature->price}}</h2>--}}
                        {{--<h2>${{$feature->offer_price}}</h2>--}}
                        {{--<p>{{$feature->name}}</p>--}}
                        {{--<a href="/product/{{$feature->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>--}}
                        {{--</div>--}}

                        {{--</div>--}}
                        {{--</div>--}}
                        {{--</div>--}}

                        {{--@endforeach--}}

                        {{--</div>--}}

                        {{--</div>--}}

                        {{--</div>--}}
                        {{--</div><!--/recommended_items-->--}}

                    @endif

                    @if(sizeof($products)>0)

                        <div class="features_items"><!--features_items-->
                            <h2 class="title text-center">New Items</h2>


                            @foreach ($products as $product)

                                <div class="col-sm-4" >
                                    <div class="product-image-wrapper" onclick="location.href='/product_details/{{$product->id}}'">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                @if (sizeof($product->images) > 0)
                                                    <img style="width: 200px;height: 200px" src="{{$product->images[0]->image}}" alt="" />
                                                @endif
                                                <h2 style='text-decoration: line-through;'>${{$product->price}}</h2>
                                                <h2>${{$product->offer_price}}</h2>
                                                <p>{{$product->name}}</p>
                                                <a href="/product/{{$product->id}}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </div><!--features_items-->

                    @endif

                    <div class="pull-right">
                        {!! $products->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop