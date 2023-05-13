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

        <td>
            <!-- Icon Button For Update -->
            <a class = "btn" style = "border: 1px solid;" href = "{{URL::to('seller/edit', $seller->cnic)}}">
            
            <!-- Icon Button For Delete -->
            <a class = "btn" style = "border: 1px solid;" href = "{{URL::to('seller/delete', $seller->cnic)}}">

        </td>
    </tr>
</tbody>