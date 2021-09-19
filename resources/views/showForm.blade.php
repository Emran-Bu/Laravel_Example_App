<h1>Show form data</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td>Action</td>
    </tr>
    @foreach($showData as $showDatas)
        <tr>
            <td>{{ $showDatas['id'] }}</td>
            <td>{{ $showDatas['first_name'] }}</td>
            <td>{{ $showDatas['last_name'] }}</td>
            <td>
                <a href={{ "delete/".$showDatas['id'] }}>Delete</a>
                <a href={{ "edit/".$showDatas['id'] }}>Edit</a>
            </td>
        </tr>
    @endforeach

</table>

<div>{{ $showData->links() }}</div>
