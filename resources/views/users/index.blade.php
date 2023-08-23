@extends('layouts.app')
@section('title')
    Users
@endsection
@section('content')
    <div class="row row-cards">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h3 class="card-title">Users</h3>
                    <a href="{{route('users.create')}}" class="btn ms-auto add-button">
                        Add
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table card-table table-vcenter text-nowrap datatable category-datatable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
{{--    <script src="{{ mix('assets/js/category/category.js') }}"></script>--}}
@endsection
