<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Product;
use Illuminate\Support\Arr;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
    public function home(){
        return view('website.pages.home');
    }
    public function history(){
        return view('website.pages.history');
    }
    public function products(){
        $categories = Category::all();
        return view('website.pages.products',compact('categories'));
    }
    public function product($category){
        // $rows =CategoryProduct::all()->orderBy('category_name');
        // $products = CategoryProduct::where('category_id',$category)->get();
        $products = CategoryProduct::where('category_id',$category)->get();
        $products_ids = $products->pluck('product_id');

        $information=array();
        foreach($products_ids as $id){
            $product=Product::where('id',$id)->orderBy('session')->first();
            array_push($information,$product);
        }
        return $information;
    }
    public function steam_distillation($category){
        $products = $this->product($category);
        $sesion_name=Arr::pluck($products, 'session');


        $sortbysession = collect($products)->sortBy('session')->toArray();

        // // $sort=Arr::select($sortbysession,'id','session');
        $winter = array();
        $summar = array();
        $ondemand = array();

        foreach($sortbysession as $key){
            if($key['session']=='winter'){
                $product=Product::where('id',$key['id'])->first();
                array_push($winter,$product);
            }
        }
        foreach($sortbysession as $key){
            if($key['session']=='summar'){
                $product=Product::where('id',$key['id'])->first();
                array_push($summar,$product);
            }
        }
        foreach($sortbysession as $key){
            if($key['session']=='on demand'){
                $product=Product::where('id',$key['id'])->first();
                array_push($ondemand,$product);
            }
        }
        // dd($ondemand);
        // foreach($sort as $value){
        //     if($value=='winter'){
        //         $product=Product::where('id',4)->first();
        //         array_push($winter,$product);
        //     }
        // }
        // foreach($sort as $value){
        //     if($value=='summar'){
        //         $product=Product::where('id',4)->first();
        //         array_push($summar,$product);
        //     }

        // }

        return view('website.pages.steam_distillation',compact('winter','summar','ondemand'));
    }
    public function product_details($id){
        $product = Product::where('id',$id)->first();
        return view('website.pages.product_details',compact('product'));
    }
    public function partners(){
    return view('website.pages.partners');
    }
    public function certificates(){
    return view('website.pages.certificates');
    }

    public function gallery(){
        return view('website.pages.gallery');
    }
    public function news(){
        return view('website.pages.news');
    }
    public function contact(){
        return view('website.pages.contact');
    }
}
