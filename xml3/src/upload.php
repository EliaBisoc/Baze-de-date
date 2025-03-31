
<html>
    <head></head>
    <body>
        <div id="content">
        <form method="post" action="save.php" enctype="multipart/form-data">
        <div>
            ID: <input type="text" name="id">
        </div>
        <div>
            <input type="file" name="image">
        </div>
        <div>
            Title: <textarea name="title" cols="40" rows="4" placeholder="bla bla"></textarea>
        </div>
        <div>
            <input type="submit" name="upload" value="Upload Image">
        </div>
        </form>
    </div>
    </body>
</html>