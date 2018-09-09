<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt$
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>
<center>
<br/><br/>
<h2>Select Category</h2>
    <form action="feed.php" method="GET">
        <select name="cat">
            <option>Cloths</option>
            <option>Food</option>
            <option>Electronics</option>
        </select><br/><br/>
        <button class="btn btn-primary" type="submit" name="category">Start</button>
    </form><br/>

<?php
        if(isset($_GET['Done'])){
                echo "Done";
        }

        /* PHP CONNECT 
            <?php
            $conn = mysqli_connect("cloudface.cekfruqjdc4n.ap-south-1.rds.amazonaws.com", "cloudface", "cloudface", "shops");
            if(mysqli_connect_error()){
                echo "Error";
            }
        */
?>
        
?>
</center>
</body>
</html>
