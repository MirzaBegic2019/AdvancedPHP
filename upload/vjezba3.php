<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
<title>UPLOAD</title> 
</head> 

<body> 
    <form action="process3.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file[]" multiple required> 
        <br> 
        <input type="submit" value="Upload file"> 
    </form> 
</body> 

</html> 
