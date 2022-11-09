<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function relation(){
        // $rows =CategoryProduct::all()->orderBy('category_name');
        $rows =CategoryProduct::orderBy('category_id')->get();

        $relations=array();
        foreach($rows as $row){
            $category=Category::where('id',$row['category_id'])->first();
            $product=Product::where('id',$row['product_id'])->first();
            $relation = [$category['id'],$category['name'],$product['id'],$product['name'],$row['id']];

            // foreach($relation as $key=>$value)
            // {
            //     array_push_assoc($rowcontent,$key,$value);
            // }
            array_push($relations,$relation);
        }
        return $relations;
    }
    public function index()
    {
        $rows = $this->relation();
        $categories = Category::all();
        $products = Product::all();
        return view('dashboard.pages.categoryproduct.index',compact('rows','categories','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_ids = CategoryProduct::pluck('category_id');

        $row=Category::where(function() use ($category_ids){
            foreach($category_ids as $id){
                $category=Category::where('id',$id)->first();
                $product_id=CategoryProduct::where('category_id',$id)->select('product_id')->first();
                $product=Product::where('id',$product_id)->first();
                    echo $category['name']." => ".$category['id']." => ".$product['id']." => ".$product['name']."<br>";
                    echo "<hr>";
            }
        })->get();
        // ------
        $category_ids = CategoryProduct::pluck('category_id');
        // dd($category_ids);
        // dd([$category_ids,$product_ids]);
        $categories =array();
        foreach($category_ids as $id){
            $category=Category::where('id',$id)->first();
            array_push($categories,$category);
        }
        foreach($categories as $category){
            echo $category['id'] ." => ".$category['name'];
            echo "<br>";
        }
        // ------------------------------------------------------------------------------------------
        $product_ids = CategoryProduct::pluck('product_id');
        $products =array();
        foreach($product_ids as $id){
            $product=Product::where('id',$id)->first();
            array_push($products,$product);
        }
        foreach($products as $product){
            echo $product['id'] ." => ".$product['name'];
            echo "<br>";
        }
        return view('dashboard.pages.categoryproduct.index',compact(['categories','products']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'product_id' => 'required',
        ]);

        CategoryProduct::create($request->all());

        return redirect()->route('categoryproduct.index')
                        ->with('success','Category created successfully.');
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
    public function edit(CategoryProduct $categoryproduct)
    {
        $categories = Category::all();
        $products = Product::all();
        $selected_category=Category::where('id',$categoryproduct['category_id'])->select('id','name')->first();
        $selected_product=Product::where('id',$categoryproduct['product_id'])->select('id','name')->first();

        return view('dashboard.pages.categoryproduct.edit',compact(['categoryproduct','categories','products','selected_category','selected_product']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryProduct $categoryproduct)
    {
        $request->validate([
            'category_id' => 'required',
            'product_id' => 'required',
        ]);

        $categoryproduct->update($request->all());

        return redirect()->route('categoryproduct.index')
                        ->with('success','Category created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($categoryproduct)
    {
        $categoryproduct=CategoryProduct::where('id',$categoryproduct)->delete();

        return redirect()->back();
    }
}
