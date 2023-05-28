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
    <h2>Add New Land</h2>
    @if (session('status'))
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status') }}
    </div>
    @endif

    <form action="{{ route('land.store') }}" method="post">
        @csrf
        <label for="tehsil">Tehsil:</label>
        <input type="text" id="tehsil" name="tehsil" value="{{ old('tehsil') }}">

        <label for="khasra_number">Khasra Number:</label>
        <input type="text" id="khasra_number" name="khasra_number" value="{{ old('khasra_number') }}">

        <label for="division">Division (if any):</label>
        <input type="text" id="division" name="division" value="{{ old('division') }}">

        <label for="patwari">Patwari Name:</label>
        <input type="text" id="patwari" name="patwari" value="{{ old('patwari') }}">
        <label for="seller_ids">Select Seller(s):</label>
        <select name="seller_ids[]" id="seller_ids" multiple>
            @foreach ($sellers as $seller)
            <option value="{{ $seller->id }}">{{ $seller->name }}</option>
            @endforeach
        </select>

        <label for="transaction_id">Transaction ID:</label>
        <input type="text" id="transaction_id" name="transaction_id" value="{{ old('transaction_id') }}">

        <label for="tax_amount">Tax Amount:</label>
        <input type="text" id="tax_amount" name="tax_amount" value="{{ old('tax_amount') }}">

        <input type="submit" value="Submit">
    </form>
</body>

</html>