<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Seller Record</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: grid;
            place-items: center;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        h2 {
            text-align: center;
            padding: 10px;
            background-color: #388E3C;
            color: white;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .container {
            display: grid;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            margin-bottom: 30px;
        }

        .form-group {
            margin-top: 10px;
        }

        input[type="text"],
        select {
            margin-top: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        input[type="submit"] {
            margin-top: 10px;
            padding: 10px 20px;
            border: none;
            background-color: #388E3C;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2E7D32;
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
    </style>
</head>

<body>
    <div class="img-container"></div>
    <h2>Update Seller Record</h2>
    <div class="container">
        <form action="{{ route('seller.update', $seller->cnic) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="cnic">CNIC: </label>
            <div class="form-group">
                <input type="text" id="cnic" name="cnic" value="{{ $seller->cnic }}">
            </div>

            <label for="name">Name: </label>
            <div class="form-group">
                <input type="text" id="name" name="name" value="{{ $seller->name }}">
            </div>

            <label for="email">Email: </label>
            <div class="form-group">
                <input type="text" id="email" name="email" value="{{ $seller->email }}">
            </div>

            <label for="email_verified_at">Email Verified At: </label>
            <div class="form-group">
                <input type="text" id="email_verified_at" name="email_verified_at" value="{{ $seller->email_verified_at }}">
            </div>

            <label for="password">Password: </label>
            <div class="form-group">
                <input type="text" id="password" name="password" value="{{ $seller->password }}">
            </div>

            <label for="phone_number">Phone No: </label>
            <div class="form-group">
                <input type="text" id="phone_number" name="phone_number" value="{{ $seller->phone_number }}">
            </div>

            <label for="address">Address: </label>
            <div class="form-group">
                <input type="text" id="address" name="address" value="{{ $seller->address }}">
            </div>

            <label for="user_type">User Type: </label>
            <div class="form-group">
                <select id="user_type" name="user_type">
                    <option value="landowner" {{ old('user_type') == 'LandOwner' ? 'selected' : '' }}>Land Owner</option>
                    <option value="patwari" {{ old('user_type') == 'Patwari' ? 'selected' : '' }}>Patwari</option>
                </select>
            </div>

            <input type="submit" value="Update">
        </form>
    </div>
</body>

</html>