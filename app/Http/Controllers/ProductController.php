<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productDetail($id)
    {

        $productDetail = Product::find($id);
        $categories = Category::all();
        $productRecommends = [];
        foreach ($categories as $categoryItem) {
            foreach ($categoryItem->categoryChildren as $categoryChild) {
                if ($categoryChild->id == $productDetail->category_id) {
                    foreach ($categoryChild->products as $productItem) {
                        $productRecommends[] = $productItem;
                    }
                }
            }
        }
        return view('product_detail.product_detail', compact('productDetail', 'productRecommends'));
    }


}
