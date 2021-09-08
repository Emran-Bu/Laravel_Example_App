<h1>Laravel Form</h1>
<form action="form" method="post">
    @csrf
    <input type="text" name="id" placeholder="Ener your id"><br><br>
    <input type="password" name="pass" placeholder="Ener your password"><br><br>
    <input type="submit" name="login">
</form>
