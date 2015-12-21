<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class appController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('welcome');
    }

    public function bills()
    {
      return view('bills');
    }

   public function products()
    {
      $products = Product::all();
      return view('products')->with( ['active'=>'products','products'=>$products]);
    }

    public function customers()
    {
      $customer = Customer::all();
      return view('customer')->with ( [])
    }
}