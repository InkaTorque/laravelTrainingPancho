<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Product::orderBy('updated_at','desc')->paginate(5);
        return view ('products.index')->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validating data SERVER SIDE
        $this->validate($request,array(
                'name'=>'required|max:255',
                'detail'=>'max:255',
                'amount'=>'required|numeric|min:1'
            ));

        //store in the DB
        $product = new Product;

        $product->name=$request->name;
        $product->detail=$request->detail;
        $product->amount=$request->amount;

        $product->save();

        Session::flash('success','El producto fue guardado satisfactoriamente !');

        //redirect
        return redirect()->route('products.show',$product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view ('products.show')->with('product',$product);
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
        return view('products.edit')->with('product',$product);
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
        ////validating data SERVER SIDE
        $this->validate($request,array(
                'name'=>'required|max:255',
                'detail'=>'max:255',
                'amount'=>'required|numeric|min:1'
            ));

        //store in the DB
        $product = Product::find($id);

        $product->name=$request->input('name');
        $product->detail=$request->input('detail');
        $product->amount=$request->input('amount');

        $product->save();

        Session::flash('success','El producto fue guardado satisfactoriamente !');

        //redirect
        return redirect()->route('products.show',$product->id);
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
        $product=Product::find($id);
        $product->delete();
        Session::flash('success','El producto fue eliminado satisfactoriamente !');
        return redirect()->route('products.index');
    }
}
