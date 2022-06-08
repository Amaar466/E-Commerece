<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Addcart;
use App\Models\Order;
use Cart;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function checkout(){
        $cart=Addcart::where('user_id', Auth::id())->get();
        return view('/product.cartcheckout',compact('cart'));
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
    public function placeorder(Request $request)
    {
        //dd($request->all());
        $order = new Order();
       $order->user_id = auth::id();
        $order->fname= $request->input('fname');
        $order->lname= $request->input('lname');
        $order->email= $request->input('email');
        $order->phone_number= $request->input('phone_number');
        $order->address= $request->input('address');
        $order->city= $request->input('city');
        $order->state= $request->input('state');
        $order->country= $request->input('country');
        $order->post_code= $request->input('post_code');
        $total= 0;
        $cart_total= Cart::where('user_id', auth::id())->get();
        foreach( $cart_total as $prod)
        {
            $total +=$prod->product->total_price;
        }
        $order->total_price = $total;
        $order->tracking_no= 'Amaar'.rand(1111,9999);
       $order->save();
  // return view('product.plceholder');
        $cart=Addcart::where('user_id',Auth::id())->get();
        // dd($cart);
           foreach ($cart as $finals) {
               OrderItem::create([
                   'order_id'=> $finals->id,
                   'product_id'=> $finals->product_id,
                   'user_id' => auth()->id(),
                   'price'=> $finals->Product->price,           
  
               ]);
              }
       return redirect('/')->with('status',"Order Placed Successfully");
      

       
        //return redirect('/checkout');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
