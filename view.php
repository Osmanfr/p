
<?php
include_once 'db.php';
$result = mysqli_query($conn, "SELECT * FROM users");
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if (mysqli_num_rows($result)>0){
?>
<table>
    <tr>
        <td>id</td>
        <td>nom</td>
        <td>prenom</td>
        
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)){
        ?>
<tr>
<td><?php echo $row["nom"]; ?></td>
 <td><?php echo $row ["prenom"]; ?></td>

 <td><a href="update.php?id=<?php echo $row["id"]; ?>">update </a></td>
 </tr>
 <?php
 $i++;
 }
 ?>
 </table>
 <?php
 }
 else {
    echo "no result found";
}
 ?>
</body>
</html>