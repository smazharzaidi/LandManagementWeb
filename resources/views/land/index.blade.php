<!DOCTYPE html>
<html>

<head>
    <title>Lands List</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Lands List</h1>
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
                        <form action="{{ route('land.destroy', $land->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <form action="{{ route('land.edit', $land->id) }}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>