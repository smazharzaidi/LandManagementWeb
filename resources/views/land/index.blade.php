<!DOCTYPE html>
<html>

<head>
    <title>Lands List</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Lands List</h1>
        <table class="table">
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
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>