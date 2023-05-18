<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Land</title>
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

        h2 {
            text-align: center;
            padding: 10px;
            background-color: #388E3C;
            color: white;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
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

        input[type="text"] {
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
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('https://images.pexels.com/photos/440731/pexels-photo-440731.jpeg?cs=srgb&dl=pexels-%C3%A1kos-szab%C3%B3-440731.jpg&fm=jpg') no-repeat center center;
            background-size: cover;
            background-position: center 75%;
        }
    </style>
</head>

<body>
    <div class="img-container">
    </div>
    <h2>Add New Land</h2>
    <!-- START -->
    @if (session('status'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status') }}
    </div>
    @endif
    <!-- END -->
    <form action="{{ route ('land.store') }}" method="post">
        @csrf
        <label for="tehsil">Tehsil:</label>
        <input type="text" id="tehsil" name="tehsil" value=""><br>
        <label for="khasra_number">Khasra Number:</label>
        <input type="text" id="khasra_number" name="khasra_number" value=""><br>
        <label for="division">Division (if any):</label>
        <input type="text" id="division" name="division" value=""><br>
        <label for="patwari">Patwari Name:</label>
        <input type="text" id="patwari" name="patwari" value=""><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>