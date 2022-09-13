@extends('Admin.master')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <div class="card-body">
                        </div>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">

{{--                        <table id="dataTable" class="table table-bordered table-hover">--}}
{{--                            <thead>--}}
{{--                            <tr>--}}
{{--                                <th style="white-space: pre">مدیر پروژه</th>--}}
{{--                                <th style="white-space: pre"> عنوان</th>--}}
{{--                                <th style="white-space: pre"> تاریخ درخواست</th>--}}
{{--                                <th style="white-space: pre"> وضعیت</th>--}}
{{--                                <th style="white-space: pre">نوع پروژه</th>--}}
{{--                                <th style="white-space: pre">عملیات</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            @foreach($jobs as $job)--}}
{{--                                <tr>--}}
{{--                                    <td>{{$job->userRelation->name}}</td>--}}
{{--                                    <td>{{$job->title}}</td>--}}
{{--                                    <td>{{$job->created_at}}</td>--}}
{{--                                    <td>{{$job->statusRelation?$job->statusRelation->title:'#'}}</td>--}}
{{--                                    <td>{{$job->workingTypeRelation?$job->workingTypeRelation->title:'#'}}</td>--}}
{{--                                    <td>--}}
{{--                                        <a class='' href="{{route('job_request.edit',$job->id)}}"><i--}}
{{--                                                class="fa fa-edit"></i></a>--}}
{{--                                        <form class='d-inline-flex remove-button'--}}
{{--                                              action={{route('job_request.destroy',$job->id) }}   method='POST'>{{csrf_field()}} {{  method_field('DELETE')}}--}}
{{--                                            <button class="fa fa-trash text-danger" type="submit"></button>--}}
{{--                                        </form>--}}
{{--                                    </td>--}}

{{--                            @endforeach--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
