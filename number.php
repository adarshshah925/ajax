<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction To Number</title>
</head>

<body>
    <?php $n = 3.1415565654;
    //$n=round($n); // round it to nearest integer
    $n = round($n, 2); // round it to specific number of decimal point.
    echo $n;

    // 1st mathematical operation on number

    $quantity = 30;
    $price = 119.95;
    $taxrate = 0.5;

    $total = $quantity * $price;
    echo '<br>';
    echo $total;

    //2nd mathematical operation on number
     $total= $total+($total*$taxrate);
     $total=round($total, 2);
     echo '<br>';
     echo $total;

     echo '<p>You are purchasing <b>'.$quantity.'</b> widget at a cost of <b>$'.$price.'</b> each with tax <b>$'.$taxrate.'</b>the total comes to <b>$'.$total. '</b></p>';

  //Defining constants 
  define('pi', 3.14);
  echo pi;
  echo "<p>You are purchasing
<b>$quantity</b> widget(s) at a cost of <b>\$$price</b> each.
With tax, the total comes to <b>\$$total</b>.</p>\n";



echo '<h3>Using single quotation
marks:</h3>';
echo '<p>You are purchasing
<b>$quantity</b> widget(s) at a cost
of <b>\$$price</b> each. With tax,
the total comes to <b>\$$total</b>.
</p>\n';


    ?>
</body>

</html>