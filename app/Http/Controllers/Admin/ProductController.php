<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::select('id','session','name','desc')->orderByRaw('session')->get();
        $count = count($products);
        // $countsession = count($products['session']);
        return view('dashboard.pages.products.index',compact('products','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.products.create');
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
            'session'=> 'required',
            'name'=> 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'desc'=> 'required',
            'application'=> 'required',
            'components'=> 'required',
            'blends_with'=> 'required',
            'cautions'=> 'required',
            'msds'=> 'required|mimes:pdf,xlx,csv',
            'specs'=> 'required|mimes:pdf,xlx,csv'
        ]);
        //Image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('dashboard/uploads/images'), $imageName);
        //File
        $fileName1 = 'msds'.time().'.'.$request->msds->extension();
        $request->msds->move(public_path('dashboard/uploads/files'), $fileName1);
        //File
        $fileName2 = time().'.'.$request->specs->extension();
        $request->specs->move(public_path('dashboard/uploads/files'), $fileName2);
        $session=$request->session;
        if($session == 1){
        $session="winter";
        }elseif($session == 2){
            $session="summar";
        }elseif($session == 3){
            $session="on demand";
        }

        Product::create([
            'session'=>$session,
            'name'=>$request->name,
            'image'=>$imageName,
            'desc'=>$request->desc,
            'application'=>$request->application,
            'components'=>$request->components,
            'blends_with'=>$request->blends_with,
            'cautions'=>$request->cautions,
            'msds'=>$fileName1,
            'specs'=>$fileName2,

        ]);

        return redirect()->route('products.index')->with('Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::where('id',$id)->first();
        return view('dashboard.pages.products.show',compact('product'));
    }
    public function show_product(Product $product)
    {
        return view('dashboard.pages.products.show',compact('product'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboard.pages.products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'session'=> 'required',
            'name'=> 'required',
            'desc'=> 'required',
            'application'=> 'required',
            'components'=> 'required',
            'blends_with'=> 'required',
            'cautions'=> 'required',
        ]);


        if($request->hasFile('msds')){

            $request->validate([
                'msds'=> 'required|mimes:pdf,xlx,csv|max:2048'
            ]);
            //File
            $fileName1 = 'msds'.time().'.'.$request->msds->extension();
            $request->msds->move(public_path('dashboard/uploads/files'), $fileName1);
            $product->update([
                'msds'=>$fileName1,
            ]);
        }
        if($request->hasFile('specs')){

            $request->validate([
                'specs'=> 'required|mimes:pdf,xlx,csv|max:2048'
            ]);
            //File
            $fileName2 = time().'.'.$request->specs->extension();
            $request->specs->move(public_path('dashboard/uploads/files'), $fileName2);
            $product->update([
                'specs'=>$fileName2,
            ]);
        }
        if($request->hasFile('image')){
            $request->validate([
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg'
            ]);
            //Image
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('dashboard/uploads/images'), $imageName);
            $product->update([
                'image'=>$imageName,
            ]);
        }
        if($request->hasFile('image')){
            $request->validate([
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg'
            ]);
            //Image
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('dashboard/uploads/images'), $imageName);
            $product->update([
                'image'=>$imageName,
            ]);
        }
        $session=$request->session;
        if($session == 1){
        $session="winter";
        }elseif($session == 2){
            $session="summar";
        }elseif($session == 3){
            $session="on demand";
        }

        $product->update([
            'session'=>$session,
            'name'=>$request->name,
            'desc'=>$request->desc,
            'application'=>$request->application,
            'components'=>$request->components,
            'blends_with'=>$request->blends_with,
            'cautions'=>$request->cautions,
        ]);


        return redirect()->route('products.index')->with('Product created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {

        $result = CategoryProduct::where('product_id',$product->id)->get();
        $count = count($result);
        if($count>0){
            //Can not delete have relations
            return redirect()->route('products.index')->with('error','Can not delete have relations');
        }else{
            //Go delete  There is no relations
        $image =  public_path('dashboard/uploads/images')."$product->image";
        if(file_exists($image)){

            @unlink($image); // then delete previous photo

        }
        $file =  public_path('dashboard/uploads/files')."$product->specs";
        if(file_exists($file)){

            @unlink($file); // then delete previous photo

        }
        $product->delete();

        return redirect()->route('products.index')->with('success','Product deleted successfully');
        }


    }
}
