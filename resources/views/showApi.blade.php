<h1>Show Api Data</h1>

<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Profile Photo</th>
    </tr>
    @foreach($collection as $value)
        <tr>
            <td>{{ $value['id'] }}</td>
            <td>{{ $value['first_name'] }}</td>
            <td>{{ $value['email'] }}</td>
            <td><img src="{{ $value['avatar'] }}" alt="Img" /></td>
        </tr>
    @endforeach
</table>
