<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Neww;
use App\Category;
use Auth;


class NewsController extends Controller
{
    
    
    
    public function __Construct()
    {
        
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('news.index')->with('news', Neww::all());
        
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        
        $categories = Category::all();
        if ($categories->count() ==0   ) {
             
            return redirect()->route('category.create') ;
            
        }




        return view('news.create')->with('categories',$categories);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'subject' => 'required',
            'content' => 'required',
            'image' => 'required',

        ]);
        
        
        $post = Neww::create([
            "subject"    => $request->subject,
            "content"  => $request->content,
            "cat_id"  => $request->cat_id,
            "image" => $request->image,
            "user_id" => Auth::id()
        ]);
        return redirect()->back();

//        $news = new neww;
//
//        $news->subject = $request->subject;
//        $news->content= $request->content;
//        $news->image=$request->image;
//        $news->cat_id = $request->cat_id;
//        $news->user_id=Auth::id();
//
//        $news->save();
        
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
        
        
     return view('news.edit')->with('news', Neww::find($id));

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
        $news =  Neww::find($id);
        
   $news->subject= $request->subject;
   $news->content= $request->content;
   $news->save();
   return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news =  Neww::find($id);
        $news->destroy($id);
      $news->save();
       return redirect()->back();
    }
}
