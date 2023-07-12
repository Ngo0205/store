@extends('layouts.master');


@section('title')
    <title>Laptop</title>
@endsection

@section('content')
    <!-- slider product -->
    @include('laptop.components.slider-laptop')
    <!-- lọc nhanh  -->
    <div class="box-searchlink">
        <div class="box-searchlink-item">
            <a href="#">
                <img src="/html/đề tài/ảnh/logo nhãn hàng/637769104385571970_Macbook-Apple@2x.jpg" alt="">
            </a>
        </div>
        <div class="box-searchlink-item">
            <a href="#">
                <img src="/html/đề tài/ảnh/logo nhãn hàng/637340494666861275_Dell@2x.webp" alt="">
            </a>
        </div>
        <div class="box-searchlink-item">
            <a href="#">
                <img src="/html/đề tài/ảnh/logo nhãn hàng/637340494666704995_Acer@2x.webp" alt="">
            </a>
        </div>
        <div class="box-searchlink-item">
            <a href="#">
                <img src="/html/đề tài/ảnh/logo nhãn hàng/637619564183327279_HP@2x.webp" alt="">
            </a>
        </div>
        <div class="box-searchlink-item">
            <a href="#">
                <img src="/html/đề tài/ảnh/logo nhãn hàng/637732077455069770_Asus@2x.jpg" alt="">
            </a>
        </div>
        <div class="box-searchlink-item">
            <a href="#">
                <img src="/html/đề tài/ảnh/logo nhãn hàng/637340494668267616_Lenovo@2x.jpg" alt="">
            </a>
        </div>


    </div>
    <!-- feature product -->
    @include('laptop.components.feature-product')
    <hr/>
@endsection

