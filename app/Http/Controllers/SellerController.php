<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "write some code";
    }

    function list(){
        $data = Seller::find(2)->getProduct;
        return $data;
    }

    function many(){
        $data = Seller::find(2)->getManyProduct;
        return $data;
    }

    function manyToOne(){
        $product = Product::find(1);
        return $product->getSeller;
    }

}
