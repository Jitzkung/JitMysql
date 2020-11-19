<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<title>Comment Form</title>
</head>
<body class="container text-center" style="height: 100vh; background: url(https://images.unsplash.com/photo-1595113316349-9fa4eb24f884?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1352&q=100);background-repeat: no-repeat;background-size: cover;">
<?php
    $Name=$_GET['name'];
    $Comment=$_GET['comment'];
    $Link=$_GET['link'];
    $ID = $_GET['id'];
?>
<div class="h-100" style="display:grid; align-items: center;">
    <div class="roundred p-3 shadow">
  <form action = "update.php" method = "post" id="CommentForm" >
    <div class="form-group">
      <label >Name</label>
      <input class="form-control" type="text" name = "name" id="idName" placeholder="Enter Name" value=<?php echo $Name;?>>
    </div>
    <div class="form-group">
      <label >Comment</label>
      <input class="form-control" rows="10" cols="20" name = "comment" id="idComment" placeholder="Enter Comment" value=<?php echo $Comment;?>>
    </div>  
    <div class="form-group">
      <label >Link</label>
      <input class="form-control" type="text" name = "link" id="idLink" placeholder="Enter Link"value=<?php echo $Link;?>>
    </div> 
    <div><input class="btn btn-success" type="submit" id="commentBtn"></div>
    <div><input type="text" name = "stid" id="idstudent" placeholder="Enter Link" style="visibility:hidden;" value=<?php echo $ID;?>></div>
  </form>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script> 
</body>
</html>