<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Land</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <h2 style="border: 1px solid black; background-color:DodgerBlue; text-align:center;">
        Add New Student
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
    <form action="{{ route ('student.store') }}" method="post">
        @csrf
        <label for="tehsil">Tehsil: &nbsp;</label>
        <input type="text" id="tehsil" name="tehsil" value="Bhutesar"><br><br>
        <label for="khasra_number">Khasra Number: &nbsp;</label>
        <input type="text" id="khasra_number" name="khasra_number" value="1"><br><br>
        <label for="division">Division: (if any)&nbsp;</label>
        <input type="text" id="division" name="division" value="(a)"><br><br>
        <label for="patwari">Patwari Name: &nbsp;</label>
        <input type="text" id="patwari" name="patwari" value="Kashif Abbas"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>

</html>