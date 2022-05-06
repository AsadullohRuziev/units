<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveCompanyRequest;
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
        $companies = Company::orderByDesc('created_at')->paginate(15);  //mana shu section ishlamadi orderByDesc('created_at')->
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
        $company = new Company();
        return view('companies.create',[
            'company'=>$company
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveCompanyRequest $request) //formadan kelgan malumotlarni malumotlar bazasiga yozib quyish vazifasini bajaradi
    {
        //     dd($request->all());

//        $data = $request->validate([
//           'name'=> 'required|min:5',  //minimal 5tadan kam bo'lmasin
//            'address'=> 'required',
//            'phone'=> ['required','numeric',new PhoneNumber]
//        ]);
//        dd($data);
//            $company = Company::create($data);
//            dd($this->validatedData());
        Company::create($request->validated());   //new validate qoshildi sodda va oson and globalga o'xshashroq
//        $company = new Company;
//        $company->name = $data['name'];
//        $company -> address = $data['address'];
//        $company-> phone = $data['phone'];
//        $company->save();
        return redirect()->route('companies.index');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Company $company) // 404ning qisqartma usuli
    {
        //$company = Company::findOrFail($company);  // bunda sahifa topilmadi xatoligini beradi agar u sahifa yuq bo'lasa
        return view('companies.show',[
            'company' => $company
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit',[
            'company'=>$company
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SaveCompanyRequest $request, Company $company)
    {
//        $data = $request->validate([
//            'name'=> 'required|min:5',
//            'address'=> 'required',
//            'phone'=> ['required','numeric',new PhoneNumber]
//        ]);
        $company->update($request->validated());
        return redirect()->route('companies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index');
    }
    public function validatedData()
    {
        return request()->validate([
            'name'=> 'required|min:5',
            'address'=> 'required',
            'phone'=> ['required','numeric',new PhoneNumber]
        ]);
    }
}
