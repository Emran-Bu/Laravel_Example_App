<h1>User Login</h1>
<form action="user" method="POST">
    @csrf
    <input type="text" name="fname" placeholder="Enter your name"> <br><br>
    <input type="password" name="lpassword" placeholder="Enter your password"> <br><br>
    <input type="submit" value="login">
</form>
