<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;
use View;

class ProductsController extends Controller
{
    /**
     * Display a listing of the all the products from the table.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();       
        return $products;     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /** Recive and trim the Data **/
        $products = new Product;
        $products->name = $request->name;
        $products->price = $request->price;



        if( $products->save() )  
            if($request->ajax())
            {
                 return $products->name."was added to the database";  
            }
            else
            { 
                 return redirect()->to('/web/products');
            }
        else
            if($request->ajax())
            {
                return " Something happen wrong durring adding the product ".$product->name;
            }
            else
            { 
                 return view('products');
            }


             
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return $product;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        
        $product = $request;

        if( $product->save() )
                return " Product ".$product->name."was updated successfully";

        return " Something go wrong during updating the product".$product->name;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        
        $name = $product->name;

        if( $product->delete() )
            return "Product".$name."was Deleted";

        return  " Something go wrong during the deletion of product".$name;
    }

    public function mail_list()    {
        
        $products = Product::all();

         Mail::send('mail.product_alert',['products'=> $products ],function ($m) {
                    $m->from('hello@bilz.com', 'Your Application');
                    $m->to('m.champaneri.20@gmail.com', 'Manish')->subject('Curren Product List');
                });
    }
   }
