<h1>Show form data</h1>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>City</td>
        <td>Mobile</td>
    </tr>
    @foreach($showData as $key => $showDatas)
        <tr>
            <td>{{ $showDatas['std_id'] }}</td>
            <td>{{ $showDatas['std_name'] }}</td>
            <td>{{ $showDatas['std_city'] }}</td>
            <td>{{ $showDatas['std_mobile'] }}</td>
        </tr>
    @endforeach

</table>

<div>{{ $showData->links() }}</div>
