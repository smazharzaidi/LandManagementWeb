<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Land</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
            display: flex;
            justify-content: center;
            align-items: center;
            background: url('https://images.pexels.com/photos/440731/pexels-photo-440731.jpeg?cs=srgb&dl=pexels-%C3%A1kos-szab%C3%B3-440731.jpg&fm=jpg') no-repeat center center;
            background-size: cover;
            background-position: center 75%;
        }

        .alert {
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #4CAF50;
            color: white;
        }

        .close {
            float: right;
            font-size: 20px;
            font-weight: bold;
            color: white;
            text-decoration: none;
        }

        .close:hover {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="img-container"></div>
    <h2>Create Land</h2>
    <form action="{{ route('grant-user-lands.store') }}" method="POST">
        @csrf
        <!-- Add form fields here -->
        <label for="grantor_id">Grantor:</label>
        <select name="grantor_id" id="grantor_id" required>
            <option value="">Select Grantor</option>
            @foreach($sellersWithLand as $seller)
            <option value="{{ $seller->id }}">{{ $seller->name }}</option>
            @endforeach
        </select>

        <label for="grantee_id">Grantee:</label>
        <select name="grantee_id" id="grantee_id" required>
            <option value="">Select Grantee</option>
            @foreach($grantees as $grantee)
            <option value="{{ $grantee->id }}">{{ $grantee->name }}</option>
            @endforeach
        </select>

        <label for="land_id">Land:</label>
        <select name="land_id" id="land_id" required>
            <option value="">Select Land</option>
            @foreach($lands as $land)
            <option value="{{ $land->id }}">{{ $land->khasra_number }}</option>
            @endforeach
        </select>

        <label for="contract_no">Contract Number:</label>
        <input type="text" id="contract_no" name="contract_no" required>

        <label for="duration">Duration: (years)</label>
        <input type="text" id="duration" name="duration" required>

        <input type="submit" value="Submit">
    </form>
</body>

</html>