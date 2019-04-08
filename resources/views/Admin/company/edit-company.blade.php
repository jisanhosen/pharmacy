@extends('Admin.master')
@section('title')
    Add Company
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
                        <h2 class="text-center">EDIT COMPANY</h2>
                        <form name="editForm" class="pt-4" action="{{ url('/update/company') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Company Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Company Name" name="company_name" value="{{ $editCompanyById->company_name }}">
                                    <input type="hidden" class="form-control" name="company_id" value="{{ $editCompanyById->id }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="Description" class="col-sm-4 col-form-label">Description</label>
                                <div class="col-sm-8">
                                    <textarea class="form-control" name="company_description">{{ $editCompanyById->company_description }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-4 col-form-label">Publication Status</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="publication_status">
                                        <option>---Selection Publication Status---</option>
                                        <option value="1">---Published---</option>
                                        <option value="0">---Unpublished---</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10 text-center">
                                    <input type="submit" class="btn btn-primary" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.forms['editForm'].elements['publication_status'].value='{{ $editCompanyById->publication_status }}';
    </script>
@endsection