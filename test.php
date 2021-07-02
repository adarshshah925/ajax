<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction To PHP</title>
</head>
<body>
    <?php echo '<p>she said,<b>"How are you?"</b></p>';
    // this is for testing purpose
    /* long comment */
    ?>
    

    <?php $a="adarsh";
    print "hello, $a";
    echo "hello ".$a ; ?>

    <?php  // predefined variable 
    //$_SERVER['SCRIPT_FILENAME] this variable store the full path and name of the script run being run
       $file = $_SERVER['SCRIPT_FILENAME'];
       echo $file;
      
       $server=$_SERVER['HTTP_USER_AGENT'];
       $user=$_SERVER['SERVER_SOFTWARE'];
       echo '<br>' .$server.$user;
    ?>
    <section></section>
</body>
</html>