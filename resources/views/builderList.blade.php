<table border="1">
    @foreach($data as $key => $value)
        <tr>
            <th>ID : </th>
            <td>{{ $value->id }}</td>
        </tr>
        <tr>
            <th>First Name : </th>
            <td>{{ $value->first_name }}</td>
        </tr>
        <tr>
            <th>Last Name : </th>
            <td>{{ $value->last_name }}</td>
        </tr>
    @endforeach
</table>
