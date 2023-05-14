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

<html>

<body>
    <h2 style="border:1px solid black;background-color:DodgerBlue; text-align:center;">
        Update Seller Record
    </h2>

    <form action="{{ route('seller.update', $seller->cnic) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="cnic">CNIC: &nbsp;</label>
        <input type="text" id="cnic" name="cnic" value="{{ $seller->cnic }}"><br><br>

        <label for="name">Name: &nbsp;</label>
        <input type="text" id="name" name="name" value="{{ $seller->name }}"><br><br>

        <label for="email">Email: &nbsp;</label>
        <input type="text" id="email" name="email" value="{{ $seller->email }}"><br><br>

        <label for="email_verified_at">Email Verified At: &nbsp;</label>
        <input type="text" id="email_verified_at" name="email_verified_at" value="{{ $seller->email_verified_at }}"><br><br>

        <label for="password">Password: &nbsp;</label>
        <input type="text" id="password" name="password" value="{{ $seller->password }}"><br><br>

        <label for="phone_number">Phone No: &nbsp;</label>
        <input type="text" id="phone_number" name="phone_number" value="{{ $seller->phone_number }}"><br><br>

        <label for="address">Address: &nbsp;</label>
        <input type="text" id="address" name="address" value="{{ $seller->address }}"><br><br>

        <label for="user_type">User Type: &nbsp;</label>
        <select id="user_type" name="user_type">
            <option value="landowner" {{ old('user_type') == 'LandOwner' ? 'selected' : '' }}>Land Owner</option>
            <option value="patwari" {{ old('user_type') == 'Patwari' ? 'selected' : '' }}>Patwari</option>
        </select><br><br>


        <input type="submit" value="Update">

    </form>

</body>

</html>