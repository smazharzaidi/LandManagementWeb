<!DOCTYPE html>
<html>

<head>
    <title>Edit Land Record</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
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
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('land.index') }}" class="btn btn-default">Cancel</a>
        </form>
    </div>
</body>

</html>