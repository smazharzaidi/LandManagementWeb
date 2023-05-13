<html>
    
    <body>

    <h1>
    Update Seller Record
</h1>

<form action="{{ route ('seller.update', $sellers->cnic) }}" method = "post">
@csrf
    <label for = "cnic">CNIC: &nbsp;</label>
    <input type = "text" id = "cnic" name = "cnic" value = "{{ $sellers->cnic }}"><br><br>

    <label for = "name">Name: &nbsp;</label>
    <input type = "text" id = "name" name = "name" value = "{{ $sellers->name }}"><br><br>

    <label for = "email">Email: &nbsp;</label>
    <input type = "text" id = "email" name = "email" value = "{{ $sellers->email }}"><br><br>

    <label for = "email_verified_at">Email Verified At: &nbsp;</label>
    <input type = "text" id = "email_verified_at" name = "email_verified_at" value = "{{ $sellers->email_verified_at }}"><br><br>

    <label for = "password">Password: &nbsp;</label>
    <input type = "text" id = "password" name = "password" value = "{{ $sellers->password }}"><br><br>

    <label for = "phone_number">Phone No: &nbsp;</label>
    <input type = "text" id = "phone_number" name = "phone_number" value = "{{ $sellers->phone_number }}"><br><br>

    <label for = "address">Address: &nbsp;</label>
    <input type = "text" id = "address" name = "address" value = "{{ $sellers->address }}"><br><br>

    <label for = "user_type">User Type: &nbsp;</label>
    <input type = "text" id = "user_type" name = "user_type" value = "{{ $sellers->user_type }}"><br><br>

    <input type = "submit" value = "Update">

</form>
        
    </body>
</html>


     
