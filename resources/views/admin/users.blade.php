@extends('components.layout')

@section('content')
    @include('components.navbar')
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4 my-5">
                <h2>Filters</h2>
                <form action="" method="get" class="py-4 ">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="text" name="email" class="form-control" placeholder="Enter Email To Search For" value="{{request('email')}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Enter Username To Search For" value="{{request('username')}}">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone To Search For" value="{{request('phone')}}">
                    </div>
                    <div class="mb-3">
                        <select class="form-select my-3 form-control" name="type">
                            <option selected value="">Choose Type</option>
                            <option value="admin" {{ request('type') === 'admin' ? 'selected' : '' }}>Admin</option>
                            <option value="client" {{ request('type') === 'client' ? 'selected' : '' }}>Client</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Filter" class="btn btn-success form-control">
                    </div>

                    <div class="mb-3">
                        <input type="reset" value="Reset Filters" class="btn btn-danger form-control reset-filters">
                    </div>

                </form>
            </div>
            <div class="col-12 col-lg-8">
                <table class="table table-striped table-hover my-5">
                    <thead>
                    <tr>
                        <td>Username</td>
                        <td>email</td>
                        <td>Type</td>
                        <td>Phone</td>
                        <td>Control</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        @foreach($users as $user)
                            <td>{{$user->username}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->type}}</td>
                            <td>{{$user->phone}}</td>
                            <td class="d-flex justify=content-between gap-2">
                                <a href="{{'notify-user/'.$user->id}}" class="btn btn-success">Notify</a>
                                <a href="{{"/delete-item?model_name=User&id=".$user->id}}" class="btn btn-danger">Delete</a>
                                <a href="{{'/user-pdf/'.$user->id}}" class="btn btn-secondary">Export Pdf</a>
                            </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection

@section('styling')
@endsection

@section('scripts')
    <script src="{{asset('js/users.js')}}"
@endsection
