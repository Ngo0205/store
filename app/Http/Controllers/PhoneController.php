<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PhoneController extends Controller
{
    /* lấy ra các sản phaamr thuộc danh mục điện thoai*/
    public function getPhoneProducts(): array
    {
        $items = [];
        $categories = Category::all();
        foreach ($categories as $categoryItem) {
            if (strcasecmp(trim($categoryItem->name), 'phone') === 0) {
                /* lấy ra menu con của menu điện thoại*/
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

    public function getCategoryChild(): array
    {
        $categoryChildren = [];
        $categories = Category::where('parent_id', 0)->get();
        foreach ($categories as $categoryItem) {
            if (strcasecmp(trim($categoryItem->name), 'phone') === 0) {
                foreach ($categoryItem->categoryChildren as $categoryChild) {
                    $categoryChildren[] = $categoryChild;
                }
            }
        }
        return $categoryChildren;
    }


    public function index()
    {
        $sliders = Slider::all();
        $categoryChildren = $this->getCategoryChild();
        $items = $this->getPhoneProducts();
        return view('phone.phone', compact('sliders', 'items', 'categoryChildren'));
    }

    public function bestSeller()
    {
        $sliders = Slider::all();
        $items = $this->getPhoneProducts();
        $categoryChildren = $this->getCategoryChild();
        $items = array_values(Arr::sortDesc($items, function (Product $value) {
            return $value['counts'];
        }));
        return view('phone.phone', compact('sliders', 'items', 'categoryChildren'));
    }

    public function highestPrice()
    {

        $sliders = Slider::all();
        $items = $this->getPhoneProducts();
        $categoryChildren = $this->getCategoryChild();
        $items = array_values(Arr::sortDesc($items, function (Product $value) {
            return $value['price'];
        }));
        return view('phone.phone', compact('sliders', 'items', 'categoryChildren'));

    }

    public function lowestPrice()
    {
        $sliders = Slider::all();
        $items = $this->getPhoneProducts();
        $categoryChildren = $this->getCategoryChild();
        $items = array_values(Arr::sort($items, function (Product $value) {
            return $value['price'];
        }));
        return view('phone.phone', compact('sliders', 'items', 'categoryChildren'));

    }
}
