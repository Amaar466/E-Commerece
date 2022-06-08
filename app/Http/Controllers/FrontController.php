<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   //dd($request->all());
 
   $trending_category = Category::where('popular','1')->take(15)->get();
  
   $trending_product = Product::where('trending','1')->take(15)->get();      
   //dd($trending_category);
   return view('frontend.userfront',compact('trending_category' ,'trending_category', 'trending_product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function category()
    {
        $trending_category = Category::where('status','1')->get();
        return view('frontend.userfront',compact('trending_category'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
     //

    }
    public function productview($id){

        $product = Product::where('id' , $id)->first();
        return view('product.newpage',compact('product'));
            
    }
    public function categoryview($id){
       //$category = Category::where('id' , $id)->first();
       $product =Product::where('cate_id', $id)->where('status','0')->get();
       return view("ecommerece.imageview",compact('product'));
       
            
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
