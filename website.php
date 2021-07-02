
    <?php include('header.php'); ?>
    <nav id="navbar">
        <ul>
            <li><a href="#">Home Page</a></li>
            <li><a href="#">Number</a></li>
            <li><a href="#">Form</a></li>
            <li><a href="#">string</a></li>
            <li><a href="#">array</a></li>
        </ul>
    </nav>
    <h1 class="main_haed">Trip Cost Calculator</h1>
    <form action=" " method="post">
        <p>Distance (in miles): <input type="text" name="distance" /></p>
        <p>Ave. Price Per Gallon: <span class="input">
                <input type="radio" name="gallon_price" value="3.00" required="required" /> 3.00
                <input type="radio" name="gallon_price" value="3.50" required="required" /> 3.50
                <input type="radio" name="gallon_price" value="4.00" required="required"/> 4.00
            </span></p>
        <p>Fuel Efficiency: <select name="efficiency">
                <option value="10">Terrible</option>
                <option value="20">Decent</option>
                <option value="30">Very Good</option>
                <option value="50">Outstanding</option>
            </select></p>
        <p><input type="submit" name="submit" value="Calculate!" /></p>
    </form>
    <div id="content">
        <h1>Content Header</h1>
        <p>This is where the page-specific content goes. This section, and the
            corresponding header, will change from one page to the next.</p>

        <p>Volutpat at varius sed sollicitudin et, arcu. Vivamus viverra. Nullam turpis.
            Vestibulum sed etiam. Lorem ipsum sit amet dolore. Nulla facilisi. Sed tortor. Aenean felis.
            Quisque eros. Cras lobortis commodo metus. Vestibulum vel purus. In eget odio in sapien
            adipiscing blandit. Quisque augue tortor, facilisis sit amet, aliquam, suscipit vitae, cursus
            sed, arcu lorem ipsum dolor sit amet.</p>
    </div>



 
    <?php include('footer.php'); ?>

    <?php 
     if($_SERVER['REQUEST_METHOD']=='POST'){
        if (isset($_POST['submit'],
            $_POST['gallon_price'],
            $_POST['efficiency']) &&
            is_numeric($_POST['distance'])
            && is_numeric($_POST['gallon_price']) && is_numeric($_POST['efficiency']) ) {
                $gallons = $_POST['distance'] /
                $_POST['efficiency'];
                $dollars = $gallons *
                $_POST['gallon_price'];
                $hours = $_POST['distance']/65;

                echo '<h1>Total Estimated Cost</h1>
                <p>The total cost of driving '
                 . $_POST['distance'] . ' miles,
                 averaging ' . $_POST
                 ['efficiency'] . ' miles per
                 gallon, and paying an average
                 of $' . $_POST['gallon_price']
                 . ' per gallon, is $' .
                 number_format ($dollars, 2) .
                '. If you drive at an average
                 of 65 miles per hour, the
                 trip will take approximately
                ' . number_format($hours, 2)
                 . ' hours.</p>';
                }
                else { // Invalid submitted
                     echo '<h1>Error!</h1>
                     <p class="error">Please enter
                      a valid distance, price
                      per gallon, and fuel
                      efficiency.</p>';
                   }
            }
    ?>