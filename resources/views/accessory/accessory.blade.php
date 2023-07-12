@extends('layouts.master')

@section('title')
    <title>Phụ kiện</title>
@endsection

@section('content')
    <!-- sản phẩm  -->
    <section id="product1" class="section-p1">
        <div class="selectquick">
            <div class="selectquick-item">
                <span>Sắp xếp theo:</span>
                <div class="btnselectquick">
                    <ul class="listselectquick">
                        <li class="listselectquick-item"><a href="{{route('accessory.bestseller')}}">Bán chạy nhất</a>
                        </li>
                        <li class="listselectquick-item"><a href="{{route('accessory.lowest-price')}}">Giá thấp nhất</a>
                        </li>
                        <li class="listselectquick-item"><a href="{{route('accessory.highest-price')}}">Giá cao nhất</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pro-container">
            @foreach($items as $productItem)
                @foreach($categoryChildren as $categoryChildrenItem)
                    @if($categoryChildrenItem->id === $productItem->category_id)
                        <div class="pro">
                            <img src="{{config('app.baseUrl') . $productItem->feature_image}}" alt="">
                            <div class="des">
                                <span>{{$categoryChildrenItem->name}}</span>
                                <a href="{{route('productDetail',['id'=>$productItem->id])}}">
                                    <h5> {{$productItem->name}}</h5></a>
                                <p><span>{{number_format($productItem->price)}}</span> <sup>đ</sup></p>
                            </div>
                            <a class="cart" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                        </div>
                    @endif
                @endforeach
            @endforeach

        </div>
    </section>
@endsection
