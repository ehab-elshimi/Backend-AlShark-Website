<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('website.pages.products');
    }
    public function product_details(){
        return view('website.pages.product_details');
    }
    public function steam_distillation(){
        return view('website.pages.steam_distillation');
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
