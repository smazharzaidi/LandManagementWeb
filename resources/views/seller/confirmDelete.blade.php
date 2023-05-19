<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Deletion</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: grid;
            place-items: center;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 500px;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        h2 {
            text-align: center;
            padding: 10px;
            background-color: #388E3C;
            color: white;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert {
            background-color: #f8d7da;
            color: #721c24;
            border-color: #f5c6cb;
            padding: 10px;
            border-radius: 5px;
        }

        form {
            display: grid;
            place-items: center;
            margin-top: 20px;
        }

        .btn-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            place-items: center;
            margin-top: 10px;
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

        .btn-danger {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-family: Arial, sans-serif;
            font-size: 14px;
            text-decoration: none;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }
    </style>
</head>

<body>
    <div class="img-container"></div>
    <div class="container">
        <h2>Delete Seller</h2>
        <div class="alert">
            <p>Are you sure you want to delete this seller?</p>

            <p><strong>CNIC:</strong> {{ $seller->cnic }}</p>
            <p><strong>Name:</strong> {{ $seller->name }}</p>
            <p><strong>Email:</strong> {{ $seller->email }}</p>
            <p><strong>Phone Number:</strong> {{ $seller->phone_number }}</p>
            <p><strong>Address:</strong> {{ $seller->address }}</p>
            <p><strong>User Type:</strong> {{ $seller->user_type }}</p>

            <form action="{{ route('seller.destroy', $seller->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <div class="btn-container">
                    <input type="submit" class="btn btn-danger" value="Yes, Delete it!">
                    <a href="{{ route('seller.read') }}" class="btn btn-secondary">No, Go Back!</a>

                </div>
            </form>
        </div>
    </div>
</body>

</html>