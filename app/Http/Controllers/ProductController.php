<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Addcart;
use Session;
use cart;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('product.add',compact('category'));
       // dd($category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showdata()
    {
        $product = Product::all();
       return view('product.showdata',compact('product'));
    }
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $product= new Product;
        if($request->hasFile('photo'))
        {
            //dd('helo');

           $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/productimage/',$filename);
            
            $product->photo=$filename;
        }
        $product->cate_id = $request->input('cate_id');
        //dd($product);
        $product->product_slug = $request->input('product_slug');
        $product->short_description= $request->input('short_description');
        $product->status= $request->input('status')== true ? '1' : '0';;
        $product->trending= $request->input('trending')== true ? '1' : '0';;
        $product->price= $request->input('price');
        $product->quantity= $request->input('quantity');
        //$product->photo = $request->input('photo');
        //dd( $product);
        $product->save();
        return redirect('/showdata');
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
        // dd( $product);
       return view('product.edit',compact('product'));
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
        $product =  Product::find($id);
        if($request->hasFile('photo'))
        {
            $path = 'assets/uploads/productimage/'.$product->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('photo');
           // dd($file);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/productimage/',$filename);
            $product->photo =$filename;
        }
       
       $product->cate_id = $request->input('cate_id');
        //dd($product);
        $product->name = $request->input('name');
        $product->product_slug = $request->input('product_slug');
        $product->short_description= $request->input('short_description');
        $product->status= $request->input('status')== true ? '1' : '0';;
        $product->trending= $request->input('trending')== true ? '1' : '0';;
        //$product->photo = $request->input('photo');
        //dd( $product);
        $product->save();
        return redirect('/showdata');
    
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
     $product->delete();
     return redirect('showdata');

    }
     public function index2(Request $request)
     {
         //dd($request->all());
       
}
      
       
  

}
