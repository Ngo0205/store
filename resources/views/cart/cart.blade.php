@extends('layouts.master')

@section('title')
    <title>Cart</title>
@endsection

{{--<?php--}}
{{--   session_start();--}}
{{--?>--}}

@section('content')

    <section class="cart">
        <h2>Cart</h2>
        <br><br>
        <?php
        $index = 0;
        $total = 0;
        ?>
        <table>
            <thead>
            <!-- thẻ dòng -->
            <tr>
                <!-- thẻ cột  -->
                <th>STT</th>
                <th>Hình ảnh</th>
                <th>Sản phẩm</th>
                <th>Giá</th>
                <th>SL</th>
                <th style="text-align: left">Chọn</th>
            </tr>
            </thead>
            <tbody>
            @if(isset($productItem))
                @foreach($productItem as $id => $cartItem)
                    <form action="{{route('cart.updateCart')}}" method="post">
                        @csrf
                        <tr>
                            <th>{{++$index}}</th>
                            <td style="display: flex; align-items: center;">
                                <img style=" width: 80px;" src="{{config('app.baseUrl'). $cartItem->feature_image}}"
                                     alt="">
                            </td>
                            <td>{{$cartItem->name}}</td>
                            <td>
                                <p>
                                    <span>{{number_format($cartItem->price)}}</span> <sup>đ</sup>
                                </p>
                            </td>
                            <td>
                                <input style="width: 30px; outline: none;"
                                       type="number"
                                       name="quantity"
                                       value="{{$_SESSION['carts'][$cartItem->id]}}"
                                       min="1">
                                <input type="hidden" name="id_hidden" value="{{$cartItem->id}}">
                            </td>
                            <td >
                                <button type="submit" class="btn btn-dark" name="updateCart">Cập nhật</button>
                                <a href="{{route('cart.deleteCart',['id' => $cartItem->id])}}"
                                   class="btn btn-danger">Xoá</a>

                            </td>
                        </tr>
                            <?php
                            $total += $cartItem->price * $_SESSION['carts'][$cartItem->id]
                            ?>
                    </form>
                @endforeach
            @endif


            </tbody>
        </table>

        <div class="price-total">
            <p style="font-weight:bold ;">
                Tổng tiền:
                <span>
                    {{number_format($total)}}
                </span> <sup>đ</sup>
            </p>
        </div>
    </section>
    <!--thanh toán  -->
    <section>
        <div class="adreess-form">
            <div class="adress-form-content">
                <h6>Chọn địa chỉ nhận hàng </h6>
                <form onsubmit="return check_cart()" action="{{route('cart.order')}}" method="post">
                    @csrf
                    <input type="text" name="name" id="name_pay" placeholder="Nhâp họ tên" required>
                    <input type="text" name="phone_number" id="phone_pay" placeholder="Nhập số điện thoại " required>
                    <input type="text" name="address" id="home_pay" placeholder="Nhâp địa chỉ" required>
                    <input style="margin-bottom: 10px" type="text" name="note" placeholder="Ghi chú">
                    <select name="">
                        <option value="#">Chọn phương thức thanh toán</option>
                        <option value="#">Thanh toán khi nhận hàng</option>
                    </select>
                    <button type="submit">Đặt hàng</button>
                </form>
            </div>
        </div>
    </section>

@endsection
@section('js')
    <script>
        function check_cart() {
            alert("Đặt hàng thành công");
        }
    </script>
@endsection


