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
                    @if($message = Session::get('message'))
                        <h1 class="text-center text-success">{{ $message }}</h1>
                        <hr/>
                    @endif
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>SL No</th>
                            <th>Company Name</th>
                            <th>Company Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($companies as $company)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $company->company_name }}</td>
                                <td>{{ $company->created_at->format('d-m-Y') }}</td>
                                @if( $company->publication_status == '1')
                                    <td>Publish</td>
                                @else
                                    <td>Unpublish</td>
                                @endif
                                <td>
                                    <a href="{{ url('/edit/company/'.$company->id) }}" class="btn btn-primary btn-xs" title="Edit_Company">
                                        <span><i class="fa fa-pencil-alt"></i></span>
                                    </a>
                                    @if($company->publication_status == 1)
                                    <a href="{{ url('/unPublish/company/'.$company->id) }}" class="btn btn-info btn-xs" title="Unpublish_company">
                                        <span><i class="fa fa-arrow-down"></i></span>
                                    </a>
                                    @else
                                    <a href="{{ url('/publish/company/'.$company->id) }}" class="btn btn-info btn-xs" title="publish_company">
                                        <span><i class="fa fa-arrow-up"></i></span>
                                    </a>
                                    @endif
                                    <a href="{{ url('/company/delete/'.$company->id) }}" class="btn btn-danger btn-xs" title="Delete_company" onclick="return confirm('Are you  sure delete this')">
                                        <span><i class="fa fa-trash-alt"></i></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </section>
        </div>
    </div>
@endsection