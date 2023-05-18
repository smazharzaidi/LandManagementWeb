<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Land Record</title>
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

        h1 {
            text-align: center;
            padding: 10px;
            background-color: #388E3C;
            color: white;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .container {
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

        .form-group {
            margin-top: 10px;
        }

        input[type="text"] {
            margin-top: 5px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        button[type="submit"] {
            margin-top: 10px;
            padding: 10px 20px;
            border: none;
            background-color: #388E3C;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #2E7D32;
        }

        button[type="button"] {
            margin-top: 10px;
            padding: 10px 20px;
            border: none;
            background-color: #6c757d;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="button"]:hover {
            background-color: #5a6268;
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
        <h1>Edit Land Record</h1>
        <!-- START -->
        @if (session('status'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session('status') }}
        </div>
        @endif
        <!-- END -->
        <form method="POST" action="{{ route('land.update', $land->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tehsil">Tehsil:</label>
                <input type="text" id="tehsil" name="tehsil" value="{{ $land->tehsil }}" required>
            </div>
            <div class="form-group">
                <label for="khasra_number">Khasra Number:</label>
                <input type="text" id="khasra_number" name="khasra_number" value="{{ $land->khasra_number }}" required>
            </div>
            <div class="form-group">
                <label for="division">Division:</label>
                <input type="text" id="division" name="division" value="{{ $land->division }}" required>
            </div>
            <div class="form-group">
                <label for="patwari">Patwari:</label>
                <input type="text" id="patwari" name="patwari" value="{{ $land->patwari }}" required>
            </div>
            <button type="submit">Update</button>
            <a href="{{ route('land.index') }}" class="btn btn-secondary">Go Back</a>
        </form>
    </div>
</body>

</html>