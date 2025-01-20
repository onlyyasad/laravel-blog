<?php

namespace App\Http\Controllers;

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

}
