<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\sendProduct;
use App\deliverProduct;
use DB;
use Auth;

class supplierAccessController extends Controller
{

	public function __construct() {
		$this -> middleware('auth:supplier');
	}

    public function dash()
    {
    	return view('supplier_dash');
    }

	public function sendProductView()
    {
    	$products = DB::table('send_products') -> paginate(5);
        return view('supplier_products', ['products' => $products]);
    }

    public function sendProduct(Request $request)
    {

    	$input = Input::all();
    	$product_name = $request->input("product_name");

    		foreach ($product_name as $key => $product_name) {

			$product = new sendProduct;

            $product -> product_name = $input['product_name'][$key];
            $product -> product_code = $input['product_code'][$key];

            $product -> save();
		}
         return redirect() -> back() -> with('proSuccess', 'Product Added Successfully');
    }

		public function deliverProduct(Request $request)
    {

      $product = $request -> input("product");

      foreach ($product as $pro) {

        $products   = new deliverProduct();

        $userId     = Auth::user() -> id;
        $userName   = Auth::user() -> name;
        $userEmail  = Auth::user() -> email;

        $products -> product_name = $pro;
        $products -> user_id      = $userId;
        $products -> user_name    = $userName;
        $products -> user_email   = $userEmail;

        $products->save();
      }

        return redirect('/');

    }

}
