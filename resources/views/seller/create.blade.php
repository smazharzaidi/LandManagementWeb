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
    @endif
    <form action="{{ route('seller.store') }}" method="post">
        @csrf
        <label for="cnic">CNIC: &nbsp;</label>
        <input type="text" id="cnic" name="cnic" value="{{ old('cnic') }}"><br><br>

        <label for="name">Name: &nbsp;</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}"><br><br>

        <label for="email">Email: &nbsp;</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}"><br><br>

        <label for="password">Password: &nbsp;</label>
        <input type="password" id="password" name="password"><br><br>

        <label for="phone_number">Phone No: &nbsp;</label>
        <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}"><br><br>

        <label for="address">Address: &nbsp;</label>
        <input type="text" id="address" name="address" value="{{ old('address') }}"><br><br>


        <label for="user_type">User Type: &nbsp;</label>
        <select id="user_type" name="user_type">
            <option value="landowner" {{ old('user_type') == 'LandOwner' ? 'selected' : '' }}>Land Owner</option>
            <option value="patwari" {{ old('user_type') == 'Patwari' ? 'selected' : '' }}>Patwari</option>
        </select><br><br>

        <input type="submit" value="Create">
    </form>
</body>

</html>