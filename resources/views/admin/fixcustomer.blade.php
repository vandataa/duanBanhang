@extends('adminlayout.layout')
@section('content')
    <div class="row">
        <div class="panel mb-25" style="padding-bottom: 200px">
            <div class="panel-header">
                <h5>Edit profie</h5>
            </div>
            <div class="panel-body">
                <form class="row row-cols-lg-auto g-3 align-items-center" method="POST" action="{{route('customer.updateUser',$user->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label for="basicInput" class="form-label">Full name</label>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="inputWithIcon" class="form-label">Email</label>
                            <div class="input-group-with-icon">
                                <span class="input-icon">
                                    <i class="fa-light fa-envelope"></i>
                                </span>
                                <input disabled type="email" value="{{$user->email}}" class="form-control ps-0" id="inputWithIcon"
                                    placeholder="example@info.com">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="inputWithValue" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" value="{{$user->address}}" id="inputWithValue"
                                value="address">
                        </div>
                        <div class="col-sm-6">
                            <label for="inputPassword" class="form-label">Password</label>
                            <input type="password" disabled class="form-control" value="{{$user->password}}" id="inputPassword" value="password">
                        </div>
                        <div class="col-sm-6">
                            <label for="datalistExample" class="form-label">Role</label>
                            <div class="col-auto">
                                <label class="visually-hidden" for="autoSizingSelect">Preference</label>
                                <select class="form-select" id="autoSizingSelect">
                                    <option value=""></option>
                                    @foreach ($role as $role)
                                    @if ($user->role === $role->id)
                                    <option value="{{$role->id}}" selected>{{$role->nameRole}}</option>
                                    @else
                                    <option value="{{$role->id}}">{{$role->nameRole}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="formFile" class="form-label">Image</label>
                            <input class="form-control" type="file" name="image" id="formFile">
                        </div>
                        <div class="col-sm-6">
                            <label for="exampleTextarea" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleTextarea"></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </form>
            </div>

        </div>

    </div>
@endsection
