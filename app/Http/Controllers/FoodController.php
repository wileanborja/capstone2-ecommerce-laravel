<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Food;
use \App\Category;
use Session;
use DB;

class FoodController extends Controller
{
    public function index(){
    	$foods = Food::all();
        $categories = Category::all();
        return view('catalog', compact('foods', 'categories'));
    }

    public function create(){
    	$categories = Category::all();

    	return view('restaurant.addfood', compact('categories'));
    }

    public function store(Request $req){
    	// validate
    	$rules = array(
    		"name" => "required",
    		"description" => "required",
    		"price" => "required|numeric",
    		"category_id" => "required",
    		"imgPath" => "required|image|mimes:jpeg,jpg,png,gif,tiff,tif,webp,bitmap"
    	);

    	$this->validate($req, $rules);

    	// capture
    	$newFood = new Food;
    	$newFood->name = $req->name;
    	$newFood->description = $req->description;
    	$newFood->price = $req->price;
    	$newFood->category_id = $req->category_id;

    	// image handling
    	$image = $req->file('imgPath');
    	// We'll rename the image
    	$image_name = time().".".$image->getClientOriginalExtension();

    	$destination = "images/"; //corresponds to the public images directory

    	$image->move($destination, $image_name);

    	$newFood->imgPath = $destination.$image_name;

    	// save 
    	$newFood->save();
    	Session::flash("message", "$newFood->name has been added");
    	return redirect('/catalog');
    }

    public function filter($id)
    {
        $foods = Food::where('category_id', $id)->get();
        $categories = Category::all();

        return view('catalog', compact('foods', 'categories'));
    }

    public function search(Request $req)
    {
        $foods = Food::where('name', 'LIKE', '%' . $req->search . '%')->orWhere('description', 'LIKE', '%' . $req->search . '%')->get();
        $categories = Category::all();

        if(count($foods)==0){
            Session::flash('message', 'No food found');
        }
        return view('catalog', compact('foods', 'categories'));
    }

   public function destroy($id){
        $foodToDelete = Food::find($id);
        $foodToDelete->delete();

        Session::flash('message', "$foodToDelete->name has been deleted");
        return redirect()->back();
    }

    public function edit($id){
        $food = Food::find($id);
        $categories = Category::all();

        return view('restaurant.editfood', compact('food', 'categories'));
    }

    public function update($id, Request $req){
        $food = Food::find($id);

        $rules = array(
            "name" => "required",
            "description" => "required",
            "price" => "required|numeric",
            "category_id" => "required",
            "imgPath" => "image|mimes:jpeg,jpg,png,gif,tiff,tif,bitmap,webP"
        );

        $this->validate($req, $rules);

        $food->name = $req->name;
        $food->description = $req->description;
        $food->price = $req->price;
        $food->category_id = $req->category_id;

        if($req->file('imgPath') != null){
            $image = $req->file('imgPath');
            $image_name = time(). ".".$image->getClientOriginalExtension();
            $destination = "images/";
            $image->move($destination, $image_name);
            $food->imgPath = $destination.$image_name;
        }

        $food->save();
        Session::flash('message', "$food->name has been updated");
        return redirect('/catalog');
    }


    // Cart
    public function showCart(){

        $categories = Category::all();
        $foods = [];
        $total = 0;
        

        if(Session::has('cart')){
            $cart = Session::get('cart');
            foreach($cart as $foodId => $quantity){
                $food = Food::find($foodId);
                $food->quantity = $quantity;
                $food->subtotal = $food->price * $quantity;
                $foods[] = $food;
                $total += $food->subtotal;
            }
        }

        return view('customer.cart', compact('categories', 'foods', 'total'));
    }

    public function addToCart($id, Request $req){

        if(Session::has('cart')){
            $cart = Session::get('cart');
        }else{
            $cart = [];
        }

        if(isset($cart[$id])){
            $cart[$id] += $req->quantity;
        }else{
            $cart[$id] = $req->quantity;
        }
        Session::put("cart", $cart);

        $food = Food::find($id);

        Session::flash('message', "$req->quantity of $food->name successfully added to cart");

        return redirect()->back();
    }
}
