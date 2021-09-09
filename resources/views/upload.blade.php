<h1>Upload File</h1>
<form action="upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" id="file"><br><br>
    <input type="submit" name="upload" id="upload" value="Upload">
</form>
