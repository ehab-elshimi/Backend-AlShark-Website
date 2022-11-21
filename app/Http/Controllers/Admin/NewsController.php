<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_news = News::all();
        $count = count($all_news);

        return view('dashboard.pages.news.index',compact('all_news','count'));
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
        $request->validate([
            'headline' => 'required',
            'desc' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'date' => 'required',
        ]);
        //Image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('dashboard/uploads/images'), $imageName);


        News::create([
            'headline' => $request->headline,
            'desc' => $request->desc,
            'image' => $imageName,
            'date' => $request->date,

        ]);

        return redirect()->route('news.index')->with('News created successfully.');
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
    public function edit(News $news)
    {
        return view('dashboard.pages.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,News $news)
    {
        $request->validate([
            'headline' => 'required',
            'desc' => 'required',
            'date' => 'required',
        ]);
        if($request->hasFile('image')){
            $request->validate([
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg'
            ]);
            //Image
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('dashboard/uploads/images'), $imageName);
            $news->update([
                'image'=>$imageName,
            ]);
        }

        $news->update([
            'headline' => $request->headline,
            'desc' => $request->desc,
            'date' => $request->date,
        ]);


        return redirect()->route('news.index')->with('News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $image =  public_path('dashboard/uploads/images')."$news->image";
        if(file_exists($image)){
            @unlink($image); // then delete previous photo
        }
        $news->delete();
        return redirect()->route('news.index')->with('success','News deleted successfully');
    }
}

