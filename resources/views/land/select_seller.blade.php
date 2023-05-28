<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lands</title>
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

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 1000px;
            margin-bottom: 30px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #388E3C;
            color: white;
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
    <div class="img-container"></div>
    <h2>Lands</h2>
    <div class="container">
        @if(isset($message))
        <p>{{ $message }}</p>
        @else
        <table>
            <tr>
                <th>Tehsil</th>
                <th>Khasra Number</th>
                <th>Division</th>
                <th>Patwari</th>
            </tr>
            @foreach($lands as $land)
            <tr>
                <td>{{ $land->tehsil }}</td>
                <td>{{ $land->khasra_number }}</td>
                <td>{{ $land->division }}</td>
                <td>{{ $land->patwari }}</td>
            </tr>
            @endforeach
        </table>
        @endif

        <a href="{{ route('land.selectSellerForm') }}" class="btn-back">Go Back</a>
    </div>
</body>

</html>