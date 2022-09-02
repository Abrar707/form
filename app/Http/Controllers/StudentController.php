<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer=new Student;
        $customer->name=$request->input('name');
        $customer->adress=$request->input('adress');
        $customer->password=$request->input('password');
        $customer->save();
        return redirect('/student/view');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $customer=Student::all();
        $data=compact('customer');
        return view('student_show')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=Student::find($id);
        if(is_null($customer)){
            return redirect('/student/view');
        }
        else{
            $title="updating Student data";
            $url=url('/update')."/".$id;
            $data=compact('uni','url','title');
            return view('student')->with($data);
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
        $customer=Student::find($id);
        $customer->name=$request->input('name');
        $customer->adress=$request->input('adress');
        $customer->password=$request->input('password');
        $customer->save();
        return redirect('/student/view');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // Abrar::find($id)->delete();
        // return redirect()->back();
        Student::find($id)->delete();
        return redirect()->back();
    }
}
