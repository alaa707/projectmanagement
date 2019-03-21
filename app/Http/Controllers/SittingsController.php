<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
class SittingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('setting.index')->with('settings', Setting::all());;
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
    public function update(Request $request)
    {
        
          $this->validate($request,[
           
               'name' => '',
               'description' => '',
               'email' => '',
               'keywords' => '',
              'maintainanc_desc'=> '',
               'status' => ''

        ]);
        
      $sittings=Setting::first();
      $sittings->name= $request->name;
      $sittings->description= $request->description;
      $sittings->email= $request->email;
      $sittings->keywords= $request->keywords;
      $sittings->status=$request->status;
      $sittings->save();
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
        //
    }
}
