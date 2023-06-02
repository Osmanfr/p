<?php
include_once 'db.php';

  //mysqli_query($conn," UPDATE users set nom ='" . ['nom']."', prenom='".['prenom']."' WHERE id ='" .['id']."'");

  $message = "<p style = color:green;'>  Just we are traying</p>";
$result = mysqli_query($conn,"SELECT * FROM users WHERE id ='". $_GET['id']. "'");
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>test CURD php</h3>
      <form action=""  method="POST">
        <div><?php if( isset($message)) { echo $message; } ?></div>
        <input type="hidden" name="_method" value="PUT">   
   <label for="Brand"></label><input type="hiden" placeholder="id" class="textfiled" name = 'id' value="<?php echo $row['id']; ?>"><br><br>
   <label for="nom"></label><input type="text" placeholder="nom" name = 'nom'value="<?php echo $row['nom']; ?>"><br><br>
   <label for="prenom"></label><input type="text" placeholder=" prenom " name = 'prenom' value="<?php echo $row['prenom']; ?>"><br><br>
   <input type="submit" name = "Submit" value="submit" class="button">
     <input type="reset" value="reset">
       </form>
    
</body>
</html>