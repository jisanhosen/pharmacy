@extends('Admin.master')
@section('title')
    Add Product
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="panel">
                    @if($message = Session::get('message'))
                        <h2 class="text-center text-success">{{ $message }}</h2>
                        <hr/>
                    @endif
                    <div class="panel-body">
                        <h2 class="text-center">Add Product</h2>
                        <form class="pt-4" action="{{ url('/add/product') }}" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Product Name:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" list="browser" placeholder="Product Name" name="product_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <label for="" class="col-sm-4 col-form-label">Company Name :</label>
                                        <div class="col-sm-8">
                                            <select class="form-control" name="company_name">
                                                <option>---Select Company Name---</option>
                                                @foreach($publishedCompanies as $publishedCompany)
                                                    <option value="{{ $publishedCompany->id }}">{{ $publishedCompany->company_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Invoice No :</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" placeholder="Invoice No" name="invoice_no">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Product Quantity :</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control " placeholder="Product Quantity" name="invoice_no">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">TP :</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control " placeholder="TP" name="invoice_no">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">Discount On TP :</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control " placeholder="Discount on TP" name="invoice_no">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">VAT :</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control " placeholder="VAT" name="invoice_no">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <label for="inputEmail3" class="col-sm-4 col-form-label">MRP :</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control " placeholder="MRP" name="invoice_no">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12 text-center">
                                    <input type="submit" class="btn btn-primary" value="Add To Cart"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection