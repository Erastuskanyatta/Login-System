<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body style=" background-image: url(img/img.jpg);">
       <?php // validation
       if (isset($_POST['form'])) {
           $name = $_POST['name'];
           $pass = $_POST['pass'];
           $confirmpassword = $_POST['confirmpassword'];
           //   validation
           // 1 username vaalidation
           if (empty($name)) {
               $error_msg['name'] = ' Please enter the username ';
           }
           if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
               //no digits in the username
               $error_msg['name'] =
                   'Please Enter a valid user name';
           }
           // 2. password validation
           if (empty($pass)) {
               $error_msg['pass'] = ' Please enter password ';
           }
           if (strlen($pass) < 8) {
               $error_msg['pass'] =
                   ' Please provide a strong password: min 8 characters!  ';
           }
           if (empty($confirmpassword)) {
               $error_msg['confirmpassword'] = ' Confirm password is required ';
           }
           if ($pass != $confirmpassword) {
               $error_msg['pass3'] = 'password do not match';
           }
           $connect = mysqli_connect('localhost', 'root', '', 'loginSystem');
           if (!$connect) {
               echo mysqli_connect_error();
           }
           if (!$error_msg) {
               $query = "INSERT INTO  user_validation(name, pass)
        VALUES('$name', md5('$pass'))";
               if (mysqli_query($connect, $query)) {
                   $sm ="You have registerd successfully. Login to access the system";
                   header("location: login.php?success=$sm");
               } else {
                   $fail = 'There was an error registering. PLease try again ';
               }
           }
       } ?> 
</div> 
    <div class="login-left" >
        <div  class="form_validation" style="height: 350px;" >
        <h3>Registration Form</h3>
        <form action="" method= "post" id="form">
        <div class="succ">
    <?php
    if (isset($succ)) {
        echo $succ;
    }
    if (isset($fail)) {
        echo $fail;
    }
    ?>
        <div class="error_msg">
            <div class="t alert-warning" >
            <?php
            if (isset($error_msg['name'])) {
                echo $error_msg['name'];
            }
            if (isset($error_msg['pass'])) {
                echo $error_msg['pass'];
            }
            if (isset($error_msg['confirmpassword'])) {
                echo $error_msg['confirmpassword'];
            }
            if (isset($error_msg['pass3'])) {
                echo $error_msg['pass3'];
            }
            ?>
            </div>
        </div>
        <table>
                <tr>
                    <td class="label"><label>Username</label>
                        <input type="text" name="name" placeholder="username" class="text"> 
                    </td>
                </tr>
                <tr>
                    <td class="label"><label>Password</label>
                
                     <input type="password" name="pass" placeholder="password" class="text">
                </td>
                </tr>
                <tr>
                    <td class="label"><label>Confirm<br>password</label>
                        <input type="password" name="confirmpassword" placeholder="Confirmpassword" class="text">
                    </td>
                </tr>
                <tr>
                    <td>
                    <label class="label">
                        Profile Picture
                    </label>
                   
                    <input type="file" class="" name="pp">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input class="btn btn-primary" type="submit" name="form" class="btn" value="Register">
                        
                        <a class="btn btn-primary" href="login.php" role="button">Login</a>
                </tr>
                    
            </table>
        </form>
        </div>
    </div>
  
</body>
</html>