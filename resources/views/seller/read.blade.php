<table>
    <thead>
        <tr>
            <th>CNIC</th>
            <th>Name</th>
            <th>Email</th>
            <th>Email Verified At</th>
            <th>Password</th>
            <th>Phone No</th>
            <th>Address</th>
            <th>User Type</th>
        </tr>
    </thead>
</table>
<tbody>
    <p id="forDeleteCode"></p>
    <!-- Using Blade Loop. -->
    @foreach ($sellers ?? '' as $seller)
    <tr>
        <td>{{$seller->cnic}}</td>
        <td>{{$seller->name}}</td>
        <td>{{$seller->email}}</td>
        <td>{{$seller->email_verified_at}}</td>
        <td>{{$seller->password}}</td>
        <td>{{$seller->phone_number}}</td>
        <td>{{$seller->address}}</td>
        <td>{{$seller->user_type}}</td>
    </tr>
</tbody>