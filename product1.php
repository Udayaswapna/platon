<!DOCTYPE html>
<html lang="en">
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Name: <input type="text" name="Name" placeholder="Name" required /><br>
        <br>
        price: <input type="text" name="price" placeholder="price" required /><br>
        <br>
                            
        Select image to upload:
        <input type="file" name="image"/>
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>
</body>
</html>