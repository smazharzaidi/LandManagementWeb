<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lands List</title>
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

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            table-layout: fixed;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            vertical-align: middle;
            word-wrap: break-word;
        }

        th {
            background-color: #388E3C;
            color: white;
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

        .container form {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
            width: 100%;
            max-width: 800px;
        }

        .container form button {
            padding: 10px 20px;
            border: none;
            background-color: #388E3C;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .container form button:hover {
            background-color: #2E7D32;
        }

        .container form .action-buttons {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            height: 100%;
        }

        .container form .action-buttons button {
            padding: 10px 20px;
            border: none;
            background-color: #388E3C;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .container form .action-buttons button:hover {
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

        .action-buttons form {
            display: inline-block;
            float: left;
            margin-right: 10px;
        }

        .action-buttons {
            margin-top: -8px;
            margin-left: 12px;
            display: inline-flex;
            justify-content: space-between;
        }
    </style>
</head>

<body>
    <div class="img-container"></div>
    <h2>Lands List</h2>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Tehsil</th>
                    <th>Khasra Number</th>
                    <th>Division</th>
                    <th>Patwari</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($lands as $land)
                <tr>
                    <td>{{ $land->tehsil }}</td>
                    <td>{{ $land->khasra_number }}</td>
                    <td>{{ $land->division }}</td>
                    <td>{{ $land->patwari }}</td>
                    <td>
                        <div class="action-buttons">
                            <form action="{{ route('land.confirmDelete', $land->id) }}" method="GET" class="delete-form">
                                @csrf
                                <button type="submit">Delete</button>
                            </form>
                            <form action="{{ route('land.edit', $land->id) }}" method="GET" class="edit-form">
                                <button type="submit">Edit</button>
                            </form>
                        </div>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>