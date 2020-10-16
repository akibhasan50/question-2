<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use App\Models\City;
use App\Models\Depertment;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employes = Employe::latest()->simplePaginate(10);

        return view('employe.index',compact('employes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();
        $depertments = Depertment::all();
        return view('employe.addemploye',compact('cities','depertments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employe = new  Employe();

        $request->validate([
            'name'=>'required',
            'gender'=>'required',
            'depertment'=>'required',
            'city'=>'required',
            
        ]);
        $employe->name = $request->name;
        $employe->gender = $request->gender;
        $employe->depertment = $request->depertment;
        $employe->city = $request->city;

        $employe->save();

        Alert::success('Success', 'Employe Added Successfully');

        return redirect('/');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function show(Employe $employe,$id)
    {
        $singleemploye = Employe::Find($id);
        $cities = City::all();
        $depertments = Depertment::all();
        return view('employe.details',compact('cities','depertments','singleemploye'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function edit(Employe $employe,$id)
    {
        $singleemploye = Employe::Find($id);
        $cities = City::all();
        $depertments = Depertment::all();
        return view('employe.editemploye',compact('cities','depertments','singleemploye'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employe $employe,$id)
    {
        
        $employe = Employe::Find($id);
        $request->validate([
            'name'=>'required',
            'gender'=>'required',
            'depertment'=>'required',
            'city'=>'required',
            
        ]);
        $employe->name = $request->name;
        $employe->gender = $request->gender;
        $employe->depertment = $request->depertment;
        $employe->city = $request->city;

       $update = $employe->save();
        if($update){
            Alert::success('Success', 'Employes Details Updated Successfully');

        }
       
        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employe  $employe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employe $employe,$id)
    {
        $employe = Employe::Find($id);
        $delete = $employe->delete();

        if($delete){
            Alert::warning('Warning', 'Employes Deleted Successfully');
        
        }
        return redirect()->back();
    }
}
