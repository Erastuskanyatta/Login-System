 <?php
session_start();
require_once('connect.php');
if(isset($_SESSION['name'])){

?> 
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/home.css" type="text/css">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body >
    <div class="welcome">
    <h3 class="fs-xs m-2">Welcome  <span><?php echo $_SESSION['name'];?></span></h3>
             
            <a class ="link" href="logout.php" class="btn " id="button" > Logout</a> 

    </div>

</body>
<style>
    span{
        color: red;
    }
    .fs-xs{
        font-size: larger;
        color: white;
    }
    .welcome{
        background-color: black;
        color: white;
        text-align: center;
        font-size: large;
        margin: auto;
        width: 100%;
        padding: 310px;
    }
    .link{
        font-size: larger;
        color: white;

    }
</style>
</html>
<?php
}else{
    header("Location: index.php");
}




  
