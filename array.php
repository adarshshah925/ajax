<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Indexed Array-->
    <?php $array[] = "adarsh";
    $array[] = "kumar";
    $array[] = "shah";

    /*Accessing Indexed Array*/
    echo $array[0] . '<br>a';
    /*Accessing array by sing for loop*/
    foreach ($array as $value) {
        echo "$value.<br>";
    }
    ?>

    <!-- associative Array -->
    <?php $ada['fname'] = "adarsh";
    $ada['mname'] = "Kuamr";
    $ada['lname'] = "Shah";


    foreach ($ada as $key => $value) {
        echo " $key<br>";
        echo "the value at $key is $value<br>";
    }


    /*accessing associative Array */
    echo $ada['lname'];
    ?>

    <!-- creaing array by using array function-->
    <?php $a = array('sun', 'mon', 'tue');
    echo $a[1];
    $ten = range(1, 10);
    $ten = "adarsh";
    $ten = "kumar";
    ?>

    <!--Creating claender pull down menus for calender by using array-->
    <form action="">

        <?php
        $months = array(
            1 => 'January',
            'February', 'March', 'April', 'May',
            'June', 'July', 'August', 'September',
            'October', 'November', 'December'
        );

        $days = range(1, 31);
        $years = range(2011, 2021);

        echo '<select name="month">';
        foreach ($months as $key =>
            $value) {
            echo "<option value=\"$key\">
            $value</option>\n";
        }
        echo '</select>';
        echo '<select name="day">';
        foreach ($days as $value) {
            echo "<option value='$value'>
            $value</option>\n";
        }
        echo '</select>';
        echo '<select name="year">';
        foreach ($years as $value) {
            echo "<option value=\"$value\">
            $value</option>\n";
        }
        echo '</select>';

        ?>
    </form>
<!--multiple dimansion array start here -->

<?php $primes =array(2,3,5,7);
     
      $sphenic = array(30,42,66,70);
      $numbers=array('primes'=>$primes, 'sphenic'=>$sphenic);
      // accessing array 
      echo "{$numbers['primes'][3]}";
?>

<!-- using multidimensional array -->

<?php
 // creating first array
 $india=array(
     'Dil'=>'Delhi',
     'UP'=>'Utter Pradesh',
     'CH'=>'chennai',
     'kol'=>'kolkata'

 );

 $usa=array('MD'=>'MarryLand',
 'IL'=>'sland',
 'Gl'=>'greenland',
 'gr'=>'germany'
);

$canada = array (
    	 'QC' => 'Quebec',
    	 'AB' => 'Alberta',
    	 'NT' => 'Northwest Territories',
    	 'YT' => 'Yukon',
	 'PE' => 'Prince Edward Island'
	 );

     $country=array('India'=>$india, 'usa'=>$usa, 'canada'=>$canada);

     foreach($country as $city=>$list){
         echo "$city<br>";
         //print heading states
         echo "<h1>State</h1><ul>";
         foreach($list as $k=>$v){
             echo "<li>$k - $v</li>\n";
         }
         echo '</ul>';

     }

?>


<!-- converting String to array-->

<?php $s1="mon-tue-wed-thu-fri-sat";
 $days=explode("-",$s1);
sort($days);
 foreach($days as $values){
     echo "$values<br>";
 }
 echo "<br>";
 $movies = array (
 'Casablanca' => 10,
 'To Kill a Mockingbird' => 10,
 'The English Patient' => 2,
 'Stranger Than Fiction' => 9,
 'Story of the Weeping Camel' => 5,
 'Donnie Darko' => 7);
arsort($movies);

foreach($movies as $values){
    echo "$values<br>";
}
?>



</body>

</html>