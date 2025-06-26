<?php

namespace App\Http\Controllers;

use App\Models\CreateUser;
use App\Models\Orders;
use App\Models\Tovar;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Orders $orders, CreateUser $user)
    {
        $orders = Orders::where('status','новый')->get();
        return view('orders.order-all', compact('orders','user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Tovar $tovar)
    {
        
        $order = $request->validate([
            'tovar_name'=>'required',
            'FIO'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'status'=>'required',
            'comment'=>'required',
        ]);

        $totalPrice = floatval($order['price']) * intval($order['quantity']);

                $orderAll=[
            'tovar_name'=>$order['tovar_name'],
            'FIO'=>$order['FIO'],
            'quantity'=>$order['quantity'],
            'price'=>$order['price'],
            'status'=>$order['status'],
            'comment'=>$order['comment'],
            'total_price'=>$totalPrice
        ];

        Orders::create($orderAll);

        return redirect()->route('tovar-show', compact('tovar'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Orders $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orders $orders)
    {
        $request->validate([
            'FIO'=>'required',
            'quantity'=>'required',
            'status'=>'required',
            'comment'=>'required',
        ]);
        $orders->update($request->all());

        return redirect()->route('order-all');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orders $orders)
    {
        //
    }
}