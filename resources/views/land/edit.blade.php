<!DOCTYPE html>
<html>

<head>
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
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 20px;
        }

        button.btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-family: Arial, sans-serif;
            font-size: 14px;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: #0069d9;
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
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <form method="POST" action="{{ route('land.update', $land->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tehsil">Tehsil:</label>
                <input type="text" class="form-control" id="tehsil" name="tehsil" value="{{ $land->tehsil }}" required>
            </div>
            <div class="form-group">
                <label for="khasra_number">Khasra Number:</label>
                <input type="text" class="form-control" id="khasra_number" name="khasra_number" value="{{ $land->khasra_number }}" required>
            </div>
            <div class="form-group">
                <label for="division">Division:</label>
                <input type="text" class="form-control" id="division" name="division" value="{{ $land->division }}" required>
            </div>
            <div class="form-group">
                <label for="patwari">Patwari:</label>
                <input type="text" class="form-control" id="patwari" name="patwari" value="{{ $land->patwari }}" required>
            </div>
            <div class="btn-container">
                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{ route('land.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>