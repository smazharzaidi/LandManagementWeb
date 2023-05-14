<!DOCTYPE html>
<html>

<head>
    <title>Delete Land Record</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Delete Land Record</h1>
        <div class="alert alert-danger">
            <p>Are you sure you want to delete Khasra {{ $land->khasra_number }} record?</p>
            <form method="post" action="{{ route('land.destroy', $land->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Yes, Delete it!</button>
                <a href="{{ route('land.index') }}" class="btn btn-secondary">No, Go Back!</a>
            </form>
        </div>
    </div>
</body>

</html>