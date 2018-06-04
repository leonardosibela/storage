<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Upload</title>
</head>
<body>
    <h1>Laravel Image Upload</h1>

    <form action="/image/upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" alt="image" name="image" id="image">
        <input type="submit" value="Upload">
    </form>



</body>
</html>