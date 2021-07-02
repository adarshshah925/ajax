<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction To String</title>
</head>
<body>
    <?php 
       // assigning string to a variable
        $f_name="adarsh";
        $l_name="shah";
        
        // Concatinating two string
        // dot(.) opereator is used to concatinate two string
         echo $f_name . $l_name;

         // for space between two string
         echo $f_name." ".$l_name;

         $name =$f_name;
         $name.=$l_name;


         echo "<br>".$name;
        
?>
</body>
</html>