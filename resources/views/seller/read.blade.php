<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <h2 style="border:1px solid black;background-color:DodgerBlue; text-align:center;">Read User</h2>
    @if (session('status'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status') }}
    </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>CNIC</th>
                <th>Name</th>
                <th>Email</th>
                <th>Email Verified At</th>
                <th>Password</th>
                <th>Phone No</th>
                <th>Address</th>
                <th>User Type</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sellers as $seller)
            <tr>
                <td>{{$seller->cnic}}</td>
                <td>{{$seller->name}}</td>
                <td>{{$seller->email}}</td>
                <td>{{$seller->email_verified_at}}</td>
                <td>{{$seller->password}}</td>
                <td>{{$seller->phone_number}}</td>
                <td>{{$seller->address}}</td>
                <td>{{$seller->user_type}}</td>
                <td>
                    <!-- Icon Button For Update -->
                    <a class="btn btn-primary" href="{{ route('seller.edit', $seller->id) }}">Edit</a>
                    <!-- Icon Button For Delete -->
                    <a class="btn btn-danger" href="{{ route('seller.confirmDelete', $seller->id) }}">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>