<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\deliverProduct;
use DB;

class GetDeliveredProductsController extends Controller
{

  public function __construct() {
    $this -> middleware('auth:web');
  }

    public function getDelivary()
    {
        $product = DB::table('deliver_products') -> paginate(5);
        return view('getDeliveredProducts', ['product' => $product]);
    }
}
