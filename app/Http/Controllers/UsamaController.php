<?php

namespace App\Http\Controllers;

use App\Models\Usama;
use Illuminate\Http\Request;

class UsamaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('usama');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $url=url('/store');
        $title='registring';
        $customer= new Usama;
        $customer->name="";
        $customer->adress="";
        $data=compact('$url','$title','$customer');
        return view('usama')->with($data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer= new Usama;
        $customer->name=$request->input('name');
        $customer->adress=$request->input('adress');
        $customer->save();
        return redirect('/view');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $customer=Usama::all();
        $data=compact('customer');
        return view('usama_view')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=Usama::find($id);
        if(is_null($customer)){
            return redirect('usama_view');
        }
        else{
            $title="editing page";
            $url=url('/update')."/".$id;
            $data=compact('customer','title','url');
            return view('usama')->with($data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $customer=Usama::find($id);
        $customer->name=$request->input('name');
        $customer->adress=$request->input('adress');
        $customer->save();
        return redirect('/view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Usama::find($id)->delete();
        return redirect()->back();
    }
}
