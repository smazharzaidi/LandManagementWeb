<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Deletion</title>
</head>

<body>
    <h1>Are you sure you want to delete this seller?</h1>

    <h2>Seller Details</h2>
    <p><strong>CNIC:</strong> {{ $seller->cnic }}</p>
    <p><strong>Name:</strong> {{ $seller->name }}</p>
    <p><strong>Email:</strong> {{ $seller->email }}</p>
    <p><strong>Phone Number:</strong> {{ $seller->phone_number }}</p>
    <p><strong>Address:</strong> {{ $seller->address }}</p>
    <p><strong>User Type:</strong> {{ $seller->user_type }}</p>

    <form action="{{ route('seller.destroy', $seller->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>

</html>