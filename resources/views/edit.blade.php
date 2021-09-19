<h1>Update Student</h1>
<form action="{{ url('edit') }}" method="post">
    @csrf
    {{-- @method('put') --}}
    <input type="hidden" name="id" value={{ $data->id }} readonly><br><br>
    <input type="text" name="f_name" value="{{ $data['first_name'] }}" id=""><br><br>
    <input type="text" name="l_name" value="{{ $data['last_name'] }}" id=""><br><br>
    <input type="submit" name="update" value="update" id="">
</form>
