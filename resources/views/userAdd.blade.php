<h1>User Add</h1>
@if(session('fname'))
    <h3>Data saved for, {{ session('fname') }}</h3>
@endif
<form action="userStore" method="POST">
    @csrf
    <input type="text" name="fname" placeholder="Enter your name"> <br><br>
    <input type="password" name="password" placeholder="Enter your password"> <br><br>
    <input type="email" name="email" placeholder="Enter your email"> <br><br>
    <input type="submit" value="login">
</form>
