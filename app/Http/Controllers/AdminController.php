<?php

namespace App\Http\Controllers;

use App\Models\CreateUser;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(CreateUser $user)
    {
        $user = CreateUser::find($user);
        $users = CreateUser::all();
        return view('admin.admin-panel', compact( 'user', 'users'));
    }
        public function blog(CreateUser $user, Orders $order)
    {
        $orders = Orders::all();
        return view('admin.admin-blog', compact( 'user', 'orders', 'order'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Full Crud Orders Admin Panel.
     */
        public function order_edit(Request $request, Orders $order, CreateUser $user)
    {
        return view('admin.order-edit', compact( 'order','user'));
    }
    public function order_update(Request $request, Orders $order)
    {
        $request->validate([
            'tovar_name'=>'required',
            'FIO'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'status'=>'required',
            'comment'=>'required',
            'total_price'=>'required',
        ]);

        $order->update($request->all());

        return redirect()->route('adminblog');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function order_destroy(Orders $order)
    {
        $order->delete();

        return redirect()->route('adminblog');
    }

    /**
     * Full Crud Users Admin Panel.
     */
        public function user_edit(Request $request, CreateUser $user)
    {

        return view('admin.user-edit', compact('user'));
    }
    public function user_update(Request $request, CreateUser $user)
    {
        $request->validate([
            'email'=>'required',
            'gender'=>'required'
        ]);

        $user->update($request->all());

        return redirect()->route('adminpanel');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function user_destroy(CreateUser $user)
    {
        $user->delete();

        return redirect()->route('adminpanel');
    }
}