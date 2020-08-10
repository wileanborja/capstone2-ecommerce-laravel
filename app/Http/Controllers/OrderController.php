<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Order extends Controller
{
    public function checkout(){
    
    	if(Auth::user()){
    		$order = new Order;
    		$order->user_id = Auth::user()->id;
    		$order->status_id = 1; //pending
    		$order->payment_id = 1; //COD
    		$order->total = 0;
    		$order->save();

    		$cart = Session::get('cart');

    		$total = 0;

    		foreach($cart as $foodId=>$quantity){
    			// synthax for adding entries to our many to many table
    			$order->foods()->attach($foodId, ["quantity"=>$quantity]);

    			$food = Food::find($foodId);
    			$total += $food->price*$quantity;
    		}

    		$order->total = $total;
    		$order->save();

    		Session::forget('cart');
    		Session::flash('message', "Order successfully placed");
    		return redirect ('/catalog');
    	}else{
    		return redirect ('/login');
    	}
    }

    public function showOrders(){
    	$orders = Order::where('user_id', Auth::user()->id)->get();

    	return view('userviews.orders', compact('orders'));
    }

    public function index(){
        $orders = Order::all();
        return view('restaurant.foodorders', compact('orders'));
    }

    public function cancelOrderByAdmin($id){
        $order = Order::find($id);

        if(Auth::user()->role_id ==2){
            $order->status_id =3;
            $order->save();
        }else{
            $order->status_id = 4;
            $order->save();

        return redirect("allorders");
        }

    }

}
