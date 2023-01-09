<?php
    $error="";
    if(isset($_POST['submit']))
    {
        $uname = $_POST['uname'];
        $uuname = strtoupper($uname);
        $luname = strtolower($uname);
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $password = $_POST['pass'];
        $dob = $_POST['dob'];
        $city = $_POST['city'];
        
        
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'db_connect';
        $conn = mysqli_connect($host, $user, $pass, $dbname);
        
        if(!preg_match('/^[a-zA-Z]{5,}$/', $fname))
        {
            $error = "First name must contain charactors and minimum length is 5!!";
        }
        if(!preg_match('/^[a-zA-Z]{5,}$/', $lname))
        {
            $error = "Last name must contain charactors and minimum length is 5!!";
        }
        if (!strpos(strtoupper($password),$uuname))
        {
            $error = "Password should not contain user name!!";
        }
        if($error == "")
        {
            $sql = "INSERT INTO employee(uname, fname, lname, email, pass, dob, city) values('$uname', '$fname', '$lname', '$email', '$password', '$dob', '$city')";
            try{
                mysqli_query($conn,$sql);
            }
            catch(Exception $e){
                $error = "User olready exist!!";
            }
            // print_r($result);
        }
        

        

        // if($conn->query($sql)==TRUE){
        //     echo "Data inserted Sucessfully !!";
        // }
        // else{
        //     echo "Error!!";
        // }

        // $conn->close();

    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="desinephp.css">
    <title>Form using PHP</title>
</head>
<body>
    <div>
        <?php
            if($error)
            {
                echo $error;
            }
        ?>
    </div>
    <form action="#" method="POST" class="form" >
    
        <input type="text" name="uname" placeholder="Username" required>
        <input type="text" name="fname" placeholder="Firstname" required>
        <input type="text" name="lname" placeholder="Lastname" required>
        <input type="email" name="email"placeholder="Email"required>
        <input type="password" name="pass" placeholder="Password"required>
        <!-- <input type="password" name="pass" placeholder="Password"> -->
        <input type="date" name="dob" required>
      
        <select name="city" id="city">
            <option value="" selected disabled>Select City</option>
            <option value="visavadar">Visavadar</option>
            <option value="junagadh">Junagadh</option>
            <option value="ahmedabad">Ahmedabad</option>
            <option value="gandhinagar">Gandhinagar</option>
        </select>
        
        <input type="submit" value="Register" name="submit">
        
    </form>
    
    
</body>
</html>

<!-- htmp -> php -> database(sql) -->