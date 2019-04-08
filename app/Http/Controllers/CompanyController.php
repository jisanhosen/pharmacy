<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function showAddCompanyForm(){
        return view('Admin.company.add-company');
    }
    public function saveCompanyInfo(Request $request){
        $company = new Company();
        $company->company_name = $request->company_name;
        $company->company_description = $request->company_description;
        $company->publication_status = $request->publication_status;
        $company->save();
        return redirect('/add/company')->with('message', 'Company Add Successful');
    }
    Public function manageCompany(){
        $companies = Company::all();
        return view('Admin.company.manage-company', ['companies' => $companies]);
    }
    public function editCompany($id){
        $editCompanyById = Company::find($id);
        return view('Admin.company.edit-company', ['editCompanyById' => $editCompanyById]);
    }
    public function updateCompanyById(Request $request){
        $updateCompanyById = Company::find($request->company_id);
        $updateCompanyById->company_name = $request->company_name;
        $updateCompanyById->company_description = $request->company_description;
        $updateCompanyById->publication_status = $request->publication_status;
        $updateCompanyById->save();
        return redirect('/mange/company')->with('message', 'Edit Company Info Successful');
    }
    public function publishCompanyById($id){
        $publishCompanyById = Company::find($id);
        $publishCompanyById->publication_status = 1;
        $publishCompanyById->save();
        return redirect('/mange/company')->with('message', 'Publish Company Successful');
    }
    public function unPublishCompanyById($id){
        $unPublishCompanyById = Company::find($id);
        $unPublishCompanyById->publication_status = 0;
        $unPublishCompanyById->save();
        return redirect('/mange/company')->with('message', 'UnPublish Company Successful');
    }
}
