<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Bill;
use App\BillItem;

class BillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bills = Bill::all();
        return $bills;
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
        $bill = new Bill;
        $bill->customer_id = $request->customer_id;
        $bill->total_amount  = $request->total_amount;
        if($bill->save())
            return $bill."was saved succesfully";

        return " Something wrong during saving the bill for customer id ".
                    $request->customer_id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bill = Bill::find($id);
        $bill_items = $bill->bill_item()->get();
        $customer = $bill->customer()->get();
        $detail = [ 'bill_details' => $bill,
                    'bill_item_details' => $bill_items,
                    'customer_details' => $customer];
        return $detail;      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bill  = Bill::find($id);
        return $bill;
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
        $bill = Bill::find($id);
        $bill->total_amount = $request->total_amount;
        return "Update succesfully";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bill = Bill::find($id);
        if($bill->delete())
            return "Bill with Bill no".$id."was removed";

        return " Something happend wrong during deletion of the bill no".$id;
    }
}
