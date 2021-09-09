<h1>Pagination Page</h1>
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Mobile</td>
    </tr>

    @foreach($students as $student)
        <tr>
            <td>{{ $student['std_id'] }}</td>
            <td>{{ $student['std_name'] }}</td>
            <td>{{ $student['std_city'] }}</td>
            <td>{{ $student['std_mobile'] }}</td>
        </tr>
    @endforeach
</table>

<div>{{ $students->links() }}</div>

<style>
    .w-5{
        /* display: none */
        height: 15px
    }
</style>
