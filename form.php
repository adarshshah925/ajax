<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
/*html form styling start here*/

.container{
    max-width: 1200px;
    margin: 0 auto;
}
.test-form{
    padding: 2rem;
}

.btn{
    display: block;
}
</style>
<?php
 include ('config.php');
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit'])) {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $message = $_REQUEST['message'];
        $gender=$_REQUEST['gender'];

        /*$name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $gender=$_POST['gender'];
        */
       
        if (($name||$email|| $gender|| $message)==""){
           $msg= '<div>Please Fill All details </div>';
           
        }
        else $sql = "INSERT INTO users (name,email,gender,msg) VALUES ('$name','$email','$gender','$message')";
        if (mysqli_query($conn,$sql)) {
            echo "New record created successfully";
            
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
        }
        }
        //fetching all  data from users table in a table

        $sql="select * from users";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            echo '<table>
            <thead>
            <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Message</th>
            <tr>
            </thead>
            <tbody>';
            while($row=$result->fetch_assoc()){
                echo '<tr> 
                <th>'.$row['name'].'</th>
                <th>'.$row['email'].'</th>
                <th>'.$row['gender'].'</th>
                <th>'.$row['msg'].'</th>
                </tr>';
            }
            echo '</body>
            
            </table>';
        }
?>
<body>
<!-- REATING HTML USER REGISTRATION FORM Start Here -->
    <div class="test-form">
        <div class="container">
            <form action=" " method="post">
                <fieldset>
                    <legend>Enter your information in the form below</legend>
                    <label for="name"> Name:
                        <input type="text" name="name" id="name" placeholder="Enter Name">
                    </label><br>
                    <label for="email">Email:
                        <input type="email" name="email" id="email" placeholder="Enter Emaail">
                    </label><br>
                    <label for="gender">Gender</label>
                    <input type="radio" name="gender" value="M" required="required">Male
                    <input type="radio" name="gender" value="FM" required="required">Female<br>
                    <label for="message">
                        <textarea name="message" id="message" cols="30" rows="10" placeholder="Tell me something about yourself"></textarea>
                    </label>
                    <input type="submit" value="submit" name="submit" class="btn">

                    <input type="text" name="id" value="<?php echo $row['user_id'];?>">
                </fieldset>
            </form>
        </div>
    </div>
     <?php if(isset($msg)) echo $msg ?>

    <!--CREATING HTML USER REGISTRATION FORM ENd Here -->
</body>

</html>