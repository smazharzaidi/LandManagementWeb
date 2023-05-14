<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <h2 style="border:1px solid black;background-color:DodgerBlue; text-align:center;">Add User</h2>
    @if (session('status'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status') }}
    </div>

        <tr>
            <th>CNIC</th>
            <th>Name</th>
            <th>Email</th>
            <th>Email Verified At</th>
            <th>Password</th>
            <th>Phone No</th>
            <th>Address</th>
            <th>User Type</th>
        </tr>

        @foreach ($sellers ?? '' as $seller)
        <tr>
            <td>{{$seller->cnic}}</td>
            <td>{{$seller->name}}</td>
            <td>{{$seller->email}}</td>
            <td>{{$seller->email_verified_at}}</td>
            <td>{{$seller->password}}</td>
            <td>{{$seller->phone_number}}</td>
            <td>{{$seller->address}}</td>
            <td>{{$seller->user_type}}</td>
        </tr>

    @endif
    <form action="{{ route ('student.store') }}" method="post">
       @csrf
       <label for = "cnic">CNIC: &nbsp;</label>
    <input type = "text" id = "cnic" name = "cnic" value = "{{ $sellers->cnic }}"><br><br>

    <label for = "name">Name: &nbsp;</label>
    <input type = "text" id = "name" name = "name" value = "{{ $sellers->name }}"><br><br>

    <label for = "email">Email: &nbsp;</label>
    <input type = "text" id = "email" name = "email" value = "{{ $sellers->email }}"><br><br>

    <label for = "email_verified_at">Email Verified At: &nbsp;</label>
    <input type = "text" id = "email_verified_at" name = "email_verified_at" value = "{{ $sellers->email_verified_at }}"><br><br>

    <label for = "password">Password: &nbsp;</label>
    <input type = "text" id = "password" name = "password" value = "{{ $sellers->password }}"><br><br>

    <label for = "phone_number">Phone No: &nbsp;</label>
    <input type = "text" id = "phone_number" name = "phone_number" value = "{{ $sellers->phone_number }}"><br><br>

    <label for = "address">Address: &nbsp;</label>
    <input type = "text" id = "address" name = "address" value = "{{ $sellers->address }}"><br><br>

    <label for = "user_type">User Type: &nbsp;</label>
    <input type = "text" id = "user_type" name = "user_type" value = "{{ $sellers->user_type }}"><br><br>

    <input type = "submit" value = "Update">
     
    </form>
</body>

</html>