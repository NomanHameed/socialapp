@extends('layout')

@section('content')
        <form action="users" method="post">
                <div class="form-group">
                    <label>User Name</label>
                    <input class="form-control" type="text" name="username">
                    <label>First Name</label>
                    <input class="form-control" type="text" name="firstname">
                    <label>Last Name</label>
                    <input type="text" name="lastname" class="form-control">
                    <label>Email Address</label>
                    <input type="email" name="email" class="form-control">
                    <label>Password</label><input type="password" name="password" class="form-control">
                    <label>Mobile Number</label>
                    <input type="text" name="mobile" class="form-control">
                    <label>Date Of Birth</label>
                    <input type="date" name="dob" class="form-control">
                    <label>Gender</label>
                    <input type="text" name="gender" class="form-control">
                </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" class="form-control">
            </div>
            @csrf
        </form>
    </div>

    <h1>List Of Users</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>


@endsection
