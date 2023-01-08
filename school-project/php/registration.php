<?php
//starting a session

// Get form values

$name = $_POST['name'];
$email = $_POST['email'];
$birth = $_POST['birth'];
$counties = $_POST['counties'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];


//Password validation
if ($password != $confirm) {
    // Password and confirm password do not match
    echo "Error: Password and confirm password do not match";
} else {
  
    
    
    // Execute INSERT statement
    $query = "INSERT INTO users (name,email,date_of_birth,county_located,phone,gender,password) VALUES ('$name', '$email','$birth','$counties','$phone','gender','$password')";
    mysqli_query($con, $query);

    //header('Location:/HTML/index.html');
    //die;
    
}

// Close connection
mysqli_close($conn);

?>