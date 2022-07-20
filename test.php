<?php
session_start();
$username=$password=$phonenumber="";
$usernameErr=$passwordErr=$phonenumberErr="";
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//check input data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(empty($_POST["username"])){
        $usernameErr=" User name is required";
    } else{
        $username=test_input($_POST["username"]);
    }

    if(empty($_POST["password"])){
        $passwordErr=" Password is required";
    } else{
        $password=test_input($_POST["password"]);
    }

    if(empty($_POST["phonenumber"])){
        $phonenumberErr=" Phone number is required";
    } else{
        $phonenumber=test_input($_POST["phonenumber"]);
    }
}

//connect db
if($_SERVER["REQUEST_METHOD"]=="POST" && $usernameErr=="" && $passwordErr=="" && $phonenumberErr=="") {
    $host = "localhost:3306";
    $dbusername = "hung";
    $dbpassword = "123456";
    $dbname = "test2";
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("connection failed: " . $conn->connect_error);
    }
    echo "Connection to database it successful !";
    $sql="INSERT INTO user(name,password,phone) VALUES ('$username','$password','$phonenumber')";
    $conn->query($sql);
    mysqli_close($conn);
}
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .err{
            color:red;
        }
    </style>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h1>Register form </h1>
        <label for="">UserName: </label>
        <input type="text" name="username"><span class="err">*<?php echo $usernameErr; ?></span><br>
        <lable for="">Password: </lable> 
        <input type="text" name="password"><span class="err">*<?php echo $passwordErr; ?></span><br>
        <label for="">Phone Number: </label>
        <input type="text" name="phonenumber"><span class="err">*<?php echo $phonenumberErr; ?></span><br>
        <input type="submit">
    </form>
</body>
</html>