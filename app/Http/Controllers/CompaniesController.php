<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::orderByDesc('created_at')->paginate(15);  //mana shu section ishlamadi
        //        dd($companies);
        return view('companies.index',[
            'companies' => $companies,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //formadan kelgan malumotlarni malumotlar bazasiga yozib quyish vazifasini bajaradi
    {
        //     dd($request->all());

        $data = $request->validate([
           'name'=> 'required|min:5',  //minimal 5tadan kam bo'lmasin
            'address'=> 'required',
            'phone'=> ['required','numeric',new PhoneNumber]
        ]);
//        dd($data);

        $company = new Company;
        $company->name = $data['name'];
        $company -> address = $data['address'];
        $company-> phone = $data['phone'];
        $company->save();
        return redirect()->route('companies.index');
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
}
