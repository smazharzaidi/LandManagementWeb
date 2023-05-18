<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create City</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">
        Add New City
    </h2>
    <!-- For Redirecting With Flashed Session Data when 'Submit' button -->
    <!-- is pressed in the 'create.blade.php' view which calls the relevant -->
    <!-- function 'store' in the StudentController and then this -->
    <!-- view, 'create.blade.php' is again called -->
    <!-- START -->
    @if (session('status'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status') }}
    </div>
    @endif
    <!-- END -->
    <form action="{{ route('city.store') }}" method="post">
        @csrf
        <label for="name">City Name: &nbsp;</label>
        <input type="text" id="name" name="name" value="City"><br><br>
        <label for="province">Province: &nbsp;</label>
        <select id="province" name="province">
            <option value="ICT">ICT</option>
            <option value="KPK">KPK</option>
            <option value="Punjab">Punjab</option>
            <option value="Balochistan">Balochistan</option>
            <option value="Sindh">Sindh</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>
