@extends('Admin.master')
@section('style')
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/bootstrap-float-label.min.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/bootstrap-tagsinput.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/component-custom-switch.min.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/cropper.min.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('DoreJs/css/vendor/select2-bootstrap.min.css')}}">
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <h1>فهرست وضعیت ها  </h1>
            <nav class="breadcrumb-container d-none d-sm-block d-lg-inline-block" aria-label="breadcrumb">
                <ol class="breadcrumb pt-0">
                    <li class="breadcrumb-item active">فهرست</li>
                    <li class="breadcrumb-item" aria-current="page"><a href="{{route('status.create')}}">جدید</a>
                    </li>

                </ol>
            </nav>
            <div class="separator mb-5"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-body">
                    <table id="dataTable" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th style="white-space: pre">عنوان</th>
                            <th style="white-space: pre">وضعیت</th>
                            <th style="white-space: pre"> عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($statuses as $status)
                            <tr>
                                <td>{{$status->title}}</td>
                                <td>{{$isActive[$status->is_active]}}</td>
                                <td><a class='fa-edit mx-1 fa text-primary h4'
                                       href="{{route('status.edit',$status->id)}}"></a>
                                    {{--                                    <form class='d-inline-block remove-button'--}}
                                    {{--                                          action={{route('user.destroy',$user->id) }}   method='POST'>{{csrf_field()}} {{  method_field('DELETE')}}--}}
                                    {{--                                        <button class="fa-trash mx-1 border-0 bg-transparent fa text-danger h4"--}}
                                    {{--                                                style="cursor: pointer" type="submit"></button>--}}
                                    {{--                                    </form>--}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="{{asset('DoreJs/js/vendor/bootstrap-notify.min.js')}}"></script>
    <script src="{{asset('DoreJs/js/vendor/select2.full.js')}}"></script>
    <script src="{{asset('DoreJs/js/vendor/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('DoreJs/js/vendor/cropper.min.js')}}"></script>
    <script src="{{asset('DoreJs/js/vendor/typeahead.bundle.js')}}"></script>
@endsection
