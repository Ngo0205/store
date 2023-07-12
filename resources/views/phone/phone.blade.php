@extends('layouts.master')
@section('title')
    <title>Điện thoại</title>
@endsection

@section('content')
    <!-- slide -->
    @include('accessory.components.slider')
    <!-- tìm kiếm nhanh  -->
    <div class="box-searchlink">
        <div class="box-searchlink-item">
            <a href="#">
                <img src="/html/đề tài/ảnh/logo nhãn hàng/637340490193124614_iPhone-Apple@2x.jpg" alt="">
            </a>
        </div>
        <div class="box-searchlink-item">
            <a href="#">
                <img src="/html/đề tài/ảnh/logo nhãn hàng/637340490904217021_Samsung@2x.jpg" alt="">
            </a>
        </div>
        <div class="box-searchlink-item">
            <a href="#">
                <img src="/html/đề tài/ảnh/logo nhãn hàng/637340491304997311_Oppo@2x.jpg" alt="">
            </a>
        </div>
        <div class="box-searchlink-item">
            <a href="#">
                <img src="/html/đề tài/ảnh/logo nhãn hàng/637967768466618842_vivo-icon.jpg" alt="">
            </a>
        </div>
        <div class="box-searchlink-item">
            <a href="#">
                <img src="/html/đề tài/ảnh/logo nhãn hàng/637582325361253577_Xiaomi@2x.webp" alt="">
            </a>
        </div>
        <div class="box-searchlink-item">
            <a href="#">
                <img src="/html/đề tài/ảnh/logo nhãn hàng/637340491898745716_Realme@2x.webp" alt="">
            </a>
        </div>
    </div>
    <!-- sp -->
    <section id="product1" class="section-p1">
        <div class="selectquick">
            <div class="selectquick-item">
                <span>Sắp xếp theo:</span>
                <div class="btnselectquick">
                    <ul class="listselectquick">
                        <li class="listselectquick-item"><a href="{{route('phone.bestseller')}}">Bán chạy nhất</a></li>
                        <li class="listselectquick-item"><a href="{{route('phone.lowest-price')}}">Giá thấp nhất</a></li>
                        <li class="listselectquick-item"><a href="{{route('phone.highest-price')}}">Giá cao  nhất</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="pro-container">
{{--            show du lieu sp--}}
            @foreach($items as $productItem)
{{--                lay du lieu menu--}}
                @foreach($categoryChildren as $categoryChildrenItem)
{{--                    lấy tên menu mà sp nằm trong--}}
                    @if($categoryChildrenItem->id === $productItem->category_id)
                        <div class="pro">
{{--                            lấy ảnh sp--}}
                            <img src="{{config('app.baseUrl') . $productItem->feature_image}}" alt="">
                            <div class="des">
{{--                                lấy menu sp--}}
                                <span>{{$categoryChildrenItem->name}}</span>
{{--                                tên sp--}}
                                <a href="{{route('productDetail',['id'=>$productItem->id])}}"><h5>{{$productItem->name}}</h5></a>
{{--                                giá sp--}}
                                <p ><span>{{number_format($productItem->price)}}</span> <sup>đ</sup></p>
                            </div>
                        </div>
                    @endif
                @endforeach

            @endforeach

        </div>
    </section>

@endsection
