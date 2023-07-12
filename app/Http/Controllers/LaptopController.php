<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class LaptopController extends Controller
{

    /*lấy ra các sp thuộc menu laptop*/
    public function getLaptopProducts()
    {
        $items = [];
        $categories = Category::all();
        foreach ($categories as $categoryItem) {
            if (strcasecmp(trim($categoryItem->name), 'laptop') === 0) {
                /* lấy ra menu con của menu laptop*/
                foreach ($categoryItem->categoryChildren as $categoryChildren) {
                    /*lấy ra các sản phẩm thuộc các menu con*/
                    foreach ($categoryChildren->products as $productItem) {
                        $items[] = $productItem;
                    }
                }
            }
        }
        return $items;
    }

    public function index()
    {
        $sliders = Slider::all();
        $items = $this->getLaptopProducts();
        return view('laptop.laptop', compact('sliders', 'items'));
    }

    public function bestSeller()
    {
        $sliders = Slider::all();
        $items = $this->getLaptopProducts();
        /*sắp xếp lại sanr phẩm theo field 'count', sắp xếp theo bán chạy nhất giảm dần*/
        $items = array_values(Arr::sortDesc($items, function (Product $value) {
            return $value['counts'];
        }));
        return view('laptop.laptop', compact('items', 'sliders'));
    }

    public function highestPrice()
    {
        $sliders = Slider::all();
        $items = $this->getLaptopProducts();
        $items = array_values(Arr::sortDesc($items, function (Product $value) {
            return $value['price'];
        }));

        return view('laptop.laptop', compact('sliders', 'items'));
    }

    public function lowestPrice()
    {

        $sliders = Slider::all();
        $items = $this->getLaptopProducts();
        $items = array_values(Arr::sort($items, function (Product $value) {
            return $value['price'];
        }));
        return view('laptop.laptop', compact('sliders', 'items'));
    }

}
