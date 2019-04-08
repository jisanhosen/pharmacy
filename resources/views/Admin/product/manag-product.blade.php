@extends('Admin.master')
@section('title')
    Manage Company
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12" style="margin:0 0 0 1%">
            <br/><br/><br/><br/>
            <hr/>
            <section class="panel">
                <div class="panel-body">
                    <h2 class="text-center">Add Product</h2>
                    <form class="pt-4" action="{{ url('/add/product') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-4 col-form-label">Company Name</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="Company Name" name="company_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 text-center">
                                <input type="submit" class="btn btn-primary" value="Submit"/>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
@endsection