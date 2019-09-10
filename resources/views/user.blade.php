<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us</title>
</head>
<body>
    <div class="container">
        <form action="users" method="post">
            <div class="input-group">
                <div class="row">
                    <label>User Name</label> <input type="text" name="username">
                </div>
                <div class="row">
                    <label>First Name</label> <input type="text" name="firstname">
                </div>
                <div class="row">
                    <label>Last Name</label> <input type="text" name="lastname">
                </div>
                <div class="row">
                    <label>Email Address</label> <input type="email" name="email">
                </div>
                <div class="row">
                    <label>Password</label> <input type="password" name="password">
                </div>
                <div class="row">
                    <label>Mobile Number</label> <input type="text" name="mobile">
                </div>
                <div class="row">
                    <label>Date Of Birth</label> <input type="date" name="dob">
                </div>
                <div class="row">
                    <label>Gender</label> <input type="text" name="gender">
                </div>
                @csrf
            </div>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>

    <h1>List Of Users</h1>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</body>
</html>
