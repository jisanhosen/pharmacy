<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProductAddForm(){
        $publishedCompanies = Company::where('publication_status', '1')->get();
        return view('Admin.product.add-product', ['publishedCompanies' => $publishedCompanies]);
    }
    public function saveProductInfo(Request $request){
        return 'hello world';
    }
}
