
<?php

// require_once(`.php file`) ----> we can connect another file like this
    $error = "";
    $conn = mysqli_connect("localhost", "root", "", "db_connect");
    $result = NULL;
    if(isset($_POST['submit']))
    {

        if(!$conn){
            die("Connection Error");
        }

        $mail = $_POST['email'];
        $password = $_POST['pass'];
        $query = "select * from employee where employee.email = '$mail' and employee.pass = '$password'";
        $result = mysqli_query($conn, $query);

        date_default_timezone_set("Asia/Calcutta");
    
    if($result-> num_rows != 0)
    {
        $query = "UPDATE `employee` SET `last_login`= '".date("Y-m-d H:i:s")."' where employee.email = '$mail' and employee.pass = '$password'";

        if(!mysqli_query($conn, $query))
        {
            echo "Time not updated!!";
        }
        
    }
    else
    {
        $error = "Invalid username or password";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="style" href="desinephp.css">
    <title>Fetch from database</title>
</head>
<body>
    <div>
        <?php
            echo $error;
        ?>
    </div>
    <form action="#" method="POST">
        Email: <input type="email" name="email"><br>
        Password: <input type="password" name="pass" placeholder="Enter password">
        <input type="submit" value="Submit" name="submit">
    </form>
    <table border = '1' style="<?php  if($result==NULL or $error) echo 'display:none;';?>">

        <tr>
           
            <th>UserName</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Password</th>
            <th>Date Of Birth</th>
            <th>City</th>
            <th>Last Login</th>
        </tr>
        <tr>
            <?php
                while($result and $row = mysqli_fetch_assoc($result)){
            ?>
           
            <td> <?php echo $row['uname'] ?> </td>
            <td> <?php echo $row['fname'] ?> </td>
            <td> <?php echo $row['lname'] ?> </td>
            <td> <?php echo $row['email'] ?> </td>
            <td> <?php echo $row['pass'] ?> </td>
            <td> <?php echo $row['dob'] ?> </td>
            <td> <?php echo $row['city'] ?> </td>
            <td> <?php echo $row['last_login'] ?> </td>
        </tr>
            <?php
                }
            ?>
    </table>
</body>
</html>
