<!DOCTYPE html>
<html>

<head>
    <title>Delete Land Record</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
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

        h1 {
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
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        button.btn {
            margin-right: 10px;
        }

        /* Add your .img-container styles here */
        .img-container {
            width: 100%;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('https://images.pexels.com/photos/440731/pexels-photo-440731.jpeg?cs=srgb&dl=pexels-%C3%A1kos-szab%C3%B3-440731.jpg&fm=jpg') no-repeat center center;
            background-size: cover;
            background-position: center 75%;
        }

        /* Add custom styles for buttons */
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
        <h1>Delete Land Record</h1>
        <div class="alert">
            <p>Are you sure you want to delete Khasra {{ $land->khasra_number }} record?</p>
            <form method="post" action="{{ route('land.destroy', $land->id) }}">
                @csrf
                @method('DELETE')
                <div class="btn-container">
                    <button type="submit" class="btn btn-danger">Yes, Delete it!</button>
                    <a href="{{ route('land.index') }}" class="btn btn-secondary">No, Go Back!</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>