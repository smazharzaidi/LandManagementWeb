<!DOCTYPE html>
<html lang="en">

<head>
     <style>
        table {
  display: grid;
  width: 100%;
  border-collapse: collapse;
}

thead {
  background-color: yellow;
  font-weight: bold;
}

th, td {
  padding: 8px;
  border: 1px solid #ccc;
}

tbody {
  display: contents;
}

tr {
  display: grid;
  grid-template-columns: repeat(9, 1fr);
  align-items: center;
}

td:nth-child(9) {
  display: flex;
  justify-content: center;
  gap: 5px;
}

.btn {
  padding: 6px 12px;
  border-radius: 3px;
  cursor: pointer;
}

.btn-primary {
  background-color: black;
  color: white;
  border: none;
}

.btn-danger {
  background-color: black;
  color: white;
  border: none;
}

.btn-primary:hover,
.btn-danger:hover {
  opacity: 0.8;
}

     </style>
</head>

<body>
    <h2 style="border:1px solid black;background-color:green; text-align:center;">Read User</h2>
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