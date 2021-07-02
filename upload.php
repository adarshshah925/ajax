<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_FILES['upload'])) {
        echo "adarsh";
        $allowed =array('image/pjpeg', 'image/JPG','image/X-PNG', 'image/PNG','image/png', 'image/x-png' );
        if(in_array($_FILES['upload']['type'], $allowed)){
            if(move_uploaded_file($_FILES['upload']['tmp_name'], "../uploads{$_FILES['upload']
                ['name']}")){
                    echo '<p><em>The file has been uploaded!</em></p>';
                }
        }
}
}
?>
    <form enctype="multipart/form-data" action="" method="post">
        <input type="hidden" name="MAX_FILE_SIZE" value="524288" />
        <fieldset>
            <legend>Select a JPEG
                or PNG image of 512KB or
                smaller to be uploaded:
            </legend>
            <p><b>File:</b> <input type="file" name="upload" /></p>
        </fieldset>
        <div><input type="submit" name="submit" value="Submit" /></div>
    </form>
</body>

</html>php_tut/uploads