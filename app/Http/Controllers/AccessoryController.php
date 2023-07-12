<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class AccessoryController extends Controller
{
    /*lấy ra các sp thuộc menu laptop*/
    public function getAccessoryProducts()
    {
        $items = [];
        $categories = Category::all();
        foreach ($categories as $categoryItem) {
            if (strcasecmp(trim($categoryItem->name), 'accessory') === 0) {
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

    public function getCategoryChild(): array
    {
        $categoryChildren = [];
        $categories = Category::where('parent_id', 0)->get();
        foreach ($categories as $categoryItem) {
            if (strcasecmp(trim($categoryItem->name), 'accessory') === 0) {
                foreach ($categoryItem->categoryChildren as $categoryChild) {
                    $categoryChildren[] = $categoryChild;
                }
            }
        }
        return $categoryChildren;
    }

    public function index()
    {
        $items = $this->getAccessoryProducts();
        $categoryChildren = $this->getCategoryChild();
        return view('accessory.accessory', compact('items', 'categoryChildren'));
    }

    public function bestSeller(){
        $items = $this->getAccessoryProducts();
        $categoryChildren = $this->getCategoryChild();
        $items = array_values(Arr::sortDesc($items, function(Product $value){
            return $value['counts'];
        }));
        return view('accessory.accessory', compact('items', 'categoryChildren'));
    }

    public function highestPrice(){
        $items = $this->getAccessoryProducts();
        $categoryChildren = $this->getCategoryChild();

        $items = array_values(Arr::sortDesc($items, function (Product $value){
            return $value['price'];
        }));
        return view('accessory.accessory', compact('items', 'categoryChildren'));
    }

    public function lowestPrice(){
        $items = $this->getAccessoryProducts();
        $categoryChildren = $this->getCategoryChild();

        $items = array_values(Arr::sort($items, function (Product $value){
            return $value['price'];
        }));
        return view('accessory.accessory', compact('items', 'categoryChildren'));
    }
}
