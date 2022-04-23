
<html>
<html lang="en">
<head>
    <title>Signup system</title>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/styles.css" type="text/css">
</head>
<body >
<div class="login-left" >
        <div class="form_validation" style="height: 350px;">
        <?php
         $sm ="You have registerd successfully. Login to access the system";
        ?>
        <h3>Login</h3>
        <form action="loginconnect.php" method= "POST">
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
                    <td>
                        <input class="btn btn-primary" type="submit" role="buttton" value="Login">
                         <a class="btn btn-primary" href="index.php"  role="button">Register</a>
                    </td>
                </tr>    
            </table>
        </form>       
    </div> 
    <style>
        body{
            background-color: #eee !important;
        }
    </style>
</body>
</html>