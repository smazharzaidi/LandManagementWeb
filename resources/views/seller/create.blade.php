<!DOCTYPE html>
<html lang="en">

<head>
<style>
    body {
        margin: 0;
        padding: 0;
        display: grid;  
        place-items: center;  
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        height: 100vh;  
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
        display: grid;  
        grid-template-columns: 1fr;  
        gap: 0px;  
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
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 100%;
    }

    input[type="submit"] {
        margin-top: 5px;
        padding: 10px 20px;
        border: none;
        background-color: #388E3C;
        color: white;
        border-radius: 5px;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: ;
    }


</style>

</head>

<body>
    <h2 style="border:1px solid black;background-color:green; text-align:center;">Add User</h2>
    @if (session('status'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{ session('status') }}
    </div>
    @endif
    <form action="{{ route('seller.store') }}" method="post">
        @csrf
        <label for="cnic">CNIC: &nbsp;</label>
        <input type="text" id="cnic" name="cnic" value="{{ old('cnic') }}"><br><br>

        <label for="name">Name: &nbsp;</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}"><br><br>

        <label for="email">Email: &nbsp;</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}"><br><br>

        <label for="password">Password: &nbsp;</label>
        <input type="password" id="password" name="password"><br><br>

        <label for="phone_number">Phone No: &nbsp;</label>
        <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number') }}"><br><br>

        <label for="address">Address: &nbsp;</label>
        <input type="text" id="address" name="address" value="{{ old('address') }}"><br><br>


        <label for="user_type">User Type: &nbsp;</label>
        <select id="user_type" name="user_type">
            <option value="landowner" {{ old('user_type') == 'LandOwner' ? 'selected' : '' }}>Land Owner</option>
            <option value="patwari" {{ old('user_type') == 'Patwari' ? 'selected' : '' }}>Patwari</option>
        </select><br><br>

        <input type="submit" value="Create">
    </form>
</body>

</html>