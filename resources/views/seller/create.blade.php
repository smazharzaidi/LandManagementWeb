<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: grid;
            place-items: center;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            height: 100vh;
        }

        .img-container {
            width: 100%;
            height: 200px;
            display: grid;
            place-items: center;
            background: url('https://images.pexels.com/photos/440731/pexels-photo-440731.jpeg?cs=srgb&dl=pexels-%C3%A1kos-szab%C3%B3-440731.jpg&fm=jpg') no-repeat center center;
            background-size: cover;
            background-position: center 75%;
        }

        h2 {
            text-align: center;
            padding: 10px;
            background-color: #388E3C;
            color: white;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        form {
            display: grid;
            gap: 10px;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            margin-bottom: 30px;
        }

        label {
            margin-top: 10px;
        }

        input[type="text"],
        input[type="password"],
        select {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        input[type="submit"] {
            margin-top: 5px;
            padding: 10px 20px;
            border: none;
            background-color: #388E3C;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: red;
        }
    </style>

</head>

<body>
<<<<<<< HEAD
    <h2 style="border:1px solid black;background-color:green; text-align:center;">Create User</h2>
=======
    <div class="img-container"></div>
    <h2 style="border:1px solid black;background-color:green; text-align:center;">Add User</h2>
>>>>>>> 67b846da7cc702f575a89c93f240f7b0c4557b5c
    @if (session('status'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('seller.store') }}" method="post">
        @csrf
        <label for="cnic">CNIC:</label>
        <input type="text" id="cnic" name="cnic" value="{{ old('cnic') }}">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">

        <label for="phone_number">Phone No:</label>
        <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}">

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ old('address') }}">

        <label for="user_type">User Type:</label>
        <select id="user_type" name="user_type">
            <option value="landowner" {{ old('user_type') == 'LandOwner' ? 'selected' : '' }}>Land Owner</option>
            <option value="patwari" {{ old('user_type') == 'Patwari' ? 'selected' : '' }}>Patwari</option>
        </select>

        <input type="submit" value="Add">
    </form>
</body>

</html>