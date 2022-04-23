<?php  

session_start();
require_once('connect.php');
$name = $pass = $pass ='';
$name = $_POST['name'];
$pass = $_POST['pass'];
$pass = MD5($pass);

$sql = "SELECT * FROM user_validation WHERE name= '$name' and pass ='$pass'" ;

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_assoc($result))
    {
       
        $UId = $row['UID'];
        $name = $row['name'];
        $pass = $row['Pass'];
       
        $_SESSION['UId'] = $UId;
        $_SESSION['name'] = $name;

        $_SESSION['pass'] = $pass;
       
    
      header("Location: home.php");
    }
    
}
else{
    echo "Invalid username or password: Please try again";
}

?>


