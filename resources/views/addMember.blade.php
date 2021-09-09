<h1>Add Member</h1>
@if(session('fname'))
<h3>Data saved for, {{ session('fname') }}</h3>
@endif
<form action="add" method="POST">
    @csrf
    <input type="text" name="fname" placeholder="Enter your name"> <br><br>
    <input type="text" name="city" placeholder="Enter your city"> <br><br>
    <input type="number" name="number" placeholder="Enter your number"> <br><br>
    <input type="submit" value="Save Data">
</form>
