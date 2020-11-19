<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body class="container text-center" style="height: 100vh; background: url(https://images.unsplash.com/photo-1595113316349-9fa4eb24f884?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=100);background-repeat: no-repeat;background-size: cover;">
  <div class="h-100" style="display:grid; align-items: center;">
    <div class="roundred p-3 shadow">
<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'jitmysql.mysql.database.azure.com', 'jitmysql@jitmysql', 'JITsql123', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

$ID=$_GET['rn'];
$query = "DELETE FROM guestbook WHERE ID = '$ID'";

$data = mysqli_query($conn, $query);

if($data)
{
    echo "Delete successfully";
}
else
{
    echo "Error";
}

echo var_export();
?>
<div class="my-5">
<input class="btn btn-success" type="button" value="กลับหน้าหลัก" onclick="window.location.href='https://jitmysql.azurewebsites.net/show.php'" />
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>    
</body>
</html>
