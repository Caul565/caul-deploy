<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index ()
    {
        $products = Product::paginate(10);
        return view('product',compact('products'));
    }


    public function create()
    {
        $categories = Category::all();
        return view('addproduct',compact('categories'));

    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'category_id' => 'required|integer',
            'price' => 'required',
            'stock' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $validatedData['image'] = basename($request->file('image')->store('images/products', 'public'));

        Product::create($validatedData);

        // Alert::success('Successful!', 'Product created successfully.');
        return redirect('/products');
    }
       public function edit ($id)
       {
        $product = Product::find($id);
        $categories = Category::all();

        return view ('editproduct', compact('product','categories'));
       }


    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name' =>'required',
            'category_id' =>'required|integer',
            'price' =>'required',
           'stock' =>'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $product = Product::find($id);

        if ($request->hasFile('image')) {
            $validatedData['image'] = basename($request->file('image')->store('images/products', 'public'));
        }

        $product->update($validatedData);

        // Alert::success('Successful!', 'Product updated successfully.');
        return redirect('/products');
    }
    public function destroy($id)
    {
        
        $product = Product::find($id);
        $product->delete();

        return redirect('/products');
    }
}
