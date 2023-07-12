<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

session_start();

class CartController extends Controller
{
    private $products;
    private $carts;

    private $getCart;

    public function __construct(Product $product, Cart $cart)
    {
        $this->products = $product;
        $this->carts = $cart;
        $this->getCart = [];
    }

    public function addToCart($id)
    {
        if (!isset($_SESSION['carts'])) {
            $_SESSION['carts'] = array();
        }
        foreach ($_POST['quantity'] as $idProduct => $quantity) {
            if (isset($_SESSION['carts'][$idProduct])) {
                $_SESSION['carts'][$idProduct] += $quantity;
            } else {
                $_SESSION['carts'][$idProduct] = $quantity;
            }

        }

        return redirect(route('productDetail', ['id' => $id]));
    }

    public function showCart()
    {
        if (isset($_SESSION['carts'])) {
            $productItem = $this->products->whereIn('id', array_keys($_SESSION['carts']))->get();
            return view('cart.cart', compact('productItem'));
        } else {
            return view('cart.cart');
        }

    }

    public function deleteCart($id)
    {
        if (isset($_SESSION['carts'][$id])) {
            unset($_SESSION['carts'][$id]);
        }
        return redirect(route('cart.showCart'));
    }

    public function updateCart(Request $request)
    {
        if (isset($_SESSION['carts'][$_POST['id_hidden']])) {
            if ($_POST['quantity'] == 0) {
                unset($_SESSION['carts'][$_POST['id_hidden']]);
                return redirect(route('cart.showCart'));
            } else {
                $_SESSION['carts'][$_POST['id_hidden']] = $_POST['quantity'];
                return redirect(route('cart.showCart'));
            }

        }

    }

    public function order()
    {
        if (isset($_SESSION['carts'])) {

            $productItems = $this->products->whereIn('id', array_keys($_SESSION['carts']))->get();
            $total = 0;
            foreach ($productItems as $product) {
                $total = ($product->price) * ($_SESSION['carts'][$product->id]);
            }
            $cart = [
                'name' => $_POST['name'],
                'number_phone' => $_POST['phone_number'],
                'address' => $_POST['address'],
                'note' => $_POST['note'],
                'total' => $total,
            ];
            $cartInstance = $this->carts->create($cart);

            foreach ($productItems as $product) {
                $cartInstance->getCartItem()->create([
                    'name' => $product->name,
                    'product_id' => $product->id,
                    'image_product' => $product->feature_image,
                    'price' => $product->price,
                    'quantity' => $_SESSION['carts'][$product->id]
                ]);
            }

            unset($_SESSION['carts']);
            return redirect('/');
        }
    }


}
