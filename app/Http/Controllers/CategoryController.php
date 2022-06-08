<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
       
        return view('ecommerece.add');
    }
    public function showdata()
    {
        

        $category = Category::all();
     return view('ecommerece.show',compact('category'));
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
        
     $category = new Category(); 
     if($request->hasFile('photo'))
        {
            //dd('helo');

           $file = $request->file('photo');
            $ext = $file->getClientOriginalExtension();
            
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/categoryimage/',$filename);
            
            $category->photo=$filename;
        }
       // dd($category->photo);
     $category->name = $request->input('name');
     $category->slug = $request->input('slug');
     $category->description = $request->input('description');
     $category->status = $request->input('status')== true ? '1' : '0';
     $category->popular = $request->input('popular')== true ? '1' : '0';
    
     $category->save();
     return redirect('/show');
     

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
        $category = Category::find($id);
       // dd($category);
        return view('ecommerece.edit',compact('category'));
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
        $category =  Category::find($id);
        if($request->hasFile('photo'))
        {
            $path = 'assets/uploads/categoryimage/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('photo');
           // dd($file);
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/categoryimage/',$filename);
            $category->photo =$filename;
        }
       
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->description = $request->input('description');
        $category->status = $request->input('status')== true ? '1' : '0';
        $category->popular = $request->input('popular')== true ? '1' : '0';
        $category->save();
        return redirect('/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/show');
    }
}
