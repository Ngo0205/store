@extends('layouts.master')

@section('title')
    <title>Home Page</title>
@endsection


@section('content')

    <!-- slider-top -->
    @include('home.components.slider')
    <!-- contener -->
{{--    <section class="filter-panel">--}}

{{--        <div class="filer-list">--}}
{{--            <h4>Thương hiệu</h4>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">Oppo</label>--}}
{{--            </div>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">Apple</label>--}}
{{--            </div>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">Samsung</label>--}}
{{--            </div>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">Aces</label>--}}
{{--            </div>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">Dell</label>--}}
{{--            </div>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">HP</label>--}}
{{--            </div>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">Lenovo</label>--}}
{{--            </div>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">Asus</label>--}}
{{--            </div>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">Microsoft</label>--}}
{{--            </div>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">Xiaomi</label>--}}
{{--            </div>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">Realme</label>--}}
{{--            </div>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">Huawei</label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="filer-list">--}}
{{--            <h4>Giá</h4>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">0- 5.000.000</label>--}}
{{--            </div>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">5.000.000-10.000.000</label>--}}
{{--            </div>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">10.000.000-20.000.000</label>--}}
{{--            </div>--}}
{{--            <div class="filter-item">--}}
{{--                <label><input type="checkbox">Trên 20.000.000</label>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <button id="btn-filter">Áp dụng</button>--}}
{{--    </section>--}}
    <!-- sản phẩm review -->
    <section class="review">
        <a href="#"><img src="/html/đề tài/ảnh//slider/sp/group-194.png" alt=""></a>
        <a href="#"><img src="/html/đề tài/ảnh//slider/sp/group-202.png" alt=""></a>
        <a href="#"><img src="/html/đề tài/ảnh//slider/sp/group-203.png" alt=""></a>
        <a href="#"><img src="/html/đề tài/ảnh//slider/sp/ipad.png" alt=""></a>
    </section>
    <!-- feature products -->
    @include('home.components.feature_product')
    <!-- sản phẩm mới  -->
    @include('home.components.news_product')
    <!-- action banner -->
    <section id="banner" class="section-m1">
        <h4>Dịch vụ sửa chữa</h4>
        <h2>Giảm đến <span>30%</span>- Tất cả các mặt hàng máy tính và thiết bị khác</h2>
        <button class="normal">Tìm hiểu thêm</button>
    </section>
    <hr/>

@endsection


