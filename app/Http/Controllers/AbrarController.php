<?php

namespace App\Http\Controllers;

use App\Models\Abrar;
use Illuminate\Http\Request;

class AbrarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $url=url('/store');
        $title="Student registration";
        $uni=new Abrar;
        $uni->name="";
        $uni->uni="";
        $uni->department="";
        $uni->city="";
        $uni->password="";
        return view('form')->with(compact('url','title','uni'));

    }
    public function create(){

        $url=url('/store');
        $title="Student registration";
        $uni=new Abrar;
        $uni->name="";
        $uni->uni="";
        $uni->department="";
        $uni->city="";
        $uni->password="";
        return view('form')->with(compact('url','title','uni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         $request->validate(
            ['name'=>'required',
            'uni'=>'required',
            'department'=>'required',
            'city'=>'required',
            'password'=>'required'
            ]
       );


        $uni=new Abrar;
        $uni->name=$request->input('name');
        $uni->uni=$request->input('uni');
        $uni->department=$request->input('department');
        $uni->city=$request->input('city');
        $uni->password=$request->input('password');
        $uni->save();
        return redirect('/view');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Abrar  $abrar
     * @return \Illuminate\Http\Response
     */
    public function view( Request $request)
    {
        $search=$request['search']??"";
        if($search !=""){
            $uni=Abrar::where('name','like',"$search%")->orwhere('city','like',"$search")->get();
        }
        else{
            $uni=Abrar::paginate(10);
        }

        $data=compact('uni','search');
        return view('abrar_view')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Abrar  $abrar
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Abrar::find($id)->delete();
        return redirect('view');
    }
    public function force_delete($id)
    {
        Abrar::withTrashed()->find($id)->forcedelete();
        return redirect()->back();
    }
    public function restore($id)
    {
        Abrar::withTrashed()->find($id)->restore();
        return redirect('view');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Abrar  $abrar
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $request->validate(
            ['name'=>'required',
            'uni'=>'required',
            'department'=>'required',
            'city'=>'required',
            'password'=>'required'
            ]
       );
        $uni=Abrar::find($id);
        $uni->name=$request->input('name');
        $uni->uni=$request->input('uni');
        $uni->department=$request->input('department');
        $uni->city=$request->input('city');
        $uni->password=$request->input('password');
        $uni->save();
        return redirect('/view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Abrar  $abrar
     * @return \Illuminate\Http\Response
     */
    public function trash()
    {
        $uni=Abrar::onlyTrashed()->get();
        $data=compact('uni');
        return view('abrar_trash')->with($data);
    }
    public function edit($id){
        $uni=Abrar::find($id);
        if(is_null($uni)){
            return redirect('abrar_view');
        }
        else{
            $title="updating Student data";
            $url=url('/update')."/".$id;
            $data=compact('uni','url','title');
            return view('form')->with($data);
        }
    }


}
